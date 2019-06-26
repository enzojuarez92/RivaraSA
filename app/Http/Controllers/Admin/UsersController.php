<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Events\UsuarioCreado;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateUserRequest;
use Spatie\Permission\Models\Permission;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::permitidos()->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', new User);
        $user= new User;
        $roles= Role::with('permissions')->get();
        $permissions= Permission::pluck('name', 'id');

        return view('admin.users.create', compact('user', 'roles', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', new User);
        $data= $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);
        $data['password']= str_random(8);

        $user= User::create($data);

        if ($request->filled('roles')) {
            $user->assignRole($request->roles);
        }
        if ($request->filled('permissions')) {
            $user->givePermissionTo($request->permissions);
        }

        UsuarioCreado::dispatch($user, $data['password']);

        return redirect()->route('admin.users.index')->with('flash', 'Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);
        return view('admin.users.ver', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);
        $roles= Role::with('permissions')->get();
        $permissions= Permission::pluck('name', 'id');
        return view('admin.users.editar', compact('user', 'roles', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $this->authorize('update', $user);

        if ($request->hasFile('avatar')) {
            if (!empty($user->avatar)) {
                Storage::delete($user->avatar);
            }

            $foto= request()->file('avatar');
            $fotoUrl= $foto->store('admin/avatarPerfil');
            $user->avatar= $fotoUrl;
            $user->update();
        }

        $user->update($request->validated());
        return back()->with('flash', 'Usuario Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('delete', $user);
        $user->delete();
        return redirect()->route('admin.users.index')->with('war', 'Usuario Eliminado correctamente');
    }
}

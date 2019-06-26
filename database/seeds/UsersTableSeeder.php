<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::Truncate();
        Role::Truncate();
        User::Truncate();


        $verPostPermission = Permission::create(['name' => 'Ver Posts']);
        $updatePostPermission = Permission::create(['name' => 'Update Posts']);
        $deletePostPermission = Permission::create(['name' => 'Delete Posts']);

        $verUsuariosPermission = Permission::create(['name' => 'Ver Usuarios']);
        $updateUsuariosPermission = Permission::create(['name' => 'Editar Usuarios']);

        $leadpermision1 = Permission::create(['name' => 'lead.view']);
        $leadpermision2 = Permission::create(['name' => 'lead.update']);

        $teampermision1 = Permission::create(['name' => 'team.view']);
        $teampermision2 = Permission::create(['name' => 'team.update']);

        $clientpermision1 = Permission::create(['name' => 'client.view']);
        $clientpermision2 = Permission::create(['name' => 'client.update']);

        $partnerpermision1 = Permission::create(['name' => 'partner.view']);
        $partnerpermision2 = Permission::create(['name' => 'partner.update']);


        $adminRole = Role::create(['name' => 'Admin']);

        $admin = new User;
        $admin->name = 'Jonathan';
        $admin->email = 'jg.pradi@gmail.com';
        $admin->password = 'jjkkll';

        $admin->save();

        $admin->assignRole($adminRole);

        $escritorRole = Role::create(['name' => 'Escritor']);

        $escritor = new User;
        $escritor->name = 'Leonardo';
        $escritor->email = 'leonardoandrespardo@gmail.com';
        $escritor->password = 'jjkkll';

        $escritor->save();

        $escritor->assignRole($escritorRole);
    }
}

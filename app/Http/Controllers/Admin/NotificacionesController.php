<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Notifications\DatabaseNotification;

class NotificacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $noLeidas= auth()->user()->unreadNotifications;
        $leidas= auth()->user()->readNotifications;
        return view('admin.users.notificaciones', compact('noLeidas', 'leidas'));
    }
    public function leida($id)
    {
        DatabaseNotification::find($id)->markAsRead();
        return back()->withFlash('Notificación Marcada como Leida');
    }
    public function destroy($id)
    {
        DatabaseNotification::find($id)->delete();
        return back()->withFlash('Notificación Eliminada');
    }
}

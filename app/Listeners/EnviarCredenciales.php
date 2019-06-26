<?php

namespace App\Listeners;

use App\Events\UsuarioCreado;
use App\Mail\LoginCredentials;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnviarCredenciales
{

    /**
     * Handle the event.
     *
     * @param  UsuarioCreado  $event
     * @return void
     */
    public function handle(UsuarioCreado $event)
    {
        Mail::to($event->user)->queue(
            new LoginCredentials($event->user, $event->password)
        );
    }
}

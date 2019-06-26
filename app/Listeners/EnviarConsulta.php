<?php

namespace App\Listeners;

use App\Events\ContactoEnviado;
use App\Mail\DatosContacto;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class EnviarConsulta implements ShouldQueue
{

    /**
     * Handle the event.
     *
     * @param  ContactoEnviado  $event
     * @return void
     */
    public function handle(ContactoEnviado $event)
    {
        Mail::to(EMAIL_NOTIFICATION)->queue(
            new DatosContacto($event->data)
        );
    }
}

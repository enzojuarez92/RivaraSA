<?php

namespace App\Listeners;

use App\Events\ContactoEnviado;
use App\Lead;
use App\Notifications\MensajeRecibido;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class GuardarContacto implements ShouldQueue
{

    /**
     * Handle the event.
     *
     * @param  ContactoEnviado  $event
     * @return void
     */
    public function handle(ContactoEnviado $event)
    {

        $buscar = Lead::where('email', $event->data['email'])->first();

        if (!$buscar) {
            $contacto = new Lead;
            $contacto->name = $event->data['name'];
            $contacto->email = $event->data['email'];
            $contacto->telefono = $event->data['telefono'];
            $contacto->fuente = $event->data['fuente'];
            $contacto->conocio = $event->data['conocio'];
            $contacto->subject = $event->data['subject'];
            $contacto->message = $event->data['message'];
            $contacto->save();
        }

        // notificar usuario uno o varios usuarios
        // $receptor= User::findOrFail(1);
        // $receptor->notify(new MensajeRecibido($event->data));
        $users = User::all();
        Notification::send($users, new MensajeRecibido($event->data));
    }
}

<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MensajeRecibido extends Notification implements ShouldQueue
{
    use Queueable;

    protected $mensaje;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nueva consulta Web')
            ->greeting('Hola!')
            ->salutation('Saludos.')
            ->line('Recibiste una consulta en la web.')
            ->action('Visita la intranet para ver el nuevo contacto', env('APP_URL') . '/admin')
            ->line('Gracias por usar nuestra aplicación');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'link' => route('admin.leads.index'),
            'icon' => 'fa fa-send',
            'texto' => 'Recibiste una consulta por web',
            'Contenido' => $this->mensaje,
        ];
    }
}

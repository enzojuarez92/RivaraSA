<?php

namespace Modules\DvsAdmin\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('dvsadmin::emails.testEmail')
            ->from(env('MAIL_SENDER') ?? cms('contacto')->email, env('APP_NAME'))
            ->subject(env('APP_NAME') . ' Enviado desde Panel Admin');
    }
}

        <ul class="list-group">
            <li class="list-group-item active">Entorno: {{ env('APP_ENV') }}</li>
            <li class="list-group-item">Nombre: {{ env('APP_NAME') }}</li>
            <li class="list-group-item">Debug: {{ env('APP_DEBUG') }}</li>
            <li class="list-group-item">MailHost: {{ env('MAIL_HOST') }}</li>
            <li class="list-group-item">Queue Driver: {{ env('QUEUE_DRIVER') }}</li>
        </ul>

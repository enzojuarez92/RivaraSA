@component('mail::message')
# Credenciales de ingreso

Para ingresar a la plataforma de administración tenes que ingresar lo siguiente: 

@component('mail::table')
|Usuario|Contraseña|
|:---------|:-----------|
| {{$user->email}}   | {{$password}} |

@endcomponent

@component('mail::button', ['url' => 'login'])
Ingresa ahora!
@endcomponent

Muchas gracias!,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# Recibiste un correo de

@component('mail::table')
|Nombre|Email|
|:---------|:-----------|
| {{$data['name']}}   | {{$data['email']}} |

@endcomponent

# Asunto
{{$data['subject']}}

# Contenido consulta
{{$data['message']}}



Enviado desde la Web.<br>
{{ config('app.name') }}
@endcomponent

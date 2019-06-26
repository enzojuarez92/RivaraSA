@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img style="width:100px" src="{{ asset(LOGO_REDES) }}" alt="logo">
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} powered by <a href="https://dvs360.com/?utm_source=EMAILS&utm_medium={{env('APP_NAME')}}">dvs360.com</a>. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent

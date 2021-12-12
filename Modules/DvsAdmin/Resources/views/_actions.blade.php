<div class="card-columns">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Enviar mail de prueba</h4>
            <p class="card-text">
                <a href="{{ route('dvsadmin.testEmail') }}">Probar correo</a>
            </p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Borrar Log</h4>
            <p class="card-text">
                <a href="{{ route('dvsadmin.logClear') }}">Borrar Log</a>
            </p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Borrar Cache</h4>
            <p class="card-text">
                <a href="{{ route('dvsadmin.cacheClear') }}">Borrar Cache y Vistas</a>
            </p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Reiniciar Queue</h4>
            <p class="card-text">
                <a href="{{ route('dvsadmin.queueRestart') }}">Reiniciar Queues</a>
            </p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Reiniciar Telescope</h4>
            <p class="card-text">
                <a href="{{ route('dvsadmin.telescopeRestart') }}">Reiniciar Telescope</a>
            </p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Migrate Fresh</h4>
            <p class="card-text">
                @if (env('APP_ENV') == 'local')
                <a href="{{ route('dvsadmin.migrateFresh') }}">Borrar Todo</a>
                @else
                Estas en produccion y esta acción no esta permitida, ¿Ta loco vo'?
                @endif
            </p>
        </div>
    </div>
</div>

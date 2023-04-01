@extends('dvsadmin::layouts.master')

@section('content')

    @include('flash::message')
    <h1>Colas de trabajo fallidas en {{ env('APP_NAME') }}</h1>


    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Queue</th>
                        <th>Resultado</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($failed as $f)
                        <tr>
                            <td scope="row">{{ $f->queue }}</td>
                            <td>
                                <textarea class="form-control" name="" id="" cols="30" rows="10">{{ $f->payload }}</textarea>
                            </td>
                            <td>
                                <textarea class="form-control" name="" id="" cols="30" rows="10">{{ $f->exception }}</textarea>
                            </td>
                            <td>{{ $f->failed_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
        <div class="col-md-4">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">Acciones</button>
                <button data-toggle='modal' data-target='#borrarTrabajos' type="button" class="list-group-item list-group-item-action">Borrar Trabajos</button>

                <button data-toggle='modal' data-target='#reiniciarTrabajos' type="button" class="list-group-item list-group-item-action">Reiniciar Trabajos</button>

                <div class='modal fade' tabindex='-1' role='dialog' id='borrarTrabajos'>
                    <div class='modal-dialog modal-lg' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                ¿Seguro? <br>
                                Se borraran todos los trabajos
                            </div>
                            <div class='modal-body'>
                                <form action="{{ route('dvsadmin.failedJobsReset') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='modal fade' tabindex='-1' role='dialog' id='reiniciarTrabajos'>
                    <div class='modal-dialog modal-lg' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                ¿Seguro? <br>
                                Se reiniciarian todos los trabajos
                            </div>
                            <div class='modal-body'>
                                <form action="{{ route('dvsadmin.failedJobsRetry') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

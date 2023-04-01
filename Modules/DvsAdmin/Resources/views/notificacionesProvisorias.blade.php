@extends('dvsadmin::layouts.master')

@section('content')

    @include('flash::message')
    <h1>Notificaciones Provisorias Mercadopago {{ env('APP_NAME') }}</h1>


    <div class="row">
        <div class="col-md-12">

            <table class="table">
                <thead>
                    <tr>
                        <th>Topico</th>
                        <th>Recibido</th>
                        <th>Consulta ml</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notificaciones->reverse() as $n)
                        <tr>
                            <td scope="row">{{ $n->topic }}</td>
                            <td>
                                <textarea class="form-control" name="" id="" cols="30" rows="10">{{ $n->recibido }}</textarea>
                            </td>
                            <td>
                                <textarea class="form-control" name="" id="" cols="30" rows="10">{{ $n->consultado }}</textarea>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection

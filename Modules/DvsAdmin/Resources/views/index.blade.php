@extends('dvsadmin::layouts.master')

@section('content')

    @include('flash::message')
    <h1>Mantenimiento {{ env('APP_NAME') }}</h1>


    <div class="row">
        <div class="col-md-8">
            @include('dvsadmin::_actions')
        </div>
        <div class="col-md-4">
            @include('dvsadmin::_env')
        </div>
    </div>
@endsection

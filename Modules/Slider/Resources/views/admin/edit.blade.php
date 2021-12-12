@extends('slider::layouts.master')

@section('heading')
    <div class="content-heading">
        <div class="heading-left">
            <h1 class="page-title"><i class="ti-layout-slider-alt"></i> Sliders Web</h1>
            <p class="page-subtitle"></p>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Sitios</a></li>
                <li class="breadcrumb-item"><a href="{{ route('slider.admin.index') }}">Sliders</a></li>
                <li class="breadcrumb-item active">Editar Slider</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ti-pencil"></i> Editar Slider
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    @include('slider::admin.forms.update')
                                </div>
                                <div class="col-md-8">
                                    @include('slider::content.tables.list')
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-slider-content">Agregar Imágen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('slider::content.modals.create')
@endsection

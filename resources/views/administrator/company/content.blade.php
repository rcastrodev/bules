@extends('adminlte::page')
@section('title', 'Contenido empresa')
@section('content_header')
    <div class="d-flex">
        <h1 class="mr-3">Contenido de empresa</h1>
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-create-element">crear Slider</button>
    </div>
@stop
@section('content')
<div class="row mb-5">
    <div class="col-sm-12">
        <table id="page_table_slider" class="table">
            <thead>
                <tr>
                    <th>Orden</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@isset($section2)
    <form action="{{ route('company.content.updateInfo') }}" class="mb-5" method="post" data-asyn="no" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$section2->id}}">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="form-group ">
                    <input type="text" name="content_1" value="{{$section2->content_1}}" class="form-control">
                </div>
                <div class="form-group">
                    <textarea name="content_2" class="ckeditor" cols="30" rows="10">{{$section2->content_2}}</textarea>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <small>imagen 606x421px</small>
                    <input type="file" name="image" class="form-control-file">
                </div>
                @if (Storage::disk('custom')->exists($section2->image))
                    <div class="mb-3">
                        <img src="{{ asset($section2->image) }}" class="img-fluid" width="400" height="200">
                    </div>
                @endif
            </div>
        </div>
        <button class="btn btn-primary">Actualizar</button>
    </form>  
@endisset
<div class="row mb-5 pb-5">
    <div class="col-sm-12">
        <div class="d-flex">
            <h4 class="mr-3">Características</h4>
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-create-feature">crear</button>
        </div>
        <table id="page_table_features" class="table">
            <thead>
                <tr>
                    <th>Orden</th>
                    <th>Contenido</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@includeIf('administrator.company.modals.create')
@includeIf('administrator.company.modals.update')
@includeIf('administrator.company.features.create')
@includeIf('administrator.company.features.update')
@stop
@section('css')
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="url" content="{{route('company.content')}}">
    <meta name="content_find" content="{{route('content')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
@stop

@section('js')
    <script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/admin/index.js') }}"></script>
    <script src="{{ asset('js/admin/company/index.js') }}"></script>
@stop


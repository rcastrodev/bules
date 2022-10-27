@extends('adminlte::page')
@section('title', 'calidad')
@section('content_header')
    <div class="d-flex">
        <h1 class="mr-3">Calidad</h1>
    </div>
@stop
@section('content')
@isset($section1)
    <form action="{{ route('quality.content.updateInfo') }}" class="mb-5" method="post" data-asyn="no" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$section1->id}}">
        <div class="form-group">
            <small>imagen 1366x237px</small>
            <input type="file" name="image" class="form-control-file">
        </div>
        @if (Storage::disk('custom')->exists($section1->image))
            <div class="mb-3">
                <img src="{{ asset($section1->image) }}" class="img-fluid" width="400" height="200">
            </div>
        @endif
        <button class="btn btn-primary">Actualizar</button>
    </form>  
@endisset
@isset($section2)
    <form action="{{ route('quality.content.updateInfo') }}" class="mb-5" method="post" data-asyn="no" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$section2->id}}">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group ">
                    <input type="text" name="content_1" value="{{$section2->content_1}}" class="form-control">
                </div>
                <div class="form-group">
                    <textarea name="content_2" class="ckeditor" cols="30" rows="10">{{$section2->content_2}}</textarea>
                </div>
            </div>
        </div>
        <button class="btn btn-primary">Actualizar</button>
    </form>  
@endisset
@isset($section3s)
    @if (count($section3s))
        <div class="row">
            @foreach ($section3s as $s3)
                <div class="col-sm-12 col-md-4">
                    <form action="{{ route('quality.content.updateInfo') }}" class="mb-5" method="post" enctype="multipart/form-data" data-asyn="no">
                        @csrf
                        <input type="hidden" name="id" value="{{$s3->id}}">
                        <div class="form-group ">
                            <input type="file" name="image" class="form-control-file">
                            <small>Tamaño recomendado 189x199px</small>
                        </div> 
                        <div class="">
                            @if (Storage::disk('custom')->exists($s3->image))
                                <img src="{{ asset($s3->image) }}" class="img-fluid d-block mx-auto" style="max-width: 120px; object-fit: cover; max-height: 120px;">  
                            @endif
                        </div>  
                        <div class="py-4">
                            <button class="btn btn-primary">Actualizar</button>
                            @if (Storage::disk('custom')->exists($s3->image))
                                <button class="btn btn-danger eliminar" data-url="{{ route('quality.eliminar-imagen', ['id'=>$s3->id]) }}">Eliminar</button>
                            @endif
                        </div>
                    </form>   
                </div>
            @endforeach
        </div>
    @endif
@endisset
@isset($section4s)
    @if (count($section4s))
        <div class="row">
            @foreach ($section4s as $s4)
                <div class="col-sm-12 col-md-6">
                    <form action="{{ route('quality.content.updateInfoImages') }}" class="mb-5" method="post" enctype="multipart/form-data" data-asyn="no">
                        @csrf
                        <input type="hidden" name="id" value="{{$s4->id}}">
                        <div class="form-group ">
                            <input type="text" name="content_1" value="{{$s4->content_1}}" class="form-control">
                        </div>
                        <div class="form-group ">
                            <input type="file" name="image" class="form-control-file">
                        </div> 
                        <div class="py-4">
                            <button class="btn btn-primary">Actualizar</button>
                            @if (Storage::disk('custom')->exists($s4->image))
                                <button class="btn btn-danger eliminar" data-url="{{ route('quality.eliminar-imagen', ['id'=> $s4->id]) }}">Eliminar</button>
                            @endif
                        </div>
                    </form>   
                </div>
            @endforeach
        </div>
    @endif
@endisset
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
    <script>
        $('.eliminar').click(function(e){
            e.preventDefault();
            axios.post(e.target.dataset.url).then(r => {
                e.target.textContent = 'Eliminado'
                setTimeout(() => {
                    location.reload()
                }, 1500);
        }).catch(error => console.error(error))
            
        })
    </script>
@stop


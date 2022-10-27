@extends('paginas.partials.app')
@section('content')
<div aria-label="breadcrumb" class="bg-light py-1 font-size-14">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('index') }}" class="text-decoration-none"><i class="fas fa-home"></i> </a></li>
            <li class="breadcrumb-item"><a href="{{ route('categorias') }}" class="text-decoration-none font-size-13 fst-italic">Productos</a></li>
			<li class="breadcrumb-item active font-size-13 fst-italic" aria-current="page">{{ $category->name }}</li>
		</ol>
	</div>
</div>
@isset($categories)
    @if (count($categories))
        <section class="py-sm-2 py-md-5">
            <div class="container row mx-auto px-0">
                <aside class="col-sm-12 col-md-3 d-sm-none d-md-block">
                    <ul class="p-0" style="list-style: none;">
                        @foreach ($categories as $c)
                            <li class="py-2 @if($c->name == $category->name) active @endif" > 
                                <a href="#" class="toggle d-block p-2 text-decoration-none  text-decoration-none text-blue-dark font-size-14 d-inline-block" style="@if($c->name == $category->name) background-color: #005BA8; color:white; @endif">{{$c->name}}</a>
                                <ul class="p-0 bg-light {{ ($c->id == $category->id) ? '' : 'rd-none' }}" style="list-style: none">
                                    @foreach ($c->products as $cp)
                                        <li class="py-2">
                                            <a href="{{ route('producto', ['product' => $cp->id]) }}" class="text-blue-dark text-decoration-none ps-4 font-size-14 d-inline-block fw-bold">{{$cp->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>                        
                        @endforeach
                    </ul>
                </aside>
                <section class="col-sm-12 col-md-9 font-size-14">
                    <div class="row">
                        @isset($products)
                            @foreach ($products as $p)
                                <div class="col-sm-12 col-md-4 mb-3">
                                    @include('paginas.partials.producto', ['p' => $p])
                                </div>
                            @endforeach                    
                        @endisset
                    </div>

                </section>
            </div>
        </section>
    @endif
@endisset

@endsection
@push('scripts')
    <script src="{{ asset('js/pages/product.js') }}"></script>
@endpush



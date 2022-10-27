@extends('paginas.partials.app')
@section('content')
@isset($section1s)
	@if (count($section1s))
		<div id="sliderHero" class="carousel slide position-relative" data-bs-ride="carousel">
			<div class="carousel-indicators">
				@foreach ($section1s as $k => $v)
					<button type="button" data-bs-target="#sliderHero" data-bs-slide-to="{{$k}}" class="@if(!$k) active @endif"  aria-current="true" aria-label="Slide {{$k}}"></button>
				@endforeach
			</div>
			<div class="carousel-inner">
				@foreach ($section1s as $k => $v)
					<div class="carousel-item @if(!$k) active @endif">
						<img src="{{ asset($v->image) }}" class="d-block w-100">
						<div class="carousel-caption d-none d-md-block text-start">
							<h2 class="font-size-40 text-blue fw-bold">{{ $v->content_1 }}</h2>
							<div class="font-size-16 text-black" style="font-weight: 500;">{!! $v->content_2 !!}</div>
							<a href="{{ route('categorias') }}" class="bg-blue font-size-14 btn text-white py-2 px-4 rounded-pill">Conocé más</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>		
	@endif
@endisset
@isset($categories)
	@if (count($categories))
	<section class="py-md-5 py-sm-3">
		<div class="container row mx-auto">
			<div class="container py-md-5 py-sm-2 font-size-20 text-blue fw-bolder">CATEGORÍAS DE PRODUCTOS</div>
			@foreach ($categories as $c)
				<div class="col-sm-12 col-md-3 mb-3">
					@includeIf('paginas.partials.categoria', ['c' => $c])
				</div>
			@endforeach
		</div>
	</section>
	@endif
@endisset
@isset($section2)
	<section class="mb-2 bg-light py-5">
		<div class="container mx-auto">
			<div class="row justify-content-center">
				<div class="col-sm-12 col-md-9">
					<div class="font-size-16 mb-5 text-black text-center" style="font-weight:500;">{!! $section2->content_1 !!}</div>
					<div class="d-flex flex-sm-wrap flex-md-nowrap justify-content-center">
						@foreach ($section3s as $s3)
							<img src="{{ asset($s3->image) }}" class="img-fluid d-block me-sm-0 me-md-2 mb-sm-3 mb-md-0" style="width: 189px; height:199px;">
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
@endisset
@isset($products)
	@if (count($products))
	<section class="py-md-5 py-sm-3">
		<div class="container row mx-auto">
			<div class="container mb-5 font-size-20 text-blue fw-bolder">PRODUCTOS DESTACADOS</div>
			@foreach ($products as $p)
				<div class="col-sm-12 col-md-3 mb-3">
					@includeIf('paginas.partials.producto', ['p' => $p])
				</div>
			@endforeach
		</div>
	</section>
	@endif
@endisset
@isset($posts)
	@if (count($posts))
	<section class="py-md-5 py-sm-3 bg-light">
		<div class="container row mx-auto">
			@foreach ($posts as $p)
				<div class="col-sm-12 col-md-4 mb-3">
					<div class="card" style="border-top: 15px solid #005BA8; border-radius:0; min-height: 500px;">
						<img src="{{ asset($p->image) }}" class="card-img-top">
						<div class="card-body position-relative">
							<small style="display: block; border-bottom: 1px solid #CBCBCB; margin-bottom: 15px;">{{ $p->content_3 }}</small>
							<h5 class="card-title font-size-14">{{ $p->content_1 }}</h5>
							<small class="font-size-10">{{ date('d/m/Y', strtotime($p->created_at)) }}</small>
							<p class="card-text font-size-16">{!! Str::limit($p->content_2, 200) !!}</p>
							<a href="{{ route('obtenerNovedad', ['id'=> $p->id]) }}" class="btn text-blue font-size-14 position-absolute fw-bold" style="bottom: 20px; right: 20px;">
								<img src="{{ asset('images/baseline-last_page-24px.svg') }}" alt="">
								Ver más</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</section>
	@endif
@endisset
@endsection
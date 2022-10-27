@extends('paginas.partials.app')
@section('content')
@isset($sliders)
	@if(count($sliders))
		<div id="sliderEmpresa" class="carousel slide position-relative" data-bs-ride="carousel">
			<div class="carousel-indicators d-sm-none d-md-block">
				@foreach ($sliders as $k => $slide)
					<button type="button" data-bs-target="#sliderEmpresa" data-bs-slide-to="{{$k}}" class="@if (!$k) active @endif" aria-current="true" aria-label="Slide {{$k}}"></button>			
				@endforeach
			</div>
			<div class="carousel-inner h-100">
				@foreach ($sliders as $k => $slide)
					<div class="carousel-item h-100 @if (!$k) active @endif" style="background-image: linear-gradient(rgb(0 0 0 / 48%),rgba(0, 0, 0, 0.1)), url({{ asset($slide->image) }}); background-repeat: no-repeat; background-size: 100% 100%; background-position: center;">
						<div class="carousel-caption w-75">
							<h2 class="font-size-50 fw-bold">{{ $slide->content_1 }}</h2>
						</div>
					</div>		
				@endforeach
			</div>
		</div>
	@endif	
@endisset
@isset ($section2)
	<div class="py-md-5 py-sm-3">
		<div class="container">			
			<div class="row font-size-15 fw-light" style="color: #707070;">
				@if (Storage::disk('custom')->url($section2->image))
					<div class="col-sm-12 col-md-6 order-sm-2 order-md-1">
						<img src="{{ asset($section2->image) }}" class="img-fluid">
					</div>
				@endif
				<div class="col-sm-12 col-md-6 text-blue-dark order-sm-1 order-md-2">
					<h2 class="pb-2 mb-4 font-size-25 text-blue" style="border-bottom: 1px solid #3D709C !important;">{{$section2->content_1}}</h2>
					<div class="font-size-14 ul-empresa" style="font-weight: 500;">{!! $section2->content_2 !!}</div>
					<div class="d-flex flex-sm-wrap flex-md-nowrap justify-content-md-between justify-content-sm-center">
						@foreach ($section3s as $s3)
							<div class="mb-sm-3 mb-md-0 text-center">
								<div class="text-center">
									<img src="{{ asset($s3->image) }}" style="padding: 7px 9px;
									background-color: #3D709C; border-radius: 100%; min-width: 30px; min-height: 30px;
									max-height: 30px; max-width: 30px; box-sizing: content-box;">
								</div>
								<span class="d-block text-center text-blue fw-bold">{{ $s3->content_1 }}</span>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>	
@endisset
@endsection

<div id="pre-header" class="d-sm-none d-md-block bg-blue-dark font-size-12 position-relative" style="overflow: hidden;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="" style="z-index: 100;">
                <div class="me-3 d-inline-block">
                    <i class="fab fa-whatsapp text-white me-1"></i> 
                    @php $phone3 = Str::of($data->phone3)->explode('|') @endphp
                    @if (count($phone3) == 2)
                        <a href="https://wa.me/{{$phone3[0]}}" class="text-white underline underline">{{ $phone3[1] }}</a>
                    @else 
                        <a href="https://wa.me/{{$data->phone3}}" class="text-white underline underline">{{ $data->phone3 }}</a>
                    @endif
                </div>
                <div class="d-inline-block email me-3">
                    <a href="mailto:{{ $data->email }}" class="mb-xs-2 mb-md-0 text-white underline underline" style="z-index: 100;">
                        <i class="fas fa-envelope text-white me-1"></i> {{ $data->email }}
                    </a>
                </div>
            </div>
            <div class="d-flex align-items-center" style="z-index: 100;">
                <div id="redes-sociales">    
                    <a href="{{$data->facebook}}" class="text-white text-decoration-none p-2 py-3 bg-black">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{$data->instagram}}" class="text-white text-decoration-none p-2 py-3 bg-black">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="{{$data->linkedin}}" class="text-white text-decoration-none p-2 py-3 bg-black">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="{{$data->youtube}}" class="text-white text-decoration-none p-2 py-3 bg-black">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
                <form action="{{ route('productos') }}"  class="form-pre-header">
                    <div class="input-group">
                        <input type="text" name="b" class="form-control bg-transparent border-end-0 input-search p-0 px-2" placeholder="Buscar ...">
                        <button type="submit" class="input-group-text bg-transparent border-start-0"><i class="fas fa-search text-white"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset($data->logo_header) }}" class="img-fluid logo-header">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center text-uppercase position-relative py-md-4 py-sm-2" id="navbarNav">
            <ul class="navbar-nav justify-content-end align-items-center w-100">
                <li class="nav-item @if(Request::is('/')) position-relative @endif">
                    <a class="nav-link text-blue-dark @if(Request::is('/')) active @endif" href="{{ route('index') }}">Inicio</a>
                </li>
                <li class="nav-item @if(Request::is('empresa')) position-relative @endif">
                    <a class="nav-link text-blue-dark @if(Request::is('empresa')) active @endif" href="{{ route('empresa') }}">Empresa</a>
                </li>
                <li class="nav-item @if(Request::is('categorias') || Request::is('categoria/*') ||  Request::is('productos') || Request::is('productos/*') || Request::is('producto/*')) position-relative @endif">
                    <a class="nav-link text-blue-dark @if(Request::is('categorias') || Request::is('categoria/*') || Request::is('productos') || Request::is('productos/*') || Request::is('producto/*')) active @endif" href="{{ route('categorias') }}">Productos</a>
                </li>
                <li class="nav-item @if(Request::is('novedades') || Request::is('novedades/*')) position-relative @endif">
                    <a class="nav-link text-blue-dark @if(Request::is('novedades') || Request::is('novedades/*')) active @endif" href="{{ route('novedades') }}">Novedades</a>
                </li>
                <li class="nav-item @if(Request::is('calidad')) position-relative @endif">
                    <a class="nav-link text-blue-dark @if(Request::is('calidad')) active @endif" href="{{ route('calidad') }}">Calidad</a>
                </li>
                <li class="nav-item @if(Request::is('contacto')) position-relative @endif">
                    <a class="nav-link text-blue-dark @if(Request::is('contacto')) active @endif" href="{{ route('contacto') }}">Contacto</a>
                </li>
                <li class="nav-item d-sm-block d-md-none @if(Request::is('contacto')) position-relative @endif">
                    <a class="nav-link text-blue-dark @if(Request::is('contacto')) active @endif" href="{{ route('contacto') }}" >Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>  

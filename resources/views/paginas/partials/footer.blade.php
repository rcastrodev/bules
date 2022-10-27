<footer class="py-sm-2 pt-md-5 p-md-2 font-size-15 bg-blue-dark text-sm-center text-md-start">
    <div class="container">
        <div class="row justify-content-between pb-3">
            <div class="col-sm-12 col-md-3 d-sm-none d-md-block">
                <a href="{{ route('index') }}">
                    <img src="{{ asset($data->logo_footer) }}" alt="" class="d-block img-fluid mb-4">
                </a>
                <div style="position: relative; bottom: 15px;">
                    <a href="{{$data->facebook}}" class="text-white text-decoration-none p-2 py-3">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{$data->instagram}}" class="text-white text-decoration-none p-2 py-3">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="{{$data->linkedin}}" class="text-white text-decoration-none p-2 py-3">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="{{$data->youtube}}" class="text-white text-decoration-none p-2 py-3">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 d-sm-none d-md-block">
                <h6 class="text-uppercase text-white fw-bold mb-3">secciones</h6>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <a href="{{ route('index') }}" class="d-block text-decoration-none text-light font-size-14 mb-1 underline">Home</a>
                        <a href="{{ route('empresa') }}" class="d-block text-decoration-none text-light font-size-14 mb-1 underline">Nosotros</a>
                        <a href="{{ route('productos') }}" class="d-block text-decoration-none text-light font-size-14 mb-1 underline">Productos</a>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <a href="{{ route('novedades') }}" class="d-block text-decoration-none text-light font-size-14 mb-1 underline">Novedades</a>
                        <a href="{{ route('calidad') }}" class="d-block text-decoration-none text-light font-size-14 mb-1 underline">Calidad</a>
                        <a href="{{ route('contacto') }}" class="d-block text-decoration-none text-light font-size-14 mb-1 underline">Contacto</a>
                    </div>
                </div>                
            </div>
            <div class="col-sm-12 col-md-5 font-size-13 mb-sm-4 mb-md-0">
                <div class="row">
                    <h6 class="text-uppercase text-white fw-bold mb-3">contacto</h6>
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <div class="d-flex text-white mb-1">
                                <i class="fas fa-map-marker-alt d-block me-3 mb-3 text-white font-size-20"></i>
                                <div class="text-start">
                                    <strong class="text-white">Dirección</strong>
                                    <span class="d-block text-light">{{ $data->address }}</span>
                                </div>
                            </div>
                            <div class="d-flex text-white">
                                <i class="fas fa-envelope d-block me-3 mb-3 text-white font-size-20"></i>
                                <div class="text-start">
                                    <strong class="text-white d-block">E-mail</strong>
                                    <a href="mailto:{{ $data->email }}" class="text-light underline">{{ $data->email }}</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-5">
                            <div class="d-flex mb-2">
                                <i class="fab fa-whatsapp d-block me-3 mb-3 text-white font-size-20"></i>
                                <div class="d-flex flex-column text-start">
                                    <strong class="text-white d-block">WhatsApp</strong>
                                    @php $phone3 = Str::of($data->phone3)->explode('|') @endphp
                                    @if (count($phone3) == 2)
                                        <a href="https://wa.me/{{ $phone3[0]}}" class="text-light underline mb-1">{{ $phone3[1] }}</a>  
                                    @else 
                                        <a href="https://wa.me/{{ $data->phone3}}" class="text-light underline mb-1">{{ $data->phone3 }}</a>  
                                    @endif
                                </div>
                            </div> 
                            <div class="d-flex mb-2">
                                <i class="fas fa-phone-alt d-block me-3 mb-3 text-white font-size-20"></i>
                                <div class="d-flex flex-column text-start">
                                    <strong class="text-white d-block">Llámenos al</strong>
                                    @php $phone = Str::of($data->phone1)->explode('|') @endphp
                                    @if (count($phone) == 2)
                                        <a href="tel:{{ $phone[0]}}" class="text-light underline mb-1">{{ $phone[1] }}</a>  
                                    @else 
                                        <a href="tel:{{ $data->phone1}}" class="text-light underline mb-1">{{ $data->phone1 }}</a>  
                                    @endif
                                </div>
                            </div>  

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="border-top: 1px solid white;"></div>
    <div class="container py-2 text-end">
        <a href="https://osole.com.ar/" class="text-white text-decoration-none">BY OSOLE</a>
    </div>
</footer>
@isset($data->phone3)
    @if (count($phone3) == 2)
        <a href="https://wa.me/{{$phone3[0]}}" class="position-fixed" style="background-color: #0DC143; color: white; font-size: 40px; padding: 0px 13px; border-radius: 100%; bottom: 30px; right: 40px;">
            <i class="fab fa-whatsapp"></i>
        </a>      
    @else 
        <a href="https://wa.me/{{$data->phone3}}" class="position-fixed" style="background-color: #0DC143; color: white; font-size: 40px; padding: 0px 13px; border-radius: 100%; bottom: 30px; right: 40px;">
            <i class="fab fa-whatsapp"></i>
        </a>     
    @endif   
@endisset
<div class="card producto">
    <div class="position-relative">  
        <a href="{{ route('producto', ['product'=> $p->id ]) }}" class="mas position-absolute text-decoration-none text-white" style="font-size: 70px; font-weight: 600; background-color: #005ba875;">+</a>
        @if (count($p->images))
            <img src="{{ asset($p->images()->first()->image) }}" class="img-fluid img-product" >
        @else
            <img src="{{ asset('images/default.jpg') }}" class="img-fluid img-product">
        @endif
    </div>
    <div class="card-body bg-blue align-items-center d-flex justify-content-center">
        <p class="card-text mb-0 fw-bold">
            <a href="{{ route('producto', ['product'=> $p->id ]) }}" class="font-size-16 text-center text-decoration-none d-block text-white">{{ Str::limit($p->name, 40) }}</a>
        </p>
    </div>
</div>
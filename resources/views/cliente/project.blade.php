@extends('MasterPage.cliente')
@section('cliente')

<!-- subheader -->
<section id="subheader" data-speed="8" data-type="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="color: white">Obras</h1>
                <ul class="crumb">
                    <li><a href="{{ route('home') }}" style="color: white">Inicio</a></li>
                    <li class="sep">/</li>
                    <li style="color: white">Obras</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content">
    <div class="container">

        <div class="spacer-single"></div>

        <!-- portfolio filter begin -->

        <!-- portfolio filter close -->

        <div id="gallery" class="row gallery full-gallery de-gallery pf_4_cols wow fadeInUp" data-wow-delay=".3s">

            @foreach($items as $item)
                <div class="col-md-4 col-sm-6 col-xs-12 item mb30 residential">
                    <div class="picframe galeriatamanio">
                        <a class="" href="{{ route('detallesProject', $item->id) }}">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name project-name2">{{ $item->name }}</span>
                                </span>
                            </span>
                        </a>
                        <img src="{{ asset('obras/' . $item->cover_image) }}" alt="{{ $item->name }}" />
                    </div>
                </div>
            @endforeach

           

        </div>
    </div>
</div>

@endsection

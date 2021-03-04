@extends('MasterPage.cliente')
@section('cliente')

<section id="subheader" data-bgimage="url({{ asset('cliente/images/background/1.jpg')}})" data-stellar-background-ratio=".2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="color: white">Algo así como un blog</h1>
                <ul class="crumb">
                    <li><a href="{{ route('home') }}" style="color: white">Inicio</a></li>
                    <li class="sep">/</li>
                    <li style="color: white">Blog</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">
            <div id="sidebar" class="col-md-4">

                <div class="widget widget-text">
                    <h4>Acerca de mi</h4>
                    <div class="small-border"></div>
                    No recuerdo cuándo comencé a escribir. En algún momento Tinta Mostaza se volvió un proyecto en donde exponía mi opinión sobre temas sociales, ambientales, históricos –soy fanática de la historia- y de contexto actual. Era un poco de todo. Hoy me gusta escribir sin planear mucho sobre qué y cada día descubro más pasión en la magia de las letras. Te comparto esta pasión y agradezco tu tiempo de lectura.

                </div>

            </div>

            <div class="col-md-8">
                <ul class="blog-list">
                    @foreach($items as $item)
                    <li>
                        <div class="post-content">
                            <div class="post-image">
                                <img src="{{ asset('posts/' . $item->image) }}" alt="{{ $item->title }}" class="imagenblog" />
                            </div>


                            <div class="date-box">
                                <div class="day">{{ $item->day }}</div>
                                <div class="month">{{ substr(strtoupper($item->month), 0, 3) }}</div>
                            </div>

                            <div class="post-text">
                                <h3><a href="{{ route('detallesBlog', $item->id) }}">{{ $item->title }}</a></h3>
                                <p>
                                    {{ $item->header }}
                                </p>
                            </div>

                            <a href="{{ route('detallesBlog', $item->id) }}" class="btn-more">Leer más</a>
                        </div>
                    </li>
                    @endforeach

                </ul>

                <div class="text-center">
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

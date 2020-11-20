@extends('MasterPage.cliente')
@section('cliente')

<section id="subheader" data-bgimage="url({{ asset('cliente/images/background/subheader-8.jpg')}})" data-stellar-background-ratio=".2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog sencillo</h1>
                <ul class="crumb">
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="sep">/</li>
                    <li>Detalle de artículo</li>
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
            <div class="col-md-8">
                <div class="blog-read">
                    <div class="post-image">
                        <img src="{{ asset('posts/' . $item->image) }}" alt="" />
                    </div>
                        <div class="post-content">
                            <div class="post-image">
                                <img src="images/blog/pic-blog-1.jpg" alt="" />
                            </div>

                            <div class="date-box">
                                <div class="day">{{ $item->day }}</div>
                                <div class="month">{{ substr(strtoupper($item->month), 0, 3) }}</div>
                            </div>

                            <div class="post-text">
                                <div class="info-text">
                                    {{-- <a href="#" class="btn-custom btn-fullwidth text-light text-center"><b>Compartir</b></a> --}}
                                    <div class="col-md-12 text-right iconoespacio">
                                        <div class="row">
                                            <div class="col-md-4 tituloblog"><h3><a href="#">{{ $item->title }}</a></h3></div>
                                            <div class="col-md-4 compartirblog espacioblog">

                                                <label class="compartir margencompartirblog">Compartir artículo</label>
                                            </div>
                                            <div class="col-md-3 compartirblog">
                                                <a href="whatsapp://send?text={{ route('detallesBlog', $item->id) }}">
                                                    <i class="fa fa-whatsapp fa-lg iconoestilo"></i>
                                                </a>
                                                <a href="https://twitter.com/share?ref_src={{ route('detallesBlog', $item->id) }}" >
                                                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                                    <i class="fa fa-twitter fa-lg iconoestilo"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-facebook fa-lg iconoestilo"></i>
                                                </a>

                                                <div class="a2a_kit a2a_kit_size_16 a2a_default_style" data-a2a-icon-color="#FAB702">
                                                    <label class="compartir margencompartirblog">Compartir artículo</label>
                                                    <a class="a2a_button_facebook"></a>
                                                    <a class="a2a_button_twitter"></a>
                                                    <a class="a2a_button_whatsapp"></a> 
                                                    
                                               
                                                </div>

                                            </div>
                                            <div class="col-md4"></div>
                                            
                                        </div>
                                    </div>
                                </div>


                                <p>
                                    {!! $item->body !!}
                                </p>
                            </div>
                            <div class="col-md-4  espacioblog" background-color:#00FF00>
                                <label class="compartir margencompartirblog">Compartir artículo</label>
                                <div class="a2a_kit a2a_kit_size_16 a2a_default_style" data-a2a-icon-color="#FAB702">
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_whatsapp"></a>  
                               
                                </div>
                            </div>
                            
                    
                        </div>



                        <div class="spacer-single"></div>



                </div>


            </div>

            <div id="sidebar" class="col-md-4">


                <div class="widget widget-text">
                    <h4>Acerca de mi</h4>
                    <div class="small-border"></div>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                    ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni <br><br>

                </div>


            </div>
        </div>
    </div>
    <script async src="https://static.addtoany.com/menu/page.js"></script>
</div>

@endsection

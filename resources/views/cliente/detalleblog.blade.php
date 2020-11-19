@extends('MasterPage.cliente')
@section('cliente')

<section id="subheader" data-bgimage="url({{ asset('cliente/images/background/subheader-8.jpg')}})" data-stellar-background-ratio=".2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog sencillo</h1>
                <ul class="crumb">
                    <li><a href="index.html">Inicio</a></li>
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
                        <img src="{{ asset('cliente/images/blog/pic-blog-1.jpg')}}" alt="" />
                    </div>
                        <div class="post-content">
                            <div class="post-image">
                                <img src="images/blog/pic-blog-1.jpg" alt="" />
                            </div>

                            <div class="date-box">
                                <div class="day">26</div>
                                <div class="month">FEB</div>
                            </div>

                            <div class="post-text">
                                <div class="info-text">
                                    {{-- <a href="#" class="btn-custom btn-fullwidth text-light text-center"><b>Compartir</b></a> --}}
                                    <div class="col-md-12 text-right iconoespacio">
                                        <div class="row">
                                            <div class="col-md-4 tituloblog"><h3><a href="#">TITULO DEL ARTICULO</a></h3></div>
                                            <div class="col-md-4 compartirblog espacioblog">
                                                <label class="compartir margencompartirblog">Compartir artículo</label>
                                            </div>
                                            <div class="col-md-3 compartirblog">
                                                <a href="#"><i class="fa fa-whatsapp fa-lg iconoestilo"></i></a>
                                                <a href="#"><i class="fa fa-twitter fa-lg iconoestilo"></i></a>
                                                <a href="#"><i class="fa fa-facebook fa-lg iconoestilo"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>

                                    <blockquote class="s1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</blockquote>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
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
</div>

@endsection

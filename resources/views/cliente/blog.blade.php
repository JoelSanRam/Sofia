@extends('MasterPage.cliente')
@section('cliente')

<section id="subheader" data-bgimage="url({{ asset('cliente/images/background/subheader-8.jpg')}})" data-stellar-background-ratio=".2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog</h1>
                <ul class="crumb">
                    <li><a href="index.html">Inicio</a></li>
                    <li class="sep">/</li>
                    <li>Blog</li>
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
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                    ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni
                </div>

            </div>

            <div class="col-md-8">
                <ul class="blog-list">
                    <li>
                        <div class="post-content">
                            <div class="post-image">
                                <img src="{{ asset('cliente/images/blog/pic-blog-1.jpg')}}" alt="" />
                            </div>


                            <div class="date-box">
                                <div class="day">26</div>
                                <div class="month">FEB</div>
                            </div>

                            <div class="post-text">
                                <h3><a href="#">TITULO DEL ARTICULO</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                            </div>

                            <a href="blog-single.html" class="btn-more">Leer más</a>
                        </div>
                    </li>

                    <li>
                        <div class="post-content">
                            <div class="post-image">
                                <img src="{{ asset('cliente/images/blog/pic-blog-2.jpg')}}" alt="" />
                            </div>


                            <div class="date-box">
                                <div class="day">20</div>
                                <div class="month">FEB</div>
                            </div>

                            <div class="post-text">
                                <h3><a href="#">Functional and Stylish Wall-to-Wall Shelves</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                            </div>

                            <a href="blog-single.html" class="btn-more">Leer más</a>
                        </div>
                    </li>

                    <li>
                        <div class="post-content">
                            <div class="post-image">
                                <img src="{{ asset('cliente/images/blog/pic-blog-3.jpg')}}" alt="" />
                            </div>


                            <div class="date-box">
                                <div class="day">16</div>
                                <div class="month">FEB</div>
                            </div>

                            <div class="post-text">
                                <h3><a href="#">The 5 Secrets to Pulling Off Simple, Minimal Design</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                            </div>

                            <a href="blog-single.html" class="btn-more">Leer más</a>
                        </div>
                    </li>

                    <li>
                        <div class="post-content">
                            <div class="post-image">
                                <img src="{{ asset('cliente/images/blog/pic-blog-4.jpg')}}" alt="" />
                            </div>


                            <div class="date-box">
                                <div class="day">08</div>
                                <div class="month">FEB</div>
                            </div>

                            <div class="post-text">
                                <h3><a href="#">How to Make a Huge Impact With Multiples</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                            </div>

                            <a href="blog-single.html" class="btn-more">Leer más</a>
                        </div>
                    </li>


                </ul>

                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">Anterior</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Siguiente</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

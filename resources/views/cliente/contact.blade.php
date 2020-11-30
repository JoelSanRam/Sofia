@extends('MasterPage.cliente')
@section('cliente')

<!-- subheader -->
<section id="subheader" data-speed="8" data-type="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contacto</h1>
                <ul class="crumb">
                    <li><a href="index.html" style="color: white">Inicio</a></li>
                    <li class="sep">/</li>
                    <li>Contacto</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->
<div id="content" class="no-top">
    <section class="no-top" aria-label="map-container">
        <div id="map" style="display: none;"></div>
    </section>

    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <h3>Envíame un mensaje</h3>
                <form id="contactForm" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div id='name_error' class='error'>Nombre completo</div>
                            <div>
                                <input type='text' name='name' id='name' class="form-control" placeholder="Nombre">
                            </div>

                            <div id='email_error' class='error'>Correo electrónico</div>
                            <div>
                                <input type='text' name='email' id='email' class="form-control" placeholder="Email">
                            </div>

                            <div id='phone_error' class='error'>Número telefónico</div>
                            <div>
                                <input type='text' name='phone' id='phone' class="form-control" placeholder="Teléfono">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div id='message_error' class='error'>Mensaje</div>
                            <div>
                                <textarea name='message' id='message' class="form-control" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <p id='submit'>
                                <input type='submit' id='send_message' value='Enviar' class="btn btn-line">
                            </p>
                            <div id='mail_success' class='success'>Su mensaje se envío correctamente</div>
                            <div id='mail_fail' class='error'>Su mensaje no se envió</div>
                        </div>
                    </div>
                </form>
            </div>

            <div id="sidebar" class="col-md-4">

                <div class="widget widget_text">
                    <h3>Información de contacto</h3>
                    <address>
                        <span>100 S Main St, Los Angeles, CA</span>
                        <span><strong>Teléfono:</strong>(208) 333 9296</span>
                        <span><strong>Fax:</strong>(208) 333 9298</span>
                        <span><strong>Email:</strong><a href="mailto:contact@example.com">contact@example.com</a></span>
                        <span><strong>Web:</strong><a href="#test">http://example.com</a></span>
                        <span><strong>Horarios</strong>Sunday - Friday 08:00 - 18:00</span>
                    </address>
                </div>









            </div>
        </div>
    </div>
</div>

@endsection

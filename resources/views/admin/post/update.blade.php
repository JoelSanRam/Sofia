@extends('MasterPage.admin')

@section('admin')

<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2">
        <h2 class="breadcrumb_title text-center">Editar Publicacion</h2>
    </div>
</div>

<div class="col-lg-8 mx-auto">
    <div class="my_dashboard_review">
        <div class="row mx-auto">
            <div class="col-lg-12">
                <div class="col-md-6 my-3">
                    @if(Session::has('message'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{!! Session::get('message') !!}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    @endif
                </div>
                <form action="{{ route('post-update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-12 form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ $post->title }}">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-12 form-group">
                            <label for="header">Encabezado</label>
                            <textarea type="text" class="form-control @error('header') is-invalid @enderror" rows="4" name="header" id="header" >{{ $post->header }}</textarea>
                            @error('header')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_textarea col-lg-12 form-group">
                            <label for="description">Cuerpo</label>
                            <textarea id="editor1" name="body" rows="5" cols="5">
                                {{ $post->body }}
                            </textarea>
                            @error('body')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-4 form-group">
                            <label for="day">Dia</label>
                            <select class="form-control @error('day') is-invalid @enderror" name="day" id="day">
                                <option>{{ $post->day }}</option>
                                <option value="">Seleccionar</option>
                            </select>
                            @error('day')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="my_profile_setting_input col-lg-4 form-group">
                            <label for="month">Mes</label>
                            <select class="form-control @error('month') is-invalid @enderror" name="month" id="month">
                                <option>{{ $post->month }}</option>
                                <option value="">Seleccionar</option>
                            </select>
                            @error('month')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="my_profile_setting_input col-lg-4 form-group">
                            <label for="year">Año</label>
                            <select class="form-control @error('year') is-invalid @enderror" name="year" id="year">
                                <option>{{ $post->year }}</option>
                                <option value="">Seleccionar</option>
                            </select>
                            @error('year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="my_profile_setting_input col-lg-12 mb-3">
                            <button type="submit" class="btn btn-success btn-block">Guardar Cambios</button>
                        </div>
                        <div class="my_profile_setting_input col-lg-12">
                            <a type="button" class="btn btn-danger btn-block" href="{{ route('posts') }}">Cancelar</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('editor1');

    getDays();
    getMonths();
    getYears();

    function getDays(){
        let select = document.querySelector('#day');
        for (var i = 1; i <= 31; i++) {
            let opt = document.createElement('option');
            opt.appendChild(document.createTextNode(i));
            select.appendChild(opt);
        }
    }

    function getMonths(){
        const arrayMonths = [
        "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
        ];

        let select = document.querySelector('#month');
        for (var i = 0; i <= arrayMonths.length - 1; i++) {
            let opt = document.createElement('option');
            opt.appendChild(document.createTextNode(arrayMonths[i]));
            select.appendChild(opt);
        }
    }

    function getYears(){
        var dateYear = new Date();
        var year = dateYear.getFullYear();
        let select = document.querySelector('#year');

        for (var i = 2000; i <= year; i++) {
            let opt = document.createElement('option');
            opt.appendChild(document.createTextNode(i));
            select.appendChild(opt);
        }
    }

</script>

@endsection

@extends('MasterPage.admin')

@section('admin')

<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2">
        <h2 class="breadcrumb_title text-center">Nueva Publicacion</h2>
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
                <form action="{{ route('post-post-create') }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-12 form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" >
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
                            <textarea type="text" class="form-control @error('header') is-invalid @enderror" rows="4" name="header" id="header" ></textarea>
                            @error('header')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_textarea col-lg-12 form-group">
                            <label for="editor1">Cuerpo</label>
                            <textarea id="editor1" name="body" rows="5" cols="5">
                                Some Text.
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
                            <select class="form-control @error('day') is-invalid @enderror" name="day" id="day" >
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
                            <select class="form-control @error('month') is-invalid @enderror" name="month" id="month" >
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
                            <select class="form-control @error('year') is-invalid @enderror" name="year" id="year" >
                                <option value="">Seleccionar</option>
                            </select>
                            @error('year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-12 form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" onchange="uploadImages()" name="image" id="image" lang="es">
                                <label class="custom-file-label" for="images">Seleccionar Imagen de Portada</label>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-row justify-content-center mb-3" id="previewImage">
                        
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="my_profile_setting_input col-lg-12 mb-3">
                            <button type="submit" class="btn btn-success btn-block">Crear</button>
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
    
    function uploadImages(){
        let file = document.querySelector('input[type=file]').files[0];
        let reader = new FileReader();

        reader.onloadend = function() {
            let img = `<img src="${reader.result}" class="img-fluid">`;
            $("#previewImage").append(img);
        }

        reader.readAsDataURL(file);
    }
</script>

@endsection

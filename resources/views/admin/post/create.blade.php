@extends('Masterpage.admin')

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
                        <div class="my_profile_setting_textarea col-lg-12 form-group">
                            <label for="description">Cuerpo</label>
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
                        <div class="my_profile_setting_input col-lg-12 form-group">
                            <label for="publish_date">Fecha</label>
                            <input type="date" class="form-control @error('publish_date') is-invalid @enderror" name="publish_date" id="publish_date" >
                            @error('publish_date')
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

@extends('Masterpage.admin')

@section('admin')

<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2">
        <h2 class="breadcrumb_title text-center">Nueva Obra</h2>
    </div>
</div>

<div class="col-lg-8 mx-auto">
    <div class="my_dashboard_review">
        <div class="row mx-auto">
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
            <div class="col-lg-12">
                <form action="{{ route('obra-post') }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-12 form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_textarea col-lg-12 form-group">
                            <label for="description">Descripcion</label>
                            <textarea class="form-control @error('name') is-invalid @enderror" name="description" id="description" rows="4"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-6 form-group">
                            <label for="dimension">Medidas</label>
                            <input type="text" class="form-control @error('dimension') is-invalid @enderror" name="dimension" id="dimension">
                            @error('dimension')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my_profile_setting_input col-lg-6 form-group">
                            <label for="technique">Tecnica</label>
                            <input type="text" class="form-control @error('technique') is-invalid @enderror" name="technique" id="technique">
                            @error('technique')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-6 form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my_profile_setting_input col-lg-6 form-group">
                            <label for="publish_date">Fecha</label>
                            <input type="date" class="form-control @error('publish_date') is-invalid @enderror" name="publish_date" id="publish_date">
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
                                <input type="file" class="custom-file-input @error('images') is-invalid @enderror" onchange="uploadImages()" name="images[]" id="images" lang="es" multiple>
                                <label class="custom-file-label" for="images">Seleccionar Imagenes</label>
                                @error('images')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-row mb-3" id="container-img"></div>

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
    function uploadImages(){
        let images = document.getElementById('images');
        
        if(images){

            for (var i = 0; i <= images.files.length - 1; i++) {
                previewImage(images.files[i])
            }
        }
    }

    function previewImage(img) {
        let reader = new FileReader();
        reader.readAsDataURL(img);

        reader.onloadend = function() {
            let img = `<img src="${reader.result}" class="img-preview">`;
            $("#container-img").append(img);
        }
    }   
</script>

@endsection

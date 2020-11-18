@extends('Masterpage.admin')

@section('admin')

<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2">
        <h2 class="breadcrumb_title text-center">Subir Imagen de Publicacion</h2>
    </div>
</div>

<div class="col-lg-8 mx-auto">
    <div class="my_dashboard_review">
        <div class="row mx-auto">
            <div class="col-lg-12">
                <form action="{{ route('post-update-img', $post->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-12 form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" onchange="uploadImage()" name="image" id="image" lang="es">
                                <label class="custom-file-label" for="image">Seleccionar Imagen de Portada</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row justify-content-center mb-3" id="previewImage"></div>

                    <div class="form-row justify-content-center">
                        <div class="my_profile_setting_input col-lg-12 mb-3">
                            <button type="submit" class="btn btn-success btn-block">Subir Imagen</button>
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
    function uploadImage(){
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

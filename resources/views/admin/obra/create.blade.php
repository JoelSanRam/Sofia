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
            <div class="col-lg-12">
                <form action="{{ route('obra-post') }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-12 form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_textarea col-lg-12 form-group">
                            <label for="description">Descripcion</label>
                            <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-6 form-group">
                            <label for="dimension">Medidas</label>
                            <input type="text" class="form-control" name="dimension" id="dimension">
                        </div>
                        <div class="my_profile_setting_input col-lg-6 form-group">
                            <label for="technique">Tecnica</label>
                            <input type="text" class="form-control" name="technique" id="technique">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-6 form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" name="status" id="status">
                        </div>
                        <div class="my_profile_setting_input col-lg-6 form-group">
                            <label for="publish_date">Fecha</label>
                            <input type="date" class="form-control" name="publish_date" id="publish_date">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-12 form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" onchange="uploadImages()" name="images[]" id="images" lang="es" multiple>
                                <label class="custom-file-label" for="images">Seleccionar Imagenes</label>
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
            let img = `<img src="${reader.result}" width="100" height="100" class="img-preview">`;
            $("#container-img").append(img);
        }
    }   
</script>

@endsection

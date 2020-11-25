@extends('MasterPage.admin')

@section('admin')

<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2 text-center">
        <h2 class="breadcrumb_title">Detalles de la Obra</h2>
        <a class="btn btn-info mt-2" href="{{ route('obras') }}">Regresar</a>
    </div>
</div>

<div class="col-lg-6 mx-auto">
    @if(Session::has('message'))
        <div class="alert alert-warning alert-dismissible fade show my-3" role="alert">
            <strong>{!! Session::get('message') !!}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Campo</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Nombre</th>
                    <td>{{ $obra->name }}</td>
                </tr>
                <tr>
                    <th>Descripcion</th>
                    <td>{{ $obra->description }}</td>
                </tr>
                <tr>
                    <th>Medidas</th>
                    <td>{{ $obra->dimension }}</td>
                </tr>
                <tr>
                    <th>Tecnica</th>
                    <td>{{ $obra->technique }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $obra->status }}</td>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <td>{{ $obra->publish_date }}</td>
                </tr>
                <tr>
                    <th>Imagen de Portada</th>
                    <td>
                        @if($obra->cover_image == '')
                            No se ha selecionado una foto de perfil
                        @else
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <img class="img-fluid" src="{{ asset('obras/' . $obra->cover_image) }}" width="150px" height="150px">
                                </div>
                            </div>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="col-lg-12">
    <div class="my_dashboard_review mt30">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="mb30">Imagenes Cargadas</h4>
            </div>
            <div class="col-lg-12">
                <ul class="mb0">
                    @if(count($images) > 0)
                        @foreach($images as $image)
                            <li class="list-inline-item">
                                <div class="portfolio_item">
                                    <img class="img-fluid image-fit" src="{{ asset('obras/' . $image->filename) }}">
                                    <div class="edu_stats_list" data-toggle="tooltip" data-placement="top" >
                                        <a href="{{ route('obra-image-delete', $image->id) }}" title="Eliminar">
                                            <span class="flaticon-garbage"></span>
                                        </a>
                                    </div>
                                    <div class="edu_stats_list mt-5" data-toggle="tooltip" data-placement="top" >
                                        <a href="{{ route('obra-image-cover', $image->id) }}" title="Imagen de Portada">
                                            <span class="flaticon-heart"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @else
                        <p>No hay imagenes agregadas</p>
                    @endif
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="my_dashboard_review mt30">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="mb30">Subir Imagenes</h4>
            </div>
            <div class="col-lg-12">
                <form action="{{ route('obra-upload-images', $obra->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="form-row">
                        <div class="portfolio_upload col-lg-12">
                            <input type="file" name="images[]" id="images" onchange="uploadImages()" multiple />
                            <div class="icon"><span class="flaticon-download"></span></div>
                            <p>Arrastra y suelta tus imagenes aqui</p>
                        </div>
                    </div>

                    <div class="form-row mb-3" id="container-img"></div>

                    <div class="form-row justify-content-center">
                        <div class="my_profile_setting_input col-lg-12 mb-3">
                            <button type="submit" class="btn btn-success btn-block">Subir Imagenes</button>
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

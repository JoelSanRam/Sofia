@extends('Masterpage.admin')

@section('admin')

<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2 text-center">
        <h2 class="breadcrumb_title">Detalles de la Obra</h2>
        <a class="btn btn-info mt-2" href="{{ route('obras') }}">Regresar</a>
    </div>
</div>

<div class="col-lg-6 mx-auto">
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
                    <th>Imagen de Perfil</th>
                    <td>
                        @if($obra->cover_image == '')
                            No se ha selecionado una foto de perfil
                        @else
                            <img class="img-fluid image-fit" src="{{ asset('obras/' . $obra->cover_image) }}" width="150" height="150">
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
    {{ json_encode($images) }}
</div>

@endsection

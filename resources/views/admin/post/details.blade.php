@extends('Masterpage.admin')

@section('admin')

<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2 text-center">
        <h2 class="breadcrumb_title">Detalles de la Obra</h2>
        <a class="btn btn-info mt-2" href="{{ route('posts') }}">Regresar</a>
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
                    <th>Titulo</th>
                    <td>{{ $post->title }}</td>
                </tr>
                <tr>
                    <th>Encabezado</th>
                    <td>{{ $post->header }}</td>
                </tr>
                <tr>
                    <th>Cuerpo</th>
                    <td>{!! $post->body !!}</td>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <td>{{ $post->day }}/{{ $post->month }}/{{ $post->year }}</td>
                </tr>
                <tr>
                <tr>
                    <th>Imagen de Portada</th>
                    <td>
                        @if($post->image == '')
                            No se ha selecionado una foto de perfil
                        @else
                            <img class="img-fluid image-fit" src="{{ asset('posts/' . $post->image) }}" width="150" height="150">
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection

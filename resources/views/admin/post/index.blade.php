@extends('Masterpage.admin')

@section('admin')

<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2 text-center">
        <h2 class="breadcrumb_title">Publicaciones</h2>
        <a class="btn btn-info mt-2" href="{{ route('post-create-view') }}">Nueva Publicacion</a>
    </div>
</div>

<div class="col-lg-12">
    <div class="row">
        <div class="col-md-6 my-3 mx-auto">
            @if(Session::has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{!! Session::get('message') !!}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            @endif
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Imagen de Portada</th>
                    <th scope="col">Acciones</th>
                    <th scope="col">Imagen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $item)
                    <tr>
                        <td>{{ $item->title }}</th>
                        <td>{{ $item->day }}/{{ $item->month }}/{{ $item->year }}</td>
                        <td class="text-center">
                            @if($item->image == '')
                                No se ha selecionado
                            @else
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <img id="image-fit" src="{{ asset('posts/' . $item->image) }}">
                                </div>
                            </div>
                            @endif
                        </td>
                        <td>
                            
                            <form action="{{ route('post-delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('post-details', $item->id) }}" class="btn btn-success">
                                    <span class="flaticon-view"></span>
                                </a>
                                <a href="{{ route('post-view-update', $item->id) }}" class="btn btn-warning">
                                    <span class="flaticon-edit"></span>
                                </a>

                                <button type="submit" class="btn btn-danger"><span class="flaticon-garbage"></button>
                            </form>
                        </td>
                        <th>
                            @if($item->image == '')
                                <a href="{{ route('post-upload-img', $item->id) }}" class="btn btn-success">
                                    <span class="flaticon-plus"></span>
                                </a>
                            @endif
                            
                            @if($item->image !== '')
                                <a href="{{ route('post-delete-img', $item->id) }}" class="btn btn-danger">
                                    <span class="flaticon-close"></span>
                                </a>
                            @endif

                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

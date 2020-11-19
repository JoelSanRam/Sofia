@extends('Masterpage.admin')

@section('admin')

<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2 text-center">
        <h2 class="breadcrumb_title">Obras</h2>
        <a class="btn btn-info mt-2" href="{{ route('obra-create-view') }}">Nueva Obra</a>
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
                    <th scope="col">Nombre</th>
                    <th scope="col">Medidas</th>
                    <th scope="col">Tecnica</th>
                    <th scope="col">Status</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Imagen de Portada</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($obras as $item)
                    <tr>
                        <td>{{ $item->name }}</th>
                        <td>{{ $item->dimension }}</td>
                        <td>{{ $item->technique }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->publish_date }}</td>
                        <td class="text-center">
                            @if($item->cover_image == '')
                                No se ha selecionado
                            @else
                                <img class="img-fluid image-fit" src="{{ asset('obras/' . $item->cover_image) }}" width="100" height="100">
                            @endif
                        </td>
                        <td>
                            
                            <form action="{{ route('obra-delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('obra-details', $item->id) }}" class="btn btn-success">
                                    <span class="flaticon-view"></span>
                                </a>
                                <a href="{{ route('obra-view-update', $item->id) }}" class="btn btn-warning">
                                    <span class="flaticon-edit"></span>
                                </a>

                                <button type="submit" class="btn btn-danger"><span class="flaticon-garbage"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

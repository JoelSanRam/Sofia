@extends('Masterpage.admin')

@section('admin')

<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2 text-center">
        <h2 class="breadcrumb_title">Obras</h2>
        <a class="btn btn-info mt-2" href="{{ route('obra-create-view') }}">Nueva Obra</a>
    </div>
</div>

<div class="col-lg-12">
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
                        <td>{{ $item->cover_image }}</td>
                        <td>
                            
                            <form action="{{ route('obra-delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('obra-details', $item->id) }}" class="btn btn-success">Ver</a>
                                <a href="{{ route('obra-view-update', $item->id) }}" class="btn btn-warning">Editar</a>

                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

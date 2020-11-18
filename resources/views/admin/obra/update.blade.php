@extends('Masterpage.admin')

@section('admin')

<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2">
        <h2 class="breadcrumb_title text-center">Editar Obra</h2>
    </div>
</div>

<div class="col-lg-8 mx-auto">
    <div class="my_dashboard_review">
        <div class="row mx-auto">
            <div class="col-lg-12">
                <form action="{{ route('obra-update', $obra->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-12 form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $obra->name }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_textarea col-lg-12 form-group">
                            <label for="description">Descripcion</label>
                            <textarea class="form-control" name="description" id="description" rows="4">{{ $obra->description }}</textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-6 form-group">
                            <label for="dimension">Medidas</label>
                            <input type="text" class="form-control" name="dimension" id="dimension" value="{{ $obra->dimension }}">
                        </div>
                        <div class="my_profile_setting_input col-lg-6 form-group">
                            <label for="technique">Tecnica</label>
                            <input type="text" class="form-control" name="technique" id="technique" value="{{ $obra->technique }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-6 form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" name="status" id="status" value="{{ $obra->status }}">
                        </div>
                        <div class="my_profile_setting_input col-lg-6 form-group">
                            <label for="publish_date">Fecha</label>
                            <input type="date" class="form-control" name="publish_date" id="publish_date" value="{{ $obra->publish_date }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-12">
                            <button class="btn btn1 float-left" href="{{ route('obras') }}">Cancelar</button>
                            <button type="submit" class="btn btn2 float-right">Guardar Cambios</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

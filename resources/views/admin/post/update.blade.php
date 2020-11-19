@extends('Masterpage.admin')

@section('admin')

<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2">
        <h2 class="breadcrumb_title text-center">Editar Publicacion</h2>
    </div>
</div>

<div class="col-lg-8 mx-auto">
    <div class="my_dashboard_review">
        <div class="row mx-auto">
            <div class="col-lg-12">
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
                <form action="{{ route('post-update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-12 form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ $post->title }}">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_textarea col-lg-12 form-group">
                            <label for="description">Cuerpo</label>
                            <textarea id="editor1" name="body" rows="5" cols="5">
                                {{ $post->body }}
                            </textarea>
                            @error('body')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="my_profile_setting_input col-lg-12 form-group">
                            <label for="publish_date">Fecha</label>
                            <input type="date" class="form-control @error('publish_date') is-invalid @enderror" name="publish_date" id="publish_date" value="{{ $post->publish_date }}">
                            @error('publish_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="my_profile_setting_input col-lg-12 mb-3">
                            <button type="submit" class="btn btn-success btn-block">Guardar Cambios</button>
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
    CKEDITOR.replace('editor1');
</script>

@endsection

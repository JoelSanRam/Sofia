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
                    <td>{{ $obra->cover_image }}</td>
                </tr>

                   
                {{--<tr>
                    <th>Imagen de Perfil</th>
                    <td>
                        @if($property->profile_picture == '')
                            No se ha selecionado una foto de perfil
                        @else
                        <img src="{{ asset('images/'.$property->profile_picture) }}" width="100" height="100" class="img-fluid" alt="">
                        @endif
                    </td>
                </tr>--}}

            </tbody>
        </table>
    </div>
</div>

<div class="col-lg-12">
    {{--<div class="my_dashboard_review mt30">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="mb30">Property media</h4>
            </div>
            <div class="col-lg-12">
                <ul class="mb0">
                    <li class="list-inline-item">
                        <div class="portfolio_item">
                            <img class="img-fluid" src="images/property/fp1.jpg" alt="fp1.jpg">
                            <div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="portfolio_item">
                            <img class="img-fluid" src="images/property/fp2.jpg" alt="fp2.jpg">
                            <div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="portfolio_item">
                            <img class="img-fluid" src="images/property/fp3.jpg" alt="fp3.jpg">
                            <div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="portfolio_upload">
                    <input type="file" name="myfile" />
                    <div class="icon"><span class="flaticon-download"></span></div>
                    <p>Drag and drop images here</p>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="resume_uploader mb30">
                    <h4>Attachments</h4>
                    <form class="form-inline">
                        <input class="upload-path">
                        <label class="upload">
                            <input type="file">
                            Select Attachment
                        </label>
                    </form>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="my_profile_setting_input">
                    <button class="btn btn1 float-left">Back</button>
                    <button class="btn btn2 float-right">Next</button>
                </div>
            </div>
        </div>
    </div>--}}
    {{ json_encode($images) }}
</div>

@endsection

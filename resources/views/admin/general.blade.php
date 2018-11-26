@extends('layout.admin')
@section('styles')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('/css/admin/galeria.css')}}">
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Configuracion General</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Configuracion General</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" align="right">

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="generalForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="telefono">Telefono</label>
                                        <input type="tel" name="telefono" class="form-control" placeholder="Telefono" value="{{$gnrl->telefono}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">E-mail</label>
                                        <input type="email" placeholder="E-mail" class="form-control" name="email" value="{{$gnrl->email}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="face">Facebook</label>
                                        <input type="url" name="face" class="form-control" placeholder="URL Facebook" value="{{$gnrl->facebook}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="tw">Twitter</label>
                                        <input type="url" placeholder="URL Twitter" class="form-control" name="tw" value="{{$gnrl->twitter}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="mision">Mision</label>
                                        <textarea name="mision" id="mision" cols="30" rows="10" class="form-control">{{$gnrl->mision}}</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="vision">Vision</label>
                                        <textarea name="vision" id="vision" cols="30" rows="10" class="form-control">{{$gnrl->vision}}</textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="eslogan">Eslogan</label>
                                        <textarea name="eslogan" id="eslogan" cols="30" rows="10" class="form-control">{{$gnrl->eslogan}}</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="direccion">Direccion</label>
                                        <textarea name="direccion" id="direccion" cols="30" rows="10" class="form-control">{{$gnrl->direccion}}</textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="quienessomos">Quienes Somos?</label>
                                        <textarea name="quienessomos" id="quienessomos" cols="30" rows="10" class="form-control">{{$gnrl->quienessomos}}</textarea>
                                    </div>
                                </div>

                            </form>
                            <hr>
                            <div align="right">
                                <button class="btn btn-success" id="guardar">Guardar</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>
    <script src="{{asset('/js/admin/galeria.js')}}"></script>

    <script src="{{asset('js/admin/general.js')}}"></script>
@endsection
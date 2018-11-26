@extends('layout.admin')
<link rel="stylesheet" href="{{asset('/plugins/datatables/dataTables.bootstrap4.min.css')}}">
@section('styles')
    <link rel="stylesheet" href="{{asset('/css/admin/galeria.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Promociones</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Promociones</li>
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
                            <button class="btn btn-success" id="addPromotion">Agregar Promocion</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="promotionTable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Titulo</th>
                                    <th>URL</th>
                                    <th>Periodo</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
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

    <div class="modal" tabindex="-1" role="dialog" id="modalPromotion">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Promocion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="promotionForm">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <div class="">
                                            <!-- image-preview-filename input [CUT FROM HERE]-->
                                            <div class="input-group image-preview">
                                                <input type="text" class="form-control image-preview-filename"  disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                                <span class="input-group-btn">
                                                <!-- image-preview-clear button -->
                                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                                </button>
                                                    <!-- image-preview-input -->
                                                <div class="btn btn-default image-preview-input">
                                                    <span class="glyphicon glyphicon-folder-open"></span>
                                                    <span class="image-preview-input-title">Browse</span>
                                                    <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                                                </div>
                                            </span>
                                            </div><!-- /input-group image-preview [TO HERE]-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="title">Promocion</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Titulo">
                            </div>
                            <br>
                            <div class="row">
                                <label for="desc">Video Aplicacion(URL)</label>
                                <input type="text" id="desc" name="desc" class="form-control" placeholder="Descripcion">
                            </div>
                            <br>
                           <div class="row">
                               <div class="col-md-6">
                                   <label for="desde">Fecha Inicio</label>
                                   <input type="date" id="desde" name="desde" class="form-control" placeholder="Fecha">
                               </div>
                               <div class="col-md-6">
                                   <label for="dias">Dias de promocion</label>
                                   <input type="number" id="dias" name="dias" class="form-control" placeholder="Dias">
                               </div>
                           </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success" id="guardar">Guardar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>
    <script src="{{asset('/js/admin/promotions.js')}}"></script>
@endsection
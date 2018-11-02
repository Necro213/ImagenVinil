@extends('layout.admin')
    <link rel="stylesheet" href="{{asset('/plugins/datatables/dataTables.bootstrap4.min.css')}}">
@section('styles')

@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Usuarios</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
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
                            <button class="btn btn-success" id="addUser">Agregar Usuario</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="userTable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Nombre de Usuario</th>
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

    <div class="modal" tabindex="-1" role="dialog" id="modalUser">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nuevo Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="userForm">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="row">
                                <label for="nombre">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                            </div>

                            <div class="row">
                                <label for="nombre">Apellidos</label>
                                <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Apellidos">
                            </div>

                            <div class="row">
                                <label for="username">Nombre de Usuario</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Nombre de Usuario">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="pass">Contraseña</label>
                                    <input type="password" id="pass" name="pass" class="form-control" placeholder="********">
                                </div>
                                <div class="col-md-6">
                                    <label for="confirm">Confirmar Contraseña</label>
                                    <input type="password" id="confirm" name="confirm" class="form-control" placeholder="********">
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
    <script src="{{asset('/js/admin/users.js')}}"></script>
@endsection
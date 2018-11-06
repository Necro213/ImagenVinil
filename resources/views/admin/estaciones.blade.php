@extends('layout.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Estaciones</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Inicio</a></li>
                            <li class="breadcrumb-item active">Estaciones</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="estacionesForm">
                                {{csrf_field()}}
                                <div class="row">
                                    @foreach($estaciones as $estacion)
                                        <div class="col-md-6">
                                            <label for="">{{$estacion->estacion}}</label>
                                            <br>
                                            <div align="center">
                                                <img src="{{asset('/img/system/'.$estacion->image)}}"  id="img{{$estacion->estacion}}" name="img{{$estacion->estacion}}"  alt="" style="height: auto; width: 450px;">
                                            </div>
                                            <br>
                                            <input type="file" class="form-control" id="{{$estacion->estacion}}" name="{{$estacion->estacion}}">
                                        </div>
                                    @endforeach
                                </div>
                            </form>
                            <hr>
                            <div align="right">
                                <button class="btn btn-success" id="guardar">Guardar Cambios</button>
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
    </div>
@endsection

@section('scripts')
    <script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>
    <script src="{{asset('/js/admin/estaciones.js')}}"></script>
@endsection()
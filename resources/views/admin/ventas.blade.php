@extends('layout.admin')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ventas</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Ventas</li>
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
                            <!-- Main row -->
                            <div class="row">
                                <!-- Left col -->
                                <section class="col-lg-12 connectedSortable">
                                    <!-- Custom tabs (Charts with tabs)-->
                                    <div class="card">
                                        <div class="card-header no-border">
                                            <div class="d-flex justify-content-between">
                                                <h3 class="card-title">Ventas</h3>
                                                <!--a href="javascript:void(0);">View Report</a-->
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <p class="d-flex flex-column">
                                                    <select name="producto" id="producto" class="selectpicker">
                                                        <option value="00">Selecciona un producto</option>
                                                        @foreach($products as $product)
                                                            <option value="{{$product->id}}">{{$product->nombre}}</option>
                                                        @endforeach
                                                    </select>
                                                </p>

                                            </div>
                                            <!-- /.d-flex -->

                                            <div class="position-relative mb-4">
                                                <canvas id="ventas-chart" height="200"></canvas>
                                            </div>

                                            <div class="d-flex flex-row justify-content-end">
                                                <span class="mr-2">
                                                    <i class="fa fa-square text-primary"></i> Este Año
                                                </span>

                                                <span>
                                                    <i class="fa fa-square text-gray"></i> Año Pasado
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                </section>
                                <!-- /.Left col -->
                                <!-- right col (We are only adding the ID to make the widgets sortable)-->

                                <!-- right col -->
                            </div>
                            <!-- /.row (main row) -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h2>Registrar venta</h2>
                            <div class="container">
                                <form id="ventasForm">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="venta">Producto</label>
                                            <select name="venta" id="venta" class="selectpicker form-control">
                                                <option value="00">Selecciona un producto</option>
                                                @foreach($products as $product)
                                                    <option value="{{$product->id}}">{{$product->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="cantidad">Cantidad</label>
                                            <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad">
                                        </div>
                                    </div>
                                </form>
                                <div align="right">
                                    <button class="btn btn-success" id="registrar">Registrar</button>
                                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
    <script src="{{asset('js/admin/ventas.js')}}"></script>
@endsection

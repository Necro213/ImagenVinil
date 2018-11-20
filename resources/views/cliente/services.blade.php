@extends('layout.clientes')

@section('content')



    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center magic_fade_in"><h1>Productos y Servicios</h1></div>
                </div>
            </div>
            <div class="row services_row">

                @foreach($productos as $producto)
                    <div class="col-lg-4 col-md-6 service_col magic_fade_in">
                        <div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
                            <div class="">
                                <img class="svg" src="{{asset('/img/productos/'.$producto->image)}}" style="height: 200px; width: auto">
                            </div>
                            <div class="service_title"><h3>{{$producto->nombre}}</h3></div>
                            <div class="service_text">
                                <p>{{$producto->desc}}</p>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="js/services.js"></script>
@endsection
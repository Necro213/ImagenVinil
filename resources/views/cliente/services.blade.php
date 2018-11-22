@extends('layout.clientes')

@section('content')



    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    @if($v==1)
                        <div class="section_title text-center magic_fade_in"><h1>{{$cat}}</h1></div>
                        @else
                        <div class="section_title text-center magic_fade_in"><h1>{{$cat.' > '.$sub}}</h1></div>
                    @endif
                </div>
            </div>
            <div class="row services_row">

                @foreach($productos as $producto)
                    <div class="col-lg-4 col-md-6 service_col magic_fade_in">
                        <div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
                            @if($v == 1)
                                <div class="">
                                    <img class="svg" src="{{asset('/img/productos/'.$producto->image)}}" style="height: 200px; width: auto">
                                </div>
                                <h3>{{$producto->categoria}}</h3>
                                <h4>{{$producto->subcategoria}}</h4>
                                @else
                                <div class="" onclick="view({{$producto->id}})">
                                    <img class="svg" src="{{asset('/img/productos/'.$producto->image)}}" style="height: 200px; width: auto" id="{{$producto->id}}">
                                </div>
                                <h3>{{$producto->nombre}}</h3>
                                <h4>{{$producto->desc}}</h4>
                            @endif
                            <div align="center">
                                @if($v == 1)
                                <a href="{{route('cliente.services',['cat'=>$producto->categoria,'sub'=>$producto->subcategoria])}}" class="btn" style="background: #26074D; color: white;">ver más</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" align="center">
            <img class="modal-content" id="imagenModal" alt="" style="display: block; margin: auto;">
        </div>
    </div>
@endsection

@section('scripts')
    <script src="js/services.js"></script>
@endsection
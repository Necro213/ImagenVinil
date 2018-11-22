@extends('layout.clientes')

@section('content')
    <div class="intro">
        <div class="container">
            <div class="row">

                <!-- Why Choose Us Content -->
                <div class="col-lg-12 why_col magic_fade_in align-items-center">
                    <div class="section_title text-center"><h2>Gama de colores > {{$tipo}}</h2></div>
                    <hr>
                    <div class="row services_row">

                        @foreach($gama as $item)
                            <div class="col-lg-4 col-md-6 service_col magic_fade_in">
                                <div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
                                    <div class="" onclick="view({{$item->id}})">
                                        <img class="svg" src="{{asset('/img/gama/'.$item->image)}}" style="height: 200px; width: auto" id="{{$item->id}}">
                                    </div>
                                    <h3>{{$item->nombre}}</h3>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

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
    <script src="js/elements.js"></script>
@endsection

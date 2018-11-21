@extends('layout.clientes')

@section('content')
    <div class="intro">
        <div class="container">
            <div class="row">

                <!-- Why Choose Us Content -->
                <div class="col-lg-12 why_col magic_fade_in align-items-center">
                    <div class="section_title text-center"><h2>Revisa nuestra gama de colores</h2></div>
                    <hr>
                    <div class="container-fluid col-md-12">
                        <img src="{{asset('img/system/gama.jpg')}}" style="height: auto; width: 1100px;">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="js/elements.js"></script>
@endsection

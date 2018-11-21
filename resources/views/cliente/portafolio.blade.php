@extends('layout.clientes')

@section('styles')
    <meta charset='UTF-8'>
    <meta name="robots" content="noindex">
    <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
    <link rel="canonical" href="https://codepen.io/RGonyeau/pen/QNLrBP?limit=all&page=54&q=gallery" />
    <style class="cp-pen-styles">

        body {
            font-family: 'Source Sans Pro', sans-serif;
        }

        .modal-backdrop {
            background-color: rgba(0,0,0,.0001) !important;
        }

        #gridGallery {
            max-width: 1170px;
            margin-left: auto;
            margin-right: auto;
        }

        h2,
        .ms-WPBody h2 {
            color: #000;
        }

        .box h3 {
            color: #fff;
            font-family: 'Source Sans Pro';
            font-weight:700;
        }

        section {
            margin: 25px 0;
        }

        #gridGallery .row {
            background-color: #26074D;
        }

        .box {
            background-position: center center;
            background-size: cover;
            border: 1px solid #fff;
            transition: opacity .25s;
            overflow: hidden;
        }

        .hiddenText {
            display: none !important;
        }

        .box:hover {
            cursor: pointer;
            z-index: 1;
        }

        #boxOne,
        #boxTwo,
        #boxSeven,
        #boxEight {
            height: 300px;
        }

        #boxThree,
        #boxFour,
        #boxFive,
        #boxSix {
            height: 150px;
        }

        .full {
            float: none;
            height: 600px !important;
            width: 1170px;
            position: absolute;
            z-index: 2;
        }

        #gridH {
            background-color: #eee;
            min-height: 600px;
            margin-bottom: 50px;
        }

        #gridH .row {
            margin-top: 150px;
        }

        #gridH .row .full {
            margin-top: -150px;
        }

        .full:hover {
            transform: scale(1);
            box-shadow: none;
        }

        .opacity {
            opacity: .8;
        }

        .captionBox {
            background-color: rgba(0, 0, 0, 0.8);
            bottom: 50px;
            color: white;
            left: 50px;
            padding: 25px;
            position: absolute;
            opacity: 0;
        }

        .captionBox p {
            font-size: 16px;
            font-weight:300;
        }

        .captionBox h3 {
            margin-top: 0;
            text-transform: uppercase;
        }

        .transition {
            transition: 1s;
        }

        .bottomRight {
            left: auto;
            right: 80px;
        }

        .topRight {
            left: auto;
            right: 50px;
            bottom: auto;
            top: 50px;
        }

        .topLeft {
            bottom: auto;
            top: 50px;
        }

        .toggleIcon {
            background-color: rgba(0, 0, 0, 0.7);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: 26px 26px;
            border-radius: 3px;
            bottom: 15px;
            height: 36px;
            left: -100px;
            opacity: 0;
            padding: 10px;
            position: absolute;
            width: 36px;
        }

        .box.full .toggleIcon {
            background-color: rgba(0, 0, 0, 0.57);
            background-position: center center;
            background-repeat: no-repeat;
            border-radius: 3px;
            top: 26px;
            height: 36px;
            left: 50px;
            opacity: 0;
            padding: 10px;
            position: absolute;
            width: 36px;
        }

        .box:hover .toggleIcon {
            opacity: 1;
            left: 15px;
            transition: all 0.25s ease 0s;
            background-image: url('http://www.ucdenver.edu/SiteCollectionImages/GridGallery/openIcon.png');
        }

        .box.full .toggleIcon {
            opacity: 1;
            left: 50px;
            top: 26px;
            border-radius: 0;
            background-image: url('http://www.ucdenver.edu/SiteCollectionImages/GridGallery/closeIcon.png');
            background-size: 55%;
        }

        .box.full .toggleIcon:hover {
            background-color: black;
            transition: all 0s ease 0;
        }

        #gridGallery > .row {
            margin: 0;
        }

        @media (max-width: 1200px) {
            .full {
                width: 970px;
            }
        }

        @media (max-width: 992px) {
            .full {
                width: 750px;
            }
        }

        @media (max-width: 768px) {
            #boxThree,
            #boxFour,
            #boxFive,
            #boxSix {
                height: 300px;
            }
            .toggleIcon {
                display: none;
            }
            .full .captionBox {
                bottom: 0;
                left: 0;
                position: absolute;
                width: 100%;
                padding: 10px;
            }
            .full .captionBox p {
                display: none;
            }
            .full .captionBox h3 {
                margin-bottom: 0;
            }
            .box.full {
                height: inherit;
                width: 100%;
            }
            .box {
                max-height: 150px !important;
            }
            #gridGallery .row {
                background-color: transparent;
            }
            #gridH .row {
                margin-top: 0px;
            }
            .box.full .toggleIcon {
                height: 50px !important;
                left: 0 !important;
                top: 0 !important;
                width: 50px !important;
                display: block;
            }
            .mobileFunction {
                float: left;
                height: 150px;
                width: 100%;
            }
            /* SHAREPOINT ONLY */
        }
    </style>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */

        /* Modal Content (image) */

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)}
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
        }
    </style>
@endsection

@section('content')
    <div class="intro">
            <section id="gridGallery">
                <div class="container">
                    <div class="row">
                        <?php
                            $cont = 0;
                        ?>
                        @foreach($galeria as $item)
                            <?php
                                    if ($cont == 12){
                                        $cont = 0;
                                    }
                                $var = rand(1,2);
                                if($cont == 0){
                                    switch ($var){
                                        case 1:  $tam = 'col-md-3'; $cont+=3;
                                            break;
                                        case 2: $tam = 'col-md-6'; $cont+=6;
                                            break;
                                    }
                                }elseif ($cont == 3){
                                    switch ($var){
                                        case 1:  $tam = 'col-md-3'; $cont+=3;
                                            break;
                                        case 2: $tam = 'col-md-6'; $cont+=6;
                                            break;
                                    }
                                }elseif($cont == 6){
                                    switch ($var){
                                        case 1:  $tam = 'col-md-3'; $cont += 3;
                                            break;
                                        case 2: $tam = 'col-md-6'; $cont += 6;
                                            break;
                                    }
                                }elseif($cont == 9){
                                    $tam = 'col-md-3';
                                    $cont += 3;
                                }

                                $tipo = 'boxOne';
                            ?>
                            <div class="{{$tam}} col-xs-6 pull-right box" id="{{$tipo}}" onclick="view({{$item->id}})"
                                 style="background-image: url({{asset('img/galeria/'.$item->image)}});">
                                <img src="{{asset('img/galeria/'.$item->image)}}" alt="" hidden id="{{$item->id}}">
                                <div class="toggleIcon"></div>
                            </div>


                        @endforeach
                    </div>
                    <!--.row-->

                </div>
                <!--.container-->


            </section>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" align="center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <img class="modal-content" id="imagenModal" alt="" style="display: block; margin: auto;">
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('/js/pages/galeria.js')}}"></script>
@endsection

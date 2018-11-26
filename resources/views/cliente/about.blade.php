@extends('layout.clientes')

@section('content')
    <!-- Why Choose Us -->

    <div class="intro">
        <div class="container">
            <div class="row">

                <!-- Why Choose Us Content -->
                <div class="col-lg-6 why_col magic_fade_in">
                    <div class="section_title"><h2>Quienes Somos?</h2></div>
                    <hr>
                    <div class="why_text">
                        <p>{{$gnrl->quienessomos}}</p>
                    </div>
                    <br>
                    <div class="why_list">
                        <ul>
                            <li class="d-flex flex-row align-items-center justify-content-start"><div></div>Nuestra Vision</li>
                            <li class="d-flex flex-row align-items-center justify-content-start"><div></div>{{$gnrl->vision}}</li>
                            <li class="d-flex flex-row align-items-center justify-content-start"><div></div>Nuestra Mision</li>
                            <li class="d-flex flex-row align-items-center justify-content-start"><div></div>{{$gnrl->mision}}</li>
                        </ul>
                    </div>
                </div>

                <!-- Why Choose Us Image -->
                <div class="col-lg-6 why_col magic_fade_in">
                    <div class="why_image"><img src="{{asset('/img/system/img1.jpg')}}" alt=""></div>
                </div>
            </div>
        </div>
    </div>


    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col text-center magic_fade_in">
                    <div class="section_title"><h2>Nuestro Equipo</h2></div>
                    <hr>
                    <div class="section_text">
                    </div>
                </div>
            </div>
            <div class="row team_row">

                <!-- Team Member -->
                <div class="col-xl-4 col-md-4 team_col magic_fade_in">
                    <div class="team_item">
                        <div class="team_image"><img src="{{asset('/img/system/equipo/YOYIS.jpg')}}" alt=""></div>
                        <div class="team_content">
                            <div class="team_name"><a href="#">Felix Zamudio</a></div>
                            <div class="team_title">arquero_76@hotmail.com</div>
                        </div>
                    </div>
                </div>

                <!-- Team Member -->
                <div class="col-xl-4 col-md-4 team_col magic_fade_in">
                    <div class="team_item">
                        <div class="team_image"><img src="{{asset('/img/system/equipo/CRISTIAN.jpg')}}" alt=""></div>
                        <div class="team_content">
                            <div class="team_name"><a href="#">Cristian Zamudio</a></div>
                            <div class="team_title">imagen_vinil@hotmail.com</div>
                        </div>
                    </div>
                </div>

                <!-- Team Member -->
                <div class="col-xl-4 col-md-4 team_col magic_fade_in">
                    <div class="team_item">
                        <div class="team_image"><img src="{{asset('/img/system/equipo/CRISTINA.jpg')}}" alt=""></div>
                        <div class="team_content">
                            <div class="team_name"><a href="#">Cristina Zamudio</a></div>
                            <div class="team_title">becriza@hotmail.com</div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="row team_row">

                <!-- Team Member -->
                <div class="col-xl-4 col-md-4 team_col magic_fade_in">
                    <div class="team_item">
                        <div class="team_image"><img src="{{asset('/img/system/equipo/YAZ.jpg')}}" alt=""></div>
                        <div class="team_content">
                            <div class="team_name"><a href="#">Yazmin Valdes</a></div>
                            <div class="team_title">yazminvaldes_938@msn.com</div>
                        </div>
                    </div>
                </div>

                <!-- Team Member -->
                <div class="col-xl-4 col-md-4 team_col magic_fade_in">
                    <div class="team_item">
                        <div class="team_image"><img src="{{asset('/img/system/equipo/CHRISTIAN.jpg')}}" alt=""></div>
                        <div class="team_content">
                            <div class="team_name"><a href="#">Christian Gameros</a></div>
                            <div class="team_title"></div>
                        </div>
                    </div>
                </div>

                <!-- Team Member -->
                <div class="col-xl-4 col-md-4 team_col magic_fade_in">
                    <div class="team_item">
                        <div class="team_image"><img src="{{asset('/img/system/equipo/CARLOS.jpg')}}" alt=""></div>
                        <div class="team_content">
                            <div class="team_name"><a href="#">Carlos de Leon</a></div>
                            <div class="team_title">carlzamudio@gmail.com</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
@endsection

@section('scripts')
    <script src="js/about.js"></script>
@endsection
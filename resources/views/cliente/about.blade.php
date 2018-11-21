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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet consequuntur deleniti eum illum magni rerum. Aliquam aut facilis ipsa minus molestias numquam optio rerum, sequi tenetur unde velit vero.</p>
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
                <div class="col-xl-3 col-md-6 team_col magic_fade_in">
                    <div class="team_item">
                        <div class="team_image"><img src="images/team_1.jpg" alt=""></div>
                        <div class="team_content">
                            <div class="team_name"><a href="#">Michael Smith</a></div>
                            <div class="team_title">Administrator</div>
                        </div>
                    </div>
                </div>

                <!-- Team Member -->
                <div class="col-xl-3 col-md-6 team_col magic_fade_in">
                    <div class="team_item">
                        <div class="team_image"><img src="images/team_2.jpg" alt=""></div>
                        <div class="team_content">
                            <div class="team_name"><a href="#">Jane Williams</a></div>
                            <div class="team_title">Developer</div>
                        </div>
                    </div>
                </div>

                <!-- Team Member -->
                <div class="col-xl-3 col-md-6 team_col magic_fade_in">
                    <div class="team_item">
                        <div class="team_image"><img src="images/team_3.jpg" alt=""></div>
                        <div class="team_content">
                            <div class="team_name"><a href="#">Claudia Parker</a></div>
                            <div class="team_title">Developer</div>
                        </div>
                    </div>
                </div>

                <!-- Team Member -->
                <div class="col-xl-3 col-md-6 team_col magic_fade_in">
                    <div class="team_item">
                        <div class="team_image"><img src="images/team_4.jpg" alt=""></div>
                        <div class="team_content">
                            <div class="team_name"><a href="#">James Black</a></div>
                            <div class="team_title">Designer</div>
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
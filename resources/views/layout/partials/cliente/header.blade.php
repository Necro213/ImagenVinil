<header class="header trans_400">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
                    <div class=""><a href="#"><img src="{{asset('/img/system/logo.png')}}" alt="" style="height: 75px; width: 230px;"></a></div>
                    <nav class="main_nav ml-auto mr-auto">
                        <ul class="d-flex flex-row align-items-center justify-content-start">
                            <li><a href="{{route('cliente.index')}}">Inicio</a></li>
                            <li class="dropdown dropdown-menu-lg"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos y Servicios</a>
                                <ul class="dropdown-menu" style="background: #26074D; opacity: 0.5;">
                                    <li><a href="{{route('cliente.services',['cat' => 'rotulacion'])}}">RotulacionDigital</a></li>
                                    <li><a href="{{route('cliente.services',['cat'=> 'senalamiento'])}}">SeñalamientoVial</a></li>
                                    <li><a href="{{route('cliente.services',['cat'=>'estampados'])}}">EstampadosTextiles</a></li>
                                    <li><a href="{{route('cliente.services',['cat'=>'grabados'])}}">Grabados</a></li>
                                    <li><a href="{{route('cliente.services',['cat'=>'anuncios'])}}">Anuncios</a></li>
                                </ul>
                            </li>
                            <!--li><a href="{{route('cliente.services')}}">Noticias</a></li-->
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Viniles</a>
                                <ul class="animated-dropdown-menu dropdown-menu"  style="background: #26074D; opacity: 0.5;">
                                    <li><a href="{{route('cliente.gama',["tipo"=>"adherible"])}}"><span>AutoAdheribles</span></a></li>
                                    <li><a href="{{route('cliente.gama',["tipo"=>"textil"])}}">Textiles</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('cliente.portafolio')}}">Portafolio</a></li>
                            <li><a href="{{route('cliente.about')}}">Acerca de...</a></li>
                        </ul>
                    </nav>
                    <div class="log_reg">
                        <div class="log_reg_content d-flex flex-row align-items-center justify-content-start">

                        </div>
                    </div>
                    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="menu_overlay trans_400"></div>

<div class="menu trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    <div class="log_reg">
        <div class="log_reg_content d-flex flex-row align-items-center justify-content-end">
            <div class="login log_reg_text"><a href="#">Login</a></div>
            <div class="register log_reg_text"><a href="#">Register</a></div>
        </div>
    </div>
    <nav class="menu_nav">
        <ul>
            <li><a href="{{route('cliente.index')}}">Home</a></li>
            <li><a href="{{route('cliente.about')}}">About us</a></li>
            <li><a href="{{route('cliente.services')}}">Services</a></li>
            <li><a href="{{route('cliente.gama')}}">News</a></li>
            <li><a href="{{route('cliente.portafolio')}}">Contact</a></li>
        </ul>
    </nav>
</div>
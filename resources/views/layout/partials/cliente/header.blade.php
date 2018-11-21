<header class="header trans_400">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
                    <div class="logo"><a href="#"><img src="{{asset('/img/system/logo.png')}}" alt="" style="height: 60px; width: auto;"></a></div>
                    <nav class="main_nav ml-auto mr-auto">
                        <ul class="d-flex flex-row align-items-center justify-content-start">
                            <li><a href="{{route('cliente.index')}}">Inicio</a></li>
                            <li><a href="{{route('cliente.services')}}">Productos y Servicios</a></li>
                            <li><a href="{{route('cliente.services')}}">Noticias</a></li>
                            <li><a href="{{route('cliente.gama')}}">Gama de Colores</a></li>
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
<div class="magic_fade_in">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('/img/system/'.$hoy->image)}}" data-speed="0.1"></div>
    <hr>
    <div class="container">
        <div class="section_title text-center"><h2 style="color: white">Contactanos</h2></div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('/img/system/ubicacion.png')}}" alt="" style="height: 400px; width: auto;">
            </div>
            <div class="col-md-6" style="color: white">
                <form>
                    <label>Telefono</label>
                    <p style="color: white">{{$gnrl->telefono}}</p>
                    <br>
                    <label>Direccion</label>
                    <p style="color: white">{{$gnrl->direccion}}</p>
                    <br>
                    <label>Correo</label>
                    <p style="color: white">{{$gnrl->email}}</p>
                    <br>
                    <label>Visitanos en nuestras Redes Sociales</label>
                    <div class="row">
                        <!--div class="col-md-2">
                            <h1 style="color: #00acee">
                                <a href="{{$gnrl->twitter}}"><i class="fab fa-twitter"></i></a>
                            </h1>
                        </div-->

                        <div class="col-md-2">
                            <h1 style="color: #3b5998">
                                <a href="{{$gnrl->facebook}}"><i class="fab fa-facebook-square"></i></a>
                            </h1>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
</div>
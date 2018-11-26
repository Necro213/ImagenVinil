<div class="services">
    <div class="parallax_background parallax-window" style="opacity: 0.1" data-parallax="scroll" data-image-src="{{asset('/img/system/'.$hoy->image)}}" data-speed="0.1"></div>
    <div class="container">
        <div class="row">
            <div class="col magic_fade_in">
                <div class="section_title text-center"><h2>Nuestras Promociones</h2></div>
            </div>
        </div>
        <hr>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                    $activo = true;
                    $slide=0;
                ?>
                @foreach($promociones as $promocion)
                    @if($activo == true)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$slide}}" class="active"></li>
                            <?php
                            $activo = false;
                            $slide++;
                            ?>
                    @else
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$slide}}"></li>
                            <?php
                            $slide++;
                            ?>
                    @endif
                @endforeach
            </ol>
            <div class="carousel-inner">
                <?php
                $activo = true;
                $slide=0;
                ?>
                @foreach($promociones as $promocion)
                    @if($activo == true)
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('img/promociones/'.$promocion->image)}}" style="height: 500px; width: auto">
                                <div class="carousel-caption d-none d-md-block" style="background: #7B5293; opacity: 0.7;">
                                    <h3 style="color: white"><strong>{{$promocion->title}}</strong></h3>

                                    <p  style="color: white">Entra <a href="{{$promocion->desc}}">aqui</a> para ver aplicacion</p>
                                    <p style="color: white"><span>{{'Desde '.$promocion->desde.' hasta '.$promocion->hasta}}</span></p>
                                </div>
                            </div>
                        <?php
                        $activo = false;
                        $slide++;
                        ?>
                    @else
                            <div class="carousel-item" >
                                <img class="d-block w-100" src="{{asset('img/promociones/'.$promocion->image)}}" style="height: 500px; width: auto">
                                <div class="carousel-caption d-none d-md-block" style="background: #7B5293; opacity: 0.5;">
                                    <h3 style="color: white" ><strong>{{$promocion->title}}</strong></h3>
                                    <p  style="color: white">Entra <a href="{{$promocion->desc}}">aqui</a> para ver aplicacion</p>
                                    <p style="color: white"><strong>{{'Desde '.$promocion->desde.' hasta '.$promocion->hasta}}</strong></p>
                                </div>
                            </div>
                        <?php
                        $slide++;
                        ?>
                    @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
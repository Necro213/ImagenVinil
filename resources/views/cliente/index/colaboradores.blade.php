<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col magic_fade_in">
                <div class="section_title text-center"><h2>Nuestros Colaboradores</h2></div>
            </div>
        </div>
        <div class="row intro_row">
            <div class="intro_dots magic_fade_in" ></div>

            <!-- Intro Item -->
            <div class="row intro_col magic_fade_in align-items-center">
                <div class="col-md-1"></div>
                <div id="colab" class="container-fluid col-md-10">
                    <div id="carouselcol" class="carousel slide" data-ride="carousel" data-interval="9000">
                        <div class="carousel-inner row w-100 mx-auto colab-inner" role="listbox">
                            <?php
                                $cont = 0;
                            ?>
                            @foreach($colaboradores as $colaborador)
                                @if($cont == 0)
                                        <div class="carousel-item col-md-3 active colab-item">
                                            <a href="{{$colaborador->sitio}}"><img class="img-fluid mx-auto d-block" src="{{asset('img/colaboradores/'.$colaborador->image)}}"
                                                 style="height: 150px;border-radius:150px;" alt="slide 1"></a>
                                        </div>
                                        <?php
                                        $cont++;
                                        ?>
                                    @else
                                        <div class="carousel-item col-md-3 colab-item">
                                            <a href="{{$colaborador->sitio}}"><img class="img-fluid mx-auto d-block" src="{{asset('img/colaboradores/'.$colaborador->image)}}"
                                                 style="height: 150px;border-radius:150px;" alt="slide 1"></a>
                                        </div>
                                    @endif
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselcol" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left fa-lg text-muted"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-faded" href="#carouselcol" role="button" data-slide="next">
                            <i class="fa fa-chevron-right fa-lg text-muted"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
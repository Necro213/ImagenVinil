

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col magic_fade_in">
                <div class="section_title text-center"><h2>Nuestros Productos</h2></div>
            </div>
        </div>
        <div class="row intro_row">
            <div class="intro_dots magic_fade_in" ></div>

            <!-- Intro Item -->
            @foreach($products as $product)
                <div class="col-lg-4 intro_col magic_fade_in">
                    <div class=" intro_item d-flex flex-column align-items-center justify-content-start text-center">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <div class=""><img src="{{asset('img/productos/'.$product->image)}}" alt="https://www.flaticon.com/authors/freepik" style="height: 250px; width: auto;"></div>
                        </div>

                    </div>
                    <br>
                    <div class="" style="padding-left: 20px">
                        <div class="intro_item_title">{{$product->nombre}}</div>
                        <div class="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda autem doloribus ducimus enim eos, harum impedit in, labore laborum libero maxime nam necessitatibus, odio perferendis rem tempora veritatis voluptas.</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col text-center">
                <div class="intro_button text-center trans_200 ml-auto mr-auto"><a href="{{route('cliente.about')}}">Ver más</a></div>
            </div>
        </div>
    </div>
</div>
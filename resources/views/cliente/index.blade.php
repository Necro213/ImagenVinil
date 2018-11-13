@extends('layout.clientes')

@section('content')


    <!-- Intro -->

    @include('cliente.index.productos')

    <!-- Services -->

    @include('cliente.index.servicios')

    <!-- Pricing -->

    <div class="pricing">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pricing_container d-flex flex-row align-items-start justify-content-start flex-wrap">

                        <!-- Pricing Item -->
                        <div class="pricing_item text-center magic_fade_in">
                            <div class="pricing_title">Starter Pack</div>
                            <div class="pricing_content">
                                <div class="package_price">$ 9.90<span>/Month</span></div>
                                <div class="pricing_list">
                                    <ul>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>50 GB Disk Space</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>1 sub-domain</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>5 E-mail Accounts</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/x.png" alt="">
                                            <span>24/7 Support</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/x.png" alt="">
                                            <span>Control Panel</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div>
                            </div>
                        </div>

                        <!-- Pricing Item -->
                        <div class="pricing_item text-center magic_fade_in">
                            <div class="pricing_title">Basic Pack</div>
                            <div class="pricing_content">
                                <div class="package_price">$ 19.90<span>/Month</span></div>
                                <div class="pricing_list">
                                    <ul>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>70 GB Disk Space</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>3 sub-domain</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>7 E-mail Accounts</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/x.png" alt="">
                                            <span>24/7 Support</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/x.png" alt="">
                                            <span>Control Panel</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div>
                            </div>
                        </div>

                        <!-- Pricing Item -->
                        <div class="pricing_item text-center magic_fade_in">
                            <div class="pricing_title">Premium Pack</div>
                            <div class="pricing_content">
                                <div class="package_price">$ 39.90<span>/Month</span></div>
                                <div class="pricing_list">
                                    <ul>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>90 GB Disk Space</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>5 sub-domain</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>10 E-mail Accounts</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>24/7 Support</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/x.png" alt="">
                                            <span>Control Panel</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div>
                            </div>
                        </div>

                        <!-- Pricing Item -->
                        <div class="pricing_item text-center magic_fade_in">
                            <div class="pricing_title">Pro Pack</div>
                            <div class="pricing_content">
                                <div class="package_price">$ 59.90<span>/Month</span></div>
                                <div class="pricing_list">
                                    <ul>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>120 GB Disk Space</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>7 sub-domain</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>15 E-mail Accounts</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>24/7 Support</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Control Panel</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->

    <div class="choice">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- Choice Image -->
                <div class="col-lg-6 choice_col magic_fade_in">
                    <div class="choice_image"><img src="images/choice.png" alt=""></div>
                </div>

                <!-- Choice Content -->
                <div class="col-lg-6 choice_col magic_fade_in">
                    <div class="choice_content">
                        <div class="section_title magic_fade_in"><h2>Why Choose us?</h2></div>
                        <div class="choice_text">
                            <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis.</p>
                        </div>
                        <div class="choice_list">
                            <ul class="d-flex flex-row align-items-start justify-content-between">
                                <li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
                                    <div class="choice_icon"><img src="images/icon_7.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                    <div class="choice_title">Marketing</div>
                                </li>
                                <li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
                                    <div class="choice_icon"><img src="images/icon_8.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                    <div class="choice_title">Stats</div>
                                </li>
                                <li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
                                    <div class="choice_icon"><img src="images/icon_9.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                    <div class="choice_title">Servers</div>
                                </li>
                                <li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
                                    <div class="choice_icon"><img src="images/icon_10.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                    <div class="choice_title">Quality</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->

    <div class="cta">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cta_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-between justify-content-center magic_fade_in">
                        <div class="cta_title">Start building your website now!</div>
                        <div class="cta_price"><span>from</span>$9.90<span>/month</span></div>
                        <div class="cta_button"><a href="#">Start Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="js/custom.js"></script>
@endsection
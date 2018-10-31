@extends('layout.clientes')

@section('content')
    <!-- Home -->

    <div class="home">
        <div class="home_background"></div>
        <div class="background_image background_city" style="background-image:url(images/city_6.png)"></div>
        <div class="cloud cloud_1"><img src="images/cloud.png" alt=""></div>
        <div class="cloud cloud_2"><img src="images/cloud.png" alt=""></div>
        <div class="cloud cloud_3"><img src="images/cloud_full_4.png" alt=""></div>
        <div class="cloud cloud_4"><img src="images/cloud.png" alt=""></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">Elements</div>
                            <div class="breadcrumbs">
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Elements</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Domain Search -->

    <div class="domain_search">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="domain_search_form_container d-flex flex-column align-items-center justify-content-center">
                        <form action="#" id="domain_search_form" class="domain_search_form d-flex flex-md-row flex-column align-items-center justify-content-start">
                            <div class="d-flex flex-row align-items-center justify-content-start">
                                <input type="text" class="domain_search_input" placeholder="yourdomain" required="required">
                                <div class="domain_search_dropdown d-flex flex-row align-items-center justify-content-start">
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    <div class="domain_search_selected">.io</div>
                                    <ul>
                                        <li>.io</li>
                                        <li>.com</li>
                                        <li>.net</li>
                                    </ul>
                                </div>
                            </div>
                            <button class="domain_search_button d-flex flex-row align-items-center justify-content-center"><img src="images/search.png" alt="">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Elements -->

    <div class="elements">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Buttons -->
                    <div class="buttons magic_fade_in">
                        <div class="elements_title">Buttons</div>
                        <div class="buttons_container d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <div class="button button_1"><a href="#">Send</a></div>
                            <div class="button button_2"><a href="#">Send</a></div>
                            <div class="button button_3"><a href="#">Send</a></div>
                        </div>
                    </div>

                    <!-- Accordions & Tabs -->
                    <div class="accordions_and_tabs">
                        <div class="elements_title">Accordions & Tabs</div>
                        <div class="row accordions_and_tabs_row">
                            <div class="col-lg-5">

                                <!-- Accordions -->
                                <div class="accordions magic_fade_in">

                                    <!-- Accordion -->
                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center"><div>Proin quis nibh eu enim pharetra facilisis.</div></div>
                                        <div class="accordion_panel">
                                            <div>
                                                <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion -->
                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center"><div>Cras dictum ante nisi, ac volutpat mauris iaculis</div></div>
                                        <div class="accordion_panel">
                                            <div>
                                                <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion -->
                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center active"><div>Suspendisse fringilla ante sit amet</div></div>
                                        <div class="accordion_panel">
                                            <div>
                                                <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-7">

                                <!-- Tabs -->
                                <div class="tabs magic_fade_in">
                                    <div class="tabs d-flex flex-row align-items-center justify-content-between flex-wrap">
                                        <div class="tab">hostings</div>
                                        <div class="tab active">domains</div>
                                        <div class="tab">cloud computing</div>
                                    </div>
                                    <div class="tab_panels">
                                        <div class="tab_panel">
                                            <div class="tab_panel_content">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div class="tab_image"><img src="images/tabs_image.jpg" alt=""></div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="tab_title">Choose your domain</div>
                                                        <div class="tab_text">
                                                            <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab_panel active">
                                            <div class="tab_panel_content">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div class="tab_image"><img src="images/tabs_image.jpg" alt=""></div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="tab_title">Choose your domain</div>
                                                        <div class="tab_text">
                                                            <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab_panel">
                                            <div class="tab_panel_content">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div class="tab_image"><img src="images/tabs_image.jpg" alt=""></div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="tab_title">Choose your domain</div>
                                                        <div class="tab_text">
                                                            <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Loaders -->
                    <div class="loaders">
                        <div class="elements_title">Loaders</div>

                        <div class="row loaders_row">

                            <!-- Loader -->
                            <div class="col-xl-3 col-md-6 loader_col magic_fade_in">
                                <!-- Loader -->
                                <div class="loader_container text-center" >
                                    <div class="loader text-center" data-perc="0.95" data-color="#1befc5"></div>
                                    <div class="loader_content">
                                        <div class="loader_title">Hard Work</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Loader -->
                            <div class="col-xl-3 col-md-6 loader_col magic_fade_in">
                                <!-- Loader -->
                                <div class="loader_container text-center">
                                    <div class="loader text-center" data-perc="0.75" data-color="#47a5c4"></div>
                                    <div class="loader_content">
                                        <div class="loader_title">Creativity</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Loader -->
                            <div class="col-xl-3 col-md-6 loader_col magic_fade_in">
                                <!-- Loader -->
                                <div class="loader_container text-center">
                                    <div class="loader text-center" data-perc="1.00" data-color="#7836c6"></div>
                                    <div class="loader_content">
                                        <div class="loader_title">Satisfaction</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Loader -->
                            <div class="col-xl-3 col-md-6 loader_col magic_fade_in">
                                <!-- Loader -->
                                <div class="loader_container text-center">
                                    <div class="loader text-center" data-perc="0.85" data-color="#25103f"></div>
                                    <div class="loader_content">
                                        <div class="loader_title">Success</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Milestones -->
                    <div class="milestones">
                        <div class="elements_title">Milestones</div>
                        <div class="row milestones_row">

                            <!-- Milestone -->
                            <div class="col-xl-3 col-md-6 milestone_col magic_fade_in">
                                <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                    <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_15.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                    <div class="milestone_content">
                                        <div class="milestone_counter" data-end-value="5000" data-sign-before="+">0</div>
                                        <div class="milestone_text">Satisfied Clients</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-xl-3 col-md-6 milestone_col magic_fade_in">
                                <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                    <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_17.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                    <div class="milestone_content">
                                        <div class="milestone_counter" data-end-value="352">0</div>
                                        <div class="milestone_text">Servers</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-xl-3 col-md-6 milestone_col magic_fade_in">
                                <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                    <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_16.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                    <div class="milestone_content">
                                        <div class="milestone_counter" data-end-value="718">0</div>
                                        <div class="milestone_text">Smart Contracts</div>
                                    </div>

                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-xl-3 col-md-6 milestone_col magic_fade_in">
                                <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                    <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_18.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                    <div class="milestone_content">
                                        <div class="milestone_counter" data-end-value="5">0</div>
                                        <div class="milestone_text">Awards Won</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Icon Boxes -->
                    <div class="icon_boxes">
                        <div class="elements_title">Icon Boxes</div>
                        <div class="row icon_boxes_row">

                            <!-- Icon Box -->
                            <div class="col-lg-4 icon_box_col magic_fade_in">
                                <div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
                                    <div class="icon_box_icon d-flex flex-column align-items-center justify-content-center">
                                        <img src="images/icon_12.svg" alt="https://www.flaticon.com/authors/freepik">
                                    </div>
                                    <div class="icon_box_title">Domain Names</div>
                                    <div class="icon_box_text">
                                        <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Icon Box -->
                            <div class="col-lg-4 icon_box_col magic_fade_in">
                                <div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
                                    <div class="icon_box_icon d-flex flex-column align-items-center justify-content-center">
                                        <img src="images/icon_13.svg" alt="https://www.flaticon.com/authors/freepik">
                                    </div>
                                    <div class="icon_box_title">Performance</div>
                                    <div class="icon_box_text">
                                        <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Icon Box -->
                            <div class="col-lg-4 icon_box_col magic_fade_in">
                                <div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
                                    <div class="icon_box_icon d-flex flex-column align-items-center justify-content-center">
                                        <img src="images/icon_14.svg" alt="https://www.flaticon.com/authors/freepik">
                                    </div>
                                    <div class="icon_box_title">Traffic Control</div>
                                    <div class="icon_box_text">
                                        <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="js/elements.js"></script>
@endsection

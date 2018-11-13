@extends('layout.clientes')

@section('content')


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

    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Contact Content -->
                <div class="col-lg-6 contact_col">
                    <div class="contact_content">
                        <div class="contact_title magic_fade_in">Contact Info</div>
                        <div class="contact_text magic_fade_in">
                            <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue tellus vitae mauris dignissim, id porta purus varius. Suspendisse pharetra tincidunt enim.</p>
                        </div>
                        <div class="contact_logo magic_fade_in"><a href="#">Host<span>Space</span></a></div>
                        <div class="contact_list magic_fade_in">
                            <ul>
                                <li>1481 Creekside Lane Avila Beach, CA 931</li>
                                <li>+53 345 7953 32453</li>
                                <li>yourmail@gmail.com</li>
                            </ul>
                        </div>
                        <div class="contact_social magic_fade_in">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <li><a href="#"><i class="fa fa-pinterest trans_200" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook trans_200" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter trans_200" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble trans_200" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance trans_200" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin trans_200" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Message Form -->
                <div class="col-lg-6 contact_col magic_fade_in">
                    <div class="message_form_container">
                        <div class="contact_title">Get in Touch</div>
                        <form action="#" id="message_form" class="message_form">
                            <input type="text" class="message_input" placeholder="Name" required="required">
                            <input type="email" class="message_input" placeholder="E-mail" required="required">
                            <textarea class="message_input message_textarea" placeholder="Message" required="required"></textarea>
                            <button class="message_form_button">Send</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row map_row">
                <div class="col">

                    <!-- Contact Map -->

                    <div class="contact_map magic_fade_in">

                        <!-- Google Map -->

                        <div class="map">
                            <div id="google_map" class="google_map">
                                <div class="map_container">
                                    <div id="map"></div>
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
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="js/contact.js"></script>
@endsection

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

    <!-- News -->

    <div class="news">
        <div class="container">
            <div class="row">

                <!-- News Content -->
                <div class="col-lg-9">
                    <div class="news_posts">

                        <!-- News Post -->
                        <div class="news_post magic_fade_in">
                            <div class="news_post_image">
                                <img src="images/news_1.jpg" alt="https://unsplash.com/@fancycrave">
                                <div class="news_post_date">
                                    <a href="#" class=" d-flex flex-column align-items-center justify-content-center">
                                        <div class="news_post_day">26</div>
                                        <div class="news_post_month">June</div>
                                    </a>
                                </div>
                            </div>
                            <div class="news_post_content">
                                <div class="news_post_title"><a href="#">10 reasons you need professional cloud storage</a></div>
                                <div class="news_post_meta">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li>by <a href="#">Admin</a></li>
                                        <li>in <a href="#">Storage</a></li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue tellus vitae mauris dignissim, id porta purus varius. Suspendisse pharetra tincidunt enim.</p>
                                </div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post magic_fade_in">
                            <div class="news_post_image">
                                <img src="images/news_2.jpg" alt="https://unsplash.com/@gbeaudry">
                                <div class="news_post_date">
                                    <a href="#" class=" d-flex flex-column align-items-center justify-content-center">
                                        <div class="news_post_day">26</div>
                                        <div class="news_post_month">June</div>
                                    </a>
                                </div>
                            </div>
                            <div class="news_post_content">
                                <div class="news_post_title"><a href="#">10 reasons you need professional cloud storage</a></div>
                                <div class="news_post_meta">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li>by <a href="#">Admin</a></li>
                                        <li>in <a href="#">Storage</a></li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue tellus vitae mauris dignissim, id porta purus varius. Suspendisse pharetra tincidunt enim.</p>
                                </div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post magic_fade_in">
                            <div class="news_post_image">
                                <img src="images/news_3.jpg" alt="https://unsplash.com/@helloquence">
                                <div class="news_post_date">
                                    <a href="#" class=" d-flex flex-column align-items-center justify-content-center">
                                        <div class="news_post_day">26</div>
                                        <div class="news_post_month">June</div>
                                    </a>
                                </div>
                            </div>
                            <div class="news_post_content">
                                <div class="news_post_title"><a href="#">10 reasons you need professional cloud storage</a></div>
                                <div class="news_post_meta">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li>by <a href="#">Admin</a></li>
                                        <li>in <a href="#">Storage</a></li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue tellus vitae mauris dignissim, id porta purus varius. Suspendisse pharetra tincidunt enim.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Page Nav -->
                    <div class="page_nav">
                        <ul class="d-flex flex-row align-items-center justify-content-start">
                            <li class="active"><a href="#">01.</a></li>
                            <li><a href="#">02.</a></li>
                            <li><a href="#">03.</a></li>
                            <li><a href="#" class="d-flex flex-row align-items-center justify-content-start">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </a></li>
                        </ul>
                    </div>
                </div>

                <!-- News Sidebar -->
                <div class="col-lg-3 sidebar_col">
                    <div class="sidebar">

                        <!-- Sidebar Search -->
                        <div class="sidebar_search magic_fade_in">
                            <form action="#" class="sidebar_search_form d-flex flex-row align-items-center justify-content-start" id="sidebar_search_form">
                                <input type="text" class="sidebar_search_input" required="required">
                                <button class="sidebar_search_button d-flex flex-column align-items-center justify-content-center"><img src="images/search_small.png" alt=""></button>
                            </form>
                        </div>

                        <!-- Recent Posts -->
                        <div class="recent_posts sidebar_section magic_fade_in">
                            <div class="sidebar_title_container">
                                <div>Recent Posts</div>
                            </div>
                            <div class="sidebar_list">
                                <ul>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>Nullam lacinia ex eleifend orci...</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>Suscipit interdum augue condime...</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>Etiam pretium turpis ege...</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>Lorem ipsum dolor sit amet...</div>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Recent Comments -->
                        <div class="recent_posts sidebar_section magic_fade_in">
                            <div class="sidebar_title_container">
                                <div>Recent Comments</div>
                            </div>
                            <div class="sidebar_list">
                                <ul>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>Llam lacinia ex eleifend orci...</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>Suscipit interdum augue condime...</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>Etiam pretium turpis ege...</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>Lorem ipsum dolor sit amet...</div>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Archive -->
                        <div class="recent_posts sidebar_section magic_fade_in">
                            <div class="sidebar_title_container">
                                <div>Archive</div>
                            </div>
                            <div class="sidebar_list">
                                <ul>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>March 2018</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>April 2018</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>May 2018</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>June 2018</div>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Categories -->
                        <div class="recent_posts sidebar_section magic_fade_in">
                            <div class="sidebar_title_container">
                                <div>Categories</div>
                            </div>
                            <div class="sidebar_list">
                                <ul>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>Hosting & Cloud</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>Computers</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>Websites & Domains</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="sidebar_dot d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                                <i class="fa fa-chevron-right trans_200" aria-hidden="true"></i>
                                            </div>
                                            <div>Uncategorized</div>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Sidebar Extra -->
                        <div class="sidebar_extra text-center magic_fade_in">
                            <a href="#">
                                <div class="background_image" style="background-image:url(images/sidebar_extra.jpg)"></div>
                                <div class="sidebar_extra_icon"><img src="images/icon_10.svg" alt=""></div>
                                <div class="sidebar_extra_title"><span>30 </span>Days money back guarantee</div>
                                <div class="sidebar_extra_text">Nullam lacinia ex eleifend orci porttitor, suscipit in.</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="js/blog.js"></script>
@endsection

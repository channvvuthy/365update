@extends('master_header')
@section('body')
    <body>

    <div class="super_container" id="app">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="images/phone.png" alt=""></div>
                                +855 10 545 450
                            </div>
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="images/mail.png" alt=""></div>
                                <a href="mailto:sengan.sor@gmail.com">sengan.sor@gmail.com</a></div>
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_user">
                                    <div class="user_icon"><img src="images/user.svg" alt=""></div>
                                    <div><a href="#">Register</a></div>
                                    <div><a href="#">Sign in</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Main -->

            <div class="header_main">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="col-lg-3 col-sm-4 col-4 order-1">
                            <div class="logo_container">
                                <div class="logo"><a href="{{URL::to('/')}}" style="text-transform:uppercase;">365daymarket</a></div>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="col-lg-9 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <input type="search" required="required" class="header_search_input"
                                                   placeholder="Search for products...">
                                            <div class="custom_dropdown">
                                                <category/>
                                            </div>
                                            <div class="custom_dropdown">
                                                <location/>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300" value="Submit">
                                                <img
                                                        src="images/search.png" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            @include('inc.nav')

        </header>

        <!-- Banner -->

        <div>
            <banner/>
        </div>

        <!-- Characteristics -->

        <!-- Adverts -->
        <div class="product-management">
            <product/>
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 footer_col">
                        <div class="footer_column footer_contact">
                            <div class="logo_container">
                                <div class="logo"><a href="{{URL::to('/')}}">365daymarket</a></div>
                            </div>
                            <div class="footer_title">Got Question? Call Us 24/7</div>
                            <div class="footer_phone">+855 10 545 450</div>
                            <div class="footer_contact_text">
                                <p>#240 St. 271</p>
                                <p>Phnom Penh 12351</p>
                            </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 offset-lg-2">
                        <div class="footer_column">
                            <div class="footer_title">Customer Service</div>
                            <ul class="footer_list">
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Memmbership</a></li>
                                <li><a href="#">Promote Ads</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="footer_column">
                            <div class="footer_title">Usefull Information</div>
                            <ul class="footer_list">
                                <li><a href="#">Safely Tip</a></li>
                                <li><a href="#">Posting rule Ads</a></li>
                                <li><a href="#">How to use</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Copyright -->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                            <div class="copyright_content">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright © 2018 All rights reserved <i class="fa fa-heart"
                                                                        aria-hidden="true"></i> by <a
                                        href="{{URL::to('/')}}" target="_blank">365daymarket</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                            <div class="logos ml-sm-auto">
                                <ul class="logos_list">
                                    <li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
    @section('footer')
        @include('inc.footer')
    </body>

    </html>
@stop
@section('script')
    @include('inc.script')
@stop
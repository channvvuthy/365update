@extends('master_header')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('styles/product_styles.css')}}">
@stop
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
                                <div class="top_bar_icon"><img src="{{asset('images/phone.png')}}" alt=""></div>
                                +855 10 545 450
                            </div>
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="{{asset('images/mail.png')}}" alt=""></div>
                                <a href="mailto:sengan.sor@gmail.com">sengan.sor@gmail.com</a></div>
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_user">
                                    <div class="user_icon"><img src="{{asset('images/user.svg')}}" alt=""></div>
                                    <div><a href="#">Register</a></div>
                                    <div><a href="#">Sign in</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Main -->
            @include('inc.nav')
            <div class="header_main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search" style="height: 130px;">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form class="form-inline" method="get">
                                            <div class="form-group">
                                                <label for="email">&nbsp;City/Province:</label>
                                                <select class="form-control" id="sel1">
                                                    <option value="">All City/Province</option>
                                                    <?php
                                                    $locations = DB::table('locations')->get();
                                                    ?>
                                                    @foreach($locations as $location)
                                                        <option value="{{$location->id}}">{{$location->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">&nbsp;&nbsp;&nbsp;&nbsp;Price
                                                    &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                <input type="number" class="form-control pwd" name="pwd"
                                                       placeholder="Price from: ">
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                <input type="number" class="form-control pwd" name="pwd"
                                                       placeholder="Price to:">
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                <button class="btn btn-primary"><img
                                                            src="{{asset('images/search.png')}}" alt=""></button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="grid-list"><label>&nbsp;View :</label> <span class="list-layout"><i
                                                class="fas fa-th-list"></i></span> <span class="grid-layout"><i
                                                class="fas fa-th-large"></i></span></div>
                            </div>

                        </div>
                        <div class="col-md-6 text-right">
                            <div class="form-group">
                                <div class="grid-list"><label>&nbsp;Sort :</label>
                                    <select name="postby" class="sortfilterby">
                                        <option value="last">New ads</option>
                                        <option value="popular">Most View</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>


        <!-- Characteristics -->

        <!-- Adverts -->
        <div class="product-management">
            <div class="single_product" style="padding-top: 70px;">
                <div class="container">
                    <div class="row">
                        @if(!empty($products))
                            @foreach($products as $product)
                                <?php $images = json_decode($product->images);?>
                                <div class="col-lg-3 advert_col" >
                                    <div class="product">
                                        <a href="{{URL::to('/')}}'/detail/'{{$product->id}}">
                                            <!-- Advert Item -->
                                            <div class="img-box" style="width: 100%;height: 180px;">
                                                <img src="{{$images[0]}}" alt="" class="img-product"
                                                     style="max-width: 100%;height: 180px;">
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="title"><a
                                                        href="{{URL::to('/')}}'/detail/'{{$product->id}}">{{$product->name}}</a>
                                            </div>
                                            <div class="p-rice"><b>${{$product->price}}</b></div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        {{$products->links()}}
                    </div>
                </div>
            </div>
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
                                    <li><a href="#"><img src="{{asset('images/logos_1.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('images/logos_2.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('images/logos_3.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('images/logos_4.png')}}" alt=""></a></li>
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
    <script>
        $(document).ready(function () {
            $(document).on('click', '.thumbnail', function () {
                var data_image = $(this).attr('data-image');
                $(".image_selected img").attr('src', data_image);
            });
        })
    </script>
@stop
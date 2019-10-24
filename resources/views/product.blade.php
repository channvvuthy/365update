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
                                                        src="{{asset('images/search.png')}}" alt=""></button>
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


        <!-- Characteristics -->

        <!-- Adverts -->
        <div class="product-management">
            <div class="single_product">
                <div class="container">
                    <div class="row">
                    <?php
                    $images = json_decode($single_product->images);
                    ?>
                    <!-- Images -->
                        <div class="col-lg-2 order-lg-1 order-2">
                            <ul class="image_list">
                                @foreach($images as $image)
                                    <li data-image="{{$image}}" class="thumbnail"><img
                                                src="{{$image}}" alt=""></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Selected Image -->
                        <div class="col-lg-5 order-lg-2 order-1">
                            <div class="image_selected"><img src="{{$images[0]}}" alt=""></div>
                        </div>

                        <!-- Description -->
                        <div class="col-lg-5 order-3">
                            <div class="box-profile">
                                <div class="image-profile"><img src="{{asset('images/default.png')}}" alt=""
                                                                width="70px;"></div>
                                <div class="profile-name">{{ucfirst($user->name)}}</div>
                            </div>
                            <br>
                            <p><i class="fas fa-phone-volume" style="font-size: 20px;"></i>
                                &nbsp;{{$single_product->phone}}</p>
                            <p><i class="fas fa-globe" style="font-size: 20px;"></i> <a
                                        href="{{URL::to('/').'/store/'.$user->id.'/'.$user->name}}"
                                        class="link">&nbsp;{{URL::to('/').'/store/'.$user->id.'/'.$user->name}}</a></p>
                            <p class="location"><i class="fas fa-map-marker-alt" style="font-size: 20px;"></i>&nbsp;
                                Location:</p>
                            <?php  $userstore = App\Store::where('user_id', $user->id)->first();?>
                            <div class="__google__map">
                                <div id="map" style="height:300px;">
                                    <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0"
                                            marginwidth="0"
                                            src="https://maps.google.com/maps?q={{$userstore->maplat}},{{$userstore->maplon}}&hl=es;z=17.5&amp;output=embed"></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                    <h3>Product detail</h3>
                    <hr>

                    <div class="col-lg-7">
                        <div class="product_description">
                            <div class="product_category">{{$single_product->category_name}}</div>
                            <div class="product_name">{{ucfirst($single_product->name)}}</div>
                            <div class="product_text"><p>{!! nl2br($single_product->description) !!}</p></div>
                            <div class="product_price">Price: $2000</div>
                        </div>
                    </div>


                    <br>
                    <br>
                    <br>

                    <div class="">
                        <div class="image-profile" style="border:1px solid #88888847;"><img
                                    src="{{asset('images/default.png')}}" alt="" width="70px;"></div>
                        <div class="profile-name">{{ucfirst($user->name)}}</div>
                        <p><a
                                    href="{{URL::to('/').'/store/'.$user->id.'/'.$user->name}}"
                                    class="link">&nbsp;{{URL::to('/').'/store/'.$user->id.'/'.$user->name}}</a></p>
                    </div>
                    <br>
                    <hr>
                    @if(!empty($product_by))
                        <div class="adverts">
                            <div class="container">
                                <div class="row break">
                                    @foreach($product_by as $product_item)
                                        <?php $images = json_decode($product_item->images)?>
                                        <div class="col-lg-3 advert_col">
                                            <div class="product">
                                                <a href="{{URL::to('/')}}/detail/{{$product_item->id}}">
                                                    <!-- Advert Item -->
                                                    <div class="img-box" style="width: 100%;height: 180px;">
                                                        <img src="{{$images[0]}}" alt="" class="img-product"
                                                             style="max-width: 100%;height: 180px;">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="title"><a
                                                                href="{{URL::to('/')}}/detail/{{$product_item->id}}">{{$product_item->name}}</a>
                                                    </div>
                                                    <div class="p-rice"><b>${{$product_item->price}}</b></div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                   <div class="col-lg-12">
                                       <div class="div"><a href="{{URL::to('/').'/store/'.$user->id.'/'.$user->name}}" class="btn btn-block btn-primary">View More</a></div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    @endif
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
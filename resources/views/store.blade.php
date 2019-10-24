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
                            <div class="top_bar_contact_item logo">
                                <a href="{{URL::to('/')}}">365daymarket.com</a>
                            </div>
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

        </header>


        <!-- Characteristics -->

        <!-- Adverts -->
        <div class="product-management">
            <div class="single_product" style="padding-top: 70px;">
                <div class="container">
                    <div class="row">
                    <?php
                    $images = json_decode($single_product->images);
                    function limit($value, $limit = 100, $end = '...')
                    {
                        if (mb_strwidth($value, 'UTF-8') <= $limit) {
                            return $value;
                        }

                        return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')) . $end;
                    }
                    ?>
                    <!-- Images -->
                        <div class="col-lg-8 order-lg-1 order-2">
                            <h2 class="profile-name">All Products</h2>
                            <hr>
                            @if(!empty($products))
                                @foreach($products as $product)
                                    <div class="row list">
                                        <div class="col-md-4">
                                            <?php
                                            $images = json_decode($product->images);
                                            ?>
                                            <div class="img">
                                                <img src="{{$images[0]}}" alt="" class="img-responsive"
                                                     style="max-width: 100%;">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h2 class="title"><a href="{{URL::to('/')}}/detail/{{$product->id}}">{{$product->name}}</a></h2>
                                            <div>
                                                <p>
                                                    {!! limit($product->description,100) !!}
                                                </p>
                                            </div>
                                            <div>
                                                <b>${{$product->price}}</b>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div>{{ $products->links() }}</div>
                            @endif

                        </div>

                        <!-- Selected Image -->

                        <!-- Description -->
                        <div class="col-lg-4 order-3">
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
@extends('back.index')

@section('content')



    <div class="site-main">
        <!--================ Start Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
                <div class="container-fluid no-padding">
                    <div class="row fullscreen">

                    </div>
                </div>
            </div>
        </section>
        <!-- Start banner bottom -->
        <div class="row banner-bottom align-items-center justify-content-center">
            <div class="col-lg-4">
                <div class="video-popup d-flex align-items-center">
                    <a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=KUln2DXU5VE"
                        data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s">
                        <span><img src="{{url('/back/img/banner/play-icon.png')}}" alt=""></span>
                    </a>
                    <div class="watch">
                        <h6>Watch video</h6>
                        <p>You will love our execution</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="banner_content">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-8 col-md-12">
                            <p class="top-text">Steak Shop offers best steak in town</p>
                            <h1>Steak Shop offers best steak in town</h1>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                                standards
                                especially in the workplace. That’s why it’s crucial that, as women.</p>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="banner-btn">
                                <a class="primary-btn text-uppercase" href="#">Explore Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End banner bottom -->
        <!--================ End Home Banner Area =================-->

        <!--================ Start Breakfast Area =================-->
        <div class="breakfast-area section_gap_top">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5">
                        <div class="left-content">
                            <h1>Daily Food Courses with Drinks </h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et
                                dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo
                                consequat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et
                                dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            <a href="#" class="primary-btn">See Full Menu</a>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="right-img">
                            <img class="img1 img-fluid" src="{{url('/back/img/food/food1.jpg')}}" alt="">
                            <img class="img2 img-fluid" src="{{url('/back/img/food/food2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================ End Breakfast Area =================-->

        <!--================ Start Lunch Area =================-->
        <div class="breakfast-area lunch-area section_gap">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="right-img">
                            <img class="img1 img-fluid" src="{{url('img/food/food3.jpg')}}" alt="">
                            <img class="img2 img-fluid" src="img/food/food4.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="left-content">
                            <h1>Daily Food Courses with Drinks </h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et
                                dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo
                                consequat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et
                                dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            <div class="chef-title">
                                <div class="thumb"><img src="img/about-author.png" alt=""></div>
                                <div class="c-desc">
                                    <h6>Marvel Maison</h6>
                                    <p>Chief Executive, Amazon</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================ End Lunch Area =================-->


        <!--================ Start Reservstion Area =================-->
        <section class="reservation-area section_gap_top">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="contact-form-section">
                            <h1>Reservation Form</h1>
                            <form class="contact-form-area contact-page-form contact-form text-right" id="myForm"
                                action="mail.html" method="post">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email Address" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Email Address'">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Phone Number" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Phone Number'">
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="form-select">
                                        <select>
                                            <option value="1">Number of people</option>
                                            <option value="1">Number of people</option>
                                            <option value="1">Number of people</option>
                                            <option value="1">Number of people</option>
                                            <option value="1">Number of people</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="datepicker" name="text"
                                        placeholder="Select Date & Time" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Select Date & Time'">
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="form-select">
                                        <select>
                                            <option value="1">Select event</option>
                                            <option value="1">Select event Dhaka</option>
                                            <option value="1">Select event Dilli</option>
                                            <option value="1">Select event Newyork</option>
                                            <option value="1">Select event Islamabad</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button class="primary-btn text-uppercase">Make Reservation</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Reservstion Area =================-->

        <!--================ Start Chef Area =================-->
        <div class="chef-area section_gap_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="left-chef">
                            <img class="img-fluid" src="{{url('/back/img/chef/chef1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="left-content">
                            <h1>Daily Food Courses with Drinks </h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et
                                dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo
                                consequat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et
                                dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            <img src="{{url('/back/img/chef/signature.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row chef-items">
                    <div class="col-lg-12 offset-lg-1">
                        <div class="row">
                            <!-- single chef item -->
                            <div class="col-lg-2 col-md-5">
                                <div class="single-chef-item">
                                    <a href="{{url('/back/img/food/food5.jpg')}}" class="img-popup"><img src="img/chef/item1.png" alt=""></a>
                                </div>
                            </div>
                            <!-- single chef item -->
                            <div class="col-lg-2 col-md-5">
                                <div class="single-chef-item">
                                    <a href="{{url('/back/img/food/food6.jpg')}}" class="img-popup"><img src="img/chef/item2.png" alt=""></a>
                                </div>
                            </div>
                            <!-- single chef item -->
                            <div class="col-lg-2 col-md-5">
                                <div class="single-chef-item">
                                    <a href="img/food/food7.jpg" class="img-popup"><img src="img/chef/item3.png" alt=""></a>
                                </div>
                            </div>
                            <!-- single chef item -->
                            <div class="col-lg-2 col-md-5">
                                <div class="single-chef-item">
                                    <a href="img/food/food8.jpg" class="img-popup"><img src="img/chef/item4.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================ End Chef Area =================-->

        <!--================ Start Food Gallery Area =================-->
        <section class="section_gap_top food-gallery-area">
            <div class="container-fluid no-padding">
                <div class="row owl-carousel active-food-gallery">
                    <!-- single gallery item -->
                    <div class="single-gallery-item">
                        <img class="img-fluid" src="{{url('/back/img/food/food5.jpg')}}" alt="">
                    </div>
                    <!-- single gallery item -->
                    <div class="single-gallery-item">
                        <img class="img-fluid" src="{{url('/back/img/food/food6.jpg')}}" alt="">
                    </div>
                    <!-- single gallery item -->
                    <div class="single-gallery-item">
                        <img class="img-fluid" src="{{url('/back/img/food/food7.jpg')}}" alt="">
                    </div>
                    <!-- single gallery item -->
                    <div class="single-gallery-item">
                        <img class="img-fluid" src="img/food/food8.jpg" alt="">
                    </div>
                    <!-- single gallery item -->
                    <div class="single-gallery-item">
                        <img class="img-fluid" src="img/food/food6.jpg" alt="">
                    </div>
                    <!-- single gallery item -->
                    <div class="single-gallery-item">
                        <img class="img-fluid" src="img/food/food8.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Food Gallery Area =================-->

        <!--================ Start Brands Area =================-->
        <section class="brands-area section_gap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="main_title">
                            <h1>In associasion with</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et
                                dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo
                                consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="owl-carousel brand-carousel">
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="{{url('/back/img/brands/logo1.png')}}" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="{{url('/back/img/brands/logo2.png')}}" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brands/logo3.png" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brands/logo4.png" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brands/logo5.png" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brands/logo3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Brands Area =================-->

    @endsection

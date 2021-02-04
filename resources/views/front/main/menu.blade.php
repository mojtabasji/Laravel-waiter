@extends('front.index')

@section('content')

    <div class="Delicious_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Delicious Food For You</h3>
                    </div>
                </div>
            </div>
            <div class="tablist_menu">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="nav justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">
                                    <div class="single_menu text-center">
                                        <div class="icon">
                                            <i class="flaticon-lunch"></i>
                                        </div>
                                        <h4>Dinner</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">
                                    <div class="single_menu text-center">
                                        <div class="icon">
                                            <i class="flaticon-food"></i>
                                        </div>
                                        <h4>Breakfast</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">
                                    <div class="single_menu text-center">
                                        <div class="icon">
                                            <i class="flaticon-kitchen"></i>
                                        </div>
                                        <h4>Lunch</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/1.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#12. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/3.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#10. Fried Rice</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/5.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#02. Burger Cury</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/2.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#16. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/4.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#08. Vegetable fry</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/6.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#01. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/1.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#12. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/3.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#10. Fried Rice</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/5.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#02. Burger Cury</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/2.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#16. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/4.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#08. Vegetable fry</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/6.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#01. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/1.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#12. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/3.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#10. Fried Rice</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/5.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#02. Burger Cury</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/2.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#16. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/4.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#08. Vegetable fry</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/6.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>#01. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

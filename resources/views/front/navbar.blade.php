<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="header_bottom_border">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a @auth @if (Auth::user()->role <= 2) href="{{ route('admin') }}" @endif @else
                                href="{{ route('home') }}" @endauth>
                                <img src="{{ url('/front/img/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="{{ route('home') }}">خانه</a></li>

                                    @auth
                                        <li><a href="#">{{ Auth::user()->name }} <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li>
                                                    <form action="<?php if (Auth::user()->role < 3) {
                                                            echo route('logout');
                                                        } else {
                                                            echo route('table.logout', Auth::user()->id);
                                                        } ?>" method="POST">
                                                        @csrf
                                                        <input class="btn btn-warning" style="width: 100%" type="submit"
                                                            value="خروج">
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <li><a href="#">کارکنان</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('register') }}">ثبت نام</a></li>
                                                <li><a href="{{ route('login') }}">ورود</a></li>
                                            </ul>
                                        </li>
                                    @endauth

                                    <li><a href="#">اعضا<i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('member.login') }}">ورود</a></li>
                                            <li><a href="{{ route('member.insert') }}">ثبت نام</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="elements.html">elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="single-blog.html">single-blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('table.menu') }}">منو</a></li>
                                    @auth
                                        @if (Auth::user()->role == 3)
                                            <li><a href="{{route('basket', Auth::user()->id)}}">سبد</a></li>
                                        @endif
                                    @endauth
                                </ul>
                            </nav>
                        </div>
                    </div>
                    @auth
                        @if (Auth::user()->role <= 2)
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="say_hello">
                                    <a href="{{ route('admin') }}"><u style="font-size: 25px">مدیریت</u></a>
                                </div>
                            </div>
                        @endif
                    @endauth
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</header>

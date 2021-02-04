<div class="menu-trigger">
    <span></span>
    <span></span>
    <span></span>
</div>
<header class="fixed-menu">
    <span class="menu-close"><i class="fa fa-times"></i></span>
    <div class="menu-header">
        <div class="logo d-flex justify-content-center">
            <img src="{{url('/back/img/logo.png')}}" alt="">
        </div>
    </div>
    <div class="nav-wraper">
        <div class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="{{route('home')}}"><img src="{{url('/back/img/header/nav-icon1.png')}}" alt="">خانه</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.categorys')}}"><img src="{{url('/back/img/header/nav-icon2.png')}}" alt="">دسته بندی ها</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.foods')}}"><img src="{{url('/back/img/header/nav-icon3.png')}}" alt="">غذا</a></li>
                <li class="nav-item"><a class="nav-link" href="menu.html"><img src="{{url('/back/img/header/nav-icon3.png')}}" alt="">menu</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.members')}}"><img src="{{url('/back/img/header/nav-icon9.png')}}" alt="">اعضا</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.tables')}}"><img src="{{url('/back/img/header/nav-icon4.png')}}" alt="">میزها</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.users',2)}}"><img src="{{url('/back/img/header/nav-icon5.png')}}" alt="">کارکنان</a></li>
                <li class="nav-item submenu dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                     aria-expanded="false"><img src="{{url('/back/img/header/nav-icon6.png')}}" alt="">Pages</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="elements.html">element</a></li>
                    </ul>
                </li>
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                     aria-expanded="false"><img src="{{url('/back/img/header/nav-icon7.png')}}" alt="">Blog</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.html"><img src="{{url('/back/img/header/nav-icon8.png')}}" alt="">contact</a></li>
            </ul>
        </div>
    </div>
</header>

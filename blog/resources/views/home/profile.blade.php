<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">



</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>

        <nav class="canvas-menu mobile-menu">
            <ul>
                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('service.index') }}">Services</a></li>
                <li><a href="{{ route('about-us.index') }}">About us</a></li>
                <li><a href="{{ route('calculator.index') }}">Bmi calculate</a></li>
                <li><a href="{{ route('class.index') }}">BMR calculate</a></li>
                <li><a href="{{ route('contact.index') }}">Contact</a></li>

                @if (Auth::check())
                    <li style="display: none;"><a href="{{ route('sign-up.index') }}">SIGN-UP</a></li>
                @else
                    <li><a href="{{ route('sign-up.index') }}">SIGN-UP</a></li>
                @endif
                <li><a href="{{ route('about-us.index') }}">About us</a></li>
                <li><a href="./bmi-calculator.html">Bmi calculate</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <nav class="nav-menu">
                        <ul>
                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('service.index') }}">Services</a></li>
                            <li><a href="{{ route('about-us.index') }}">About us</a></li>
                            <li><a href="{{ route('calculator.index') }}">Bmi calculate</a></li>
                            <li><a href="{{ route('class.index') }}">BMR calculate</a></li>
                            <li><a href="{{ route('contact.index') }}">Contact</a></li>
                            @if (Auth::check())
                                <li style="display: none;"><a href="{{ route('sign-up.index') }}">SIGN-UP</a></li>
                            @else
                                <li><a href="{{ route('sign-up.index') }}">SIGN-UP</a></li>
                            @endif
                        </ul>
                        </li>

                        </ul>
                    </nav>


                </div>
                @if (Auth::check())
                    <li><a style="color: white;margin-left: 120px" href="{{ route('logout') }}"><i
                                class="fas fa-sign-out-alt"></i></a></li>
                @endif
                @if (Auth::check())
                    <li><a style="color: white" href="{{ route('profile.index') }}"><i class="fas fa-user"></i></a>
                    </li>
                @endif
                <div class="col-lg-2">


                    <div class="">


                    </div>
                </div>
            </div>


        </div>
        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/img/pro.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>your profile</h2>
                        <div class="bt-option">
                            <a href="{{route('index')}}">Home</a>
                            <a href="#">Pages</a>
                            <span> your profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->

    <div class="contact-section spad" style="height: 1210px">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title contact-title">
                        <span></span>
                        <h3 style="color: white">- welcome .  <span style="font-size: 23px"> {{$users->name}} -</span></h3>
                        </div>
                        <br>
                    <div class="contact-widget" style="margin-bottom: 30px">
                        <div class="cw-text">
                            <i class="fa fa-user"></i>
                            <p>NAME<br/> {{$users->name}}</p>
                        </div>
                        <br><br><br>
                        <div class="cw-text">
                            <i class="fa fa-envelope"></i>
                            <p>EMAIL<br/>{{$users->email}} </p>
                        </div>
                        <br><br>
                        <div class="col-lg-6">
                            <div class="leave-comment">
                                <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <span style="font-weight: bold;color: white">* CHOOSE YOUR IMAGE :</span>
                                    <br><br>
                                    <input type="file" style="background-color: rgb(243,97,0);border-radius: 15px; padding:0px;height:auto;width:auto;"  name="image" placeholder="image">
                                    <br><br>
                                    <button type="submit" style="background-color: rgb(243,97,0);border: none;border-radius: 20px;font-weight: bold;color: white;width:100px;">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="leave-comment">
                        <form action="#" >
                            @if ($users->img)
                            <img src="{{ asset($users->img) }}" class="rounded-full" style="height: 500px; width: 400px; margin-left: 30px; border: 2px solid rgb(243,97,0);border-radius: 10px;">

                            @else
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-full">
                            @endif
                            </form>


                    </div>
                    <br><br><br>
                    <h2 style="color: white">add review:</h2>
                    <br><br>
                    <div>
                        <button style="background-color: rgb(243,97,0);border: none;border-radius: 20px;font-weight: bold;color: white;width:auto;"><a href="{{route('review.index')}}" style="background-color: rgb(243,97,0);border: none;border-radius: 17px;font-weight: bold;color: white;width:auto;height: auto;;">Add  Review</a></button>
                    </div>
                </div>


            </div>
        </div>
        <br><br><br><br><br><br><br>


    <!-- Contact Section End -->

 <!-- Get In Touch Section Begin -->

<!-- Get In Touch Section End -->
<!-- Footer Section Begin -->
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="fs-about">
                    <div class="fa-logo">
                        <a href="#"><img src="img/logo.png" alt=""></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>links</h4>
                    <ul>
                        <li><a href="{{ route('about-us.index') }}">About-us</a></li>
                        <li><a href="{{ route('contact.index') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    @if (Auth::check())
                        <h4>Support</h4>
                    @endif
                    <ul>

                        @if (Auth::check())
                            <li><a href="{{ route('profile.index') }}">My account</a></li>
                        @endif
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="copyright-text">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="fa fa-heart" aria-hidden="true"></i> by <a href=""
                            target="_blank">Talal</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="gettouch-section" style="height: 200px;background-color: black ">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="gt-text">

                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text">
                    <ul>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text email">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Section End -->

<!-- Search model Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery.barfiller.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>




</body>

</html>


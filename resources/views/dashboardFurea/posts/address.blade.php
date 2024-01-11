<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Furea - My Account</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Afurea') }}/assets/img/favicon.ico">
    
   <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="{{ asset('Afurea') }}/assets/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="{{ asset('Afurea') }}/assets/css/plugins/glightbox.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  
  <!-- Plugin css -->
  <link rel="stylesheet" href="{{ asset('Afurea') }}/assets/css/vendor/bootstrap.min.css">
  
  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="{{ asset('Afurea') }}/assets/css/style.css">
</head>

<body>

   <!-- Start header area -->
   <header class="header__section header__others border-bottom header__transparent mb-30">
        <div class="header__topbar bg__primary">
            <div class="container">
                <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                    <div class="header__shipping">
                        <p class="header__shipping--text text-white">Get Up To 80% off In your first Offer!</p>
                    </div>
                </div>
            </div>
        </div>
        @include('dashboardFurea.layouts.header')
    </header>
    <!-- End header area -->

    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content">
                            <h1 class="breadcrumb__content--title text-white mb-10">My Account</h1>
                            <ul class="breadcrumb__content--menu d-flex">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="/furea">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">My Account</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->
        
        <!-- my account section start -->
        <section class="my__account--section section--padding">
            <div class="container">
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__left--sidebar">
                        <h3 class="account__content--title mb-20">My Profile</h3>
                        <ul class="account__menu">
                            <li class="account__menu--list"><a href="/myaccount">Dashboard</a></li>
                            <li class="account__menu--list active"><a href="/address">Addresses</a></li>
                            <li class="account__menu--list"><a href="/wishlist">Wishlist</a></li>
                            <li class="account__menu--list"><a href="/loginFurea">Log Out</a></li>
                        </ul>
                    </div>
                    <div class="account__wrapper">
                        <div class="account__content">
                            <h3 class="account__content--title mb-20">Addresses</h3>
                            <button class="new__address--btn primary__btn mb-25" type="button">Add a new address</button>
                            <div class="account__details two">
                                <h4 class="account__details--title">Default</h4>
                                <p class="account__details--desc">Admin <br> Dhaka <br> Dhaka 12119 <br> Bangladesh</p>
                                <a class="account__details--link" href="my-account-2.html">View Addresses (1)</a>
                            </div>
                            <div class="account__details--footer d-flex">
                                <button class="account__details--footer__btn" type="button">Edit</button>
                                <button class="account__details--footer__btn" type="button">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- my account section end -->

        <!-- Start Newsletter banner section -->
        <section class="newsletter__banner--section section--padding pt-0">
            <div class="container">
                <div class="newsletter__banner--thumbnail position__relative">
                    <img class="newsletter__banner--thumbnail__img" src="https://source.unsplash.com/1170x444?modern&Design" alt="newsletter-banner">
                    <div class="newsletter__content newsletter__subscribe">
                        <h5 class="newsletter__content--subtitle text-white">Want to offer regularly ?</h5>
                        <h2 class="newsletter__content--title text-white h3 mb-25">Subscribe Our Newsletter <br>
                            for Get Daily Update</h2>
                        <form class="newsletter__subscribe--form position__relative" action="#">
                            <label>
                                <input class="newsletter__subscribe--input" placeholder="Enter your email address" type="email">
                            </label>
                            <button class="newsletter__subscribe--button primary__btn" type="submit">Subscribe
                                <svg class="newsletter__subscribe--button__icon" xmlns="http://www.w3.org/2000/svg" width="9.159" height="7.85" viewBox="0 0 9.159 7.85">
                                    <path  data-name="Icon material-send" d="M3,12.35l9.154-3.925L3,4.5,3,7.553l6.542.872L3,9.3Z" transform="translate(-3 -4.5)" fill="currentColor"/>
                                </svg>
                            </button>
                        </form>   
                    </div>
                </div>
            </div>
        </section>
        <!-- End Newsletter banner section -->

    </main>

    <!-- Start footer section -->
    @include('dashboardFurea.layouts.footer')
    <!-- End footer section -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>

    
  <!-- All Script JS Plugins here  -->
  <script src="{{ asset('Afurea') }}/assets/js/vendor/popper.js" defer="defer"></script>
  <script src="{{ asset('Afurea') }}/assets/js/vendor/bootstrap.min.js" defer="defer"></script>
  <script src="{{ asset('Afurea') }}/assets/js/plugins/swiper-bundle.min.js" defer="defer"></script>
  <script src="{{ asset('Afurea') }}/assets/js/plugins/glightbox.min.js" defer="defer"></script>

  <!-- Customscript js -->
  <script src="{{ asset('Afurea') }}/assets/js/script.js" defer="defer"></script>
  
</body>
</html>
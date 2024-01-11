<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Furea - Blog Left Sidebar</title>
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
            <div class="container-fluid">
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
            <div class="container-fluid">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content">
                            <h1 class="breadcrumb__content--title text-white mb-10">Blog Left Sidebar</h1>
                            <ul class="breadcrumb__content--menu d-flex">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="/furea">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Blog Left Sidebar</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start blog section -->
        <section class="blog__section section--padding">
            <div class="container-fluid">
                <div class="row row-md-reverse">
                    <div class="col-xxl-3 col-xl-4 col-lg-4">
                        <div class="blog__sidebar--widget left widget__area">
                            <div class="single__widget widget__bg">
                                <h2 class="widget__title position__relative h3">Search</h2>
                                <form class="widget__search--form" action="#">
                                    <label>
                                        <input class="widget__search--form__input" placeholder="Search by" type="text">
                                    </label>
                                    <button class="widget__search--form__btn"  type="submit">
                                        Search 
                                    </button>
                                </form>
                            </div>
                            <div class="single__widget widget__bg">
                                <h2 class="widget__title position__relative h3">Categories</h2>
                                <ul class="widget__categories--menu">
                                    <li class="widget__categories--menu__list">
                                        <label class="widget__categories--menu__label d-flex align-items-center">
                                            <img class="widget__categories--menu__img" src="{{ asset('Afurea') }}/assets/img/product/small-product1.webp" alt="categories-img">
                                            <span class="widget__categories--menu__text">Denim Jacket</span>
                                            <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                                <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                            </svg>
                                        </label>
                                        <ul class="widget__categories--sub__menu">
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product2.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product3.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product4.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Western denim</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product5.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="widget__categories--menu__list">
                                        <label class="widget__categories--menu__label d-flex align-items-center">
                                            <img class="widget__categories--menu__img" src="{{ asset('Afurea') }}/assets/img/product/small-product2.webp" alt="categories-img">
                                            <span class="widget__categories--menu__text">Oversize Cotton</span>
                                            <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" >
                                                <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                            </svg>
                                        </label>
                                        <ul class="widget__categories--sub__menu">
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product2.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product3.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product4.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Western denim</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product5.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="widget__categories--menu__list">
                                        <label class="widget__categories--menu__label d-flex align-items-center">
                                            <img class="widget__categories--menu__img" src="{{ asset('Afurea') }}/assets/img/product/small-product3.webp" alt="categories-img">
                                            <span class="widget__categories--menu__text">Dairy & chesse</span>
                                            <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                                <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                            </svg>
                                        </label>
                                        <ul class="widget__categories--sub__menu">
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product2.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product3.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product4.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Western denim</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product5.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="widget__categories--menu__list">
                                        <label class="widget__categories--menu__label d-flex align-items-center">
                                            <img class="widget__categories--menu__img" src="{{ asset('Afurea') }}/assets/img/product/small-product4.webp" alt="categories-img">
                                            <span class="widget__categories--menu__text">Shoulder Bag</span>
                                            <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                                <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                            </svg>
                                        </label>
                                        <ul class="widget__categories--sub__menu">
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product2.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product3.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product4.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Western denim</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product5.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="widget__categories--menu__list">
                                        <label class="widget__categories--menu__label d-flex align-items-center">
                                            <img class="widget__categories--menu__img" src="{{ asset('Afurea') }}/assets/img/product/small-product5.webp" alt="categories-img">
                                            <span class="widget__categories--menu__text">Denim Jacket</span>
                                            <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                                <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                            </svg>
                                        </label>
                                        <ul class="widget__categories--sub__menu">
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product2.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product3.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product4.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Western denim</span>
                                                </a>
                                            </li>
                                            <li class="widget__categories--sub__menu--list">
                                                <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                    <img class="widget__categories--sub__menu--img" src="{{ asset('Afurea') }}/assets/img/product/small-product5.webp" alt="categories-img">
                                                    <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="single__widget widget__bg">
                                <h2 class="widget__title position__relative h3">Post article</h2>
                                <div class="articl__post--inner">
                                    <div class="articl__post--items d-flex align-items-center">
                                        <div class="articl__post--items__thumbnail position__relative">
                                            <a class="articl__post--items__link display-block" href="blog-details.html">
                                                <img class="articl__post--items__img display-block" src="{{ asset('Afurea') }}/assets/img/product/small-product1.webp" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="articl__post--items__content">
                                            <h4 class="articl__post--items__content--title"><a href="blog-details.html">The Greatest Team's Favorite Leggings.</a></h4>
                                            <span class="meta__deta text__secondary">Jan 11, 2022</span>
                                        </div>
                                    </div>
                                    <div class="articl__post--items d-flex align-items-center">
                                        <div class="articl__post--items__thumbnail position__relative">
                                            <a class="articl__post--items__link display-block" href="blog-details.html">
                                                <img class="articl__post--items__img display-block" src="{{ asset('Afurea') }}/assets/img/product/small-product2.webp" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="articl__post--items__content">
                                            <h4 class="articl__post--items__content--title"><a href="blog-details.html">Top 10 Best Furniture Company.</a></h4>
                                            <span class="meta__deta text__secondary">Jan 11, 2022</span>
                                        </div>
                                    </div>
                                    <div class="articl__post--items d-flex align-items-center">
                                        <div class="articl__post--items__thumbnail position__relative">
                                            <a class="articl__post--items__link display-block" href="blog-details.html">
                                                <img class="articl__post--items__img display-block" src="{{ asset('Afurea') }}/assets/img/product/small-product3.webp" alt="product-img">
                                            </a>
                                        </div>
                                        <div class="articl__post--items__content">
                                            <h4 class="articl__post--items__content--title"><a href="blog-details.html">There are History you Should Know.</a></h4>
                                            <span class="meta__deta text__secondary">Jan 11, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single__widget widget__bg">
                                <h2 class="widget__title position__relative h3">Tags</h2>
                                <ul class="widget__tagcloud">
                                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Wooden</a></li>
                                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Chair</a></li>
                                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Modern</a></li>
                                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Fabric  </a></li>
                                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Shoulder </a></li>
                                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Winter</a></li>
                                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Accessories</a></li>
                                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Dress </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-8 col-lg-8">
                        <div class="blog__wrapper blog__wrapper--sidebar">
                            <div class="row row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 mb--n30">
                                <div class="col mb-30">
                                    <div class="blog__items">
                                        <div class="blog__thumbnail">
                                            <a class="blog__thumbnail--link display-block" href="blog-details.html"><img class="blog__thumbnail--img display-block" src="{{ asset('Afurea') }}/assets/img/blog/blog5.webp" alt="blog-img"></a>
                                        </div>
                                        <div class="blog__content">
                                            <ul class="blog__content--meta d-flex">
                                                <li class="blog__content--meta__text">
                                                    <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.001" viewBox="0 0 11.001 11.001">
                                                        <path  data-name="Icon awesome-user-circle" d="M5.5.313a5.5,5.5,0,1,0,5.5,5.5A5.5,5.5,0,0,0,5.5.313Zm0,2.129A1.952,1.952,0,1,1,3.549,4.394,1.952,1.952,0,0,1,5.5,2.442Zm0,7.63A4.25,4.25,0,0,1,2.251,8.559,2.473,2.473,0,0,1,4.436,7.232a.543.543,0,0,1,.157.024A2.937,2.937,0,0,0,5.5,7.41a2.925,2.925,0,0,0,.907-.153.543.543,0,0,1,.157-.024A2.473,2.473,0,0,1,8.75,8.559,4.25,4.25,0,0,1,5.5,10.071Z" transform="translate(0 -0.313)" fill="currentColor"/>
                                                    </svg>
                                                   James Hames
                                                </li>
                                                <li class="blog__content--meta__text">
                                                    <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="12.569" height="13.966" viewBox="0 0 12.569 13.966">
                                                        <path  data-name="Icon material-date-range" d="M8.69,9.285h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm1.4-4.888h-.7V3h-1.4V4.4H7.991V3h-1.4V4.4H5.9a1.39,1.39,0,0,0-1.39,1.4L4.5,15.569a1.4,1.4,0,0,0,1.4,1.4h9.776a1.4,1.4,0,0,0,1.4-1.4V5.793A1.4,1.4,0,0,0,15.673,4.4Zm0,11.173H5.9V7.888h9.776Z" transform="translate(-4.5 -3)" fill="currentColor"/>
                                                    </svg>
                                                    February 05, 2022
                                                </li>
                                            </ul>
                                            <h3 class="blog__content--title h4"><a href="blog-details.html">Top 10 Best Furniture Company
                                                History you Should Know</a></h3>
                                            <p class="blog__content--desc">Mum ut perspiciatis unde omnis iste
                                                natus error sit voluptatem…..</p>
                                            <a class="blog__content--btn primary__btn" href="blog-details.html">Read more </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="blog__items">
                                        <div class="blog__thumbnail">
                                            <a class="blog__thumbnail--link display-block" href="blog-details.html"><img class="blog__thumbnail--img display-block" src="{{ asset('Afurea') }}/assets/img/blog/blog6.webp" alt="blog-img"></a>
                                        </div>
                                        <div class="blog__content">
                                            <ul class="blog__content--meta d-flex">
                                                <li class="blog__content--meta__text">
                                                    <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.001" viewBox="0 0 11.001 11.001">
                                                        <path  data-name="Icon awesome-user-circle" d="M5.5.313a5.5,5.5,0,1,0,5.5,5.5A5.5,5.5,0,0,0,5.5.313Zm0,2.129A1.952,1.952,0,1,1,3.549,4.394,1.952,1.952,0,0,1,5.5,2.442Zm0,7.63A4.25,4.25,0,0,1,2.251,8.559,2.473,2.473,0,0,1,4.436,7.232a.543.543,0,0,1,.157.024A2.937,2.937,0,0,0,5.5,7.41a2.925,2.925,0,0,0,.907-.153.543.543,0,0,1,.157-.024A2.473,2.473,0,0,1,8.75,8.559,4.25,4.25,0,0,1,5.5,10.071Z" transform="translate(0 -0.313)" fill="currentColor"/>
                                                    </svg>
                                                   James Hames
                                                </li>
                                                <li class="blog__content--meta__text">
                                                    <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="12.569" height="13.966" viewBox="0 0 12.569 13.966">
                                                        <path  data-name="Icon material-date-range" d="M8.69,9.285h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm1.4-4.888h-.7V3h-1.4V4.4H7.991V3h-1.4V4.4H5.9a1.39,1.39,0,0,0-1.39,1.4L4.5,15.569a1.4,1.4,0,0,0,1.4,1.4h9.776a1.4,1.4,0,0,0,1.4-1.4V5.793A1.4,1.4,0,0,0,15.673,4.4Zm0,11.173H5.9V7.888h9.776Z" transform="translate(-4.5 -3)" fill="currentColor"/>
                                                    </svg>
                                                    February 05, 2022
                                                </li>
                                            </ul>
                                            <h3 class="blog__content--title h4"><a href="blog-details.html">Top 10 Best Furniture Company
                                                History you Should Know</a></h3>
                                            <p class="blog__content--desc">Mum ut perspiciatis unde omnis iste
                                                natus error sit voluptatem…..</p>
                                            <a class="blog__content--btn primary__btn" href="blog-details.html">Read more </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="blog__items">
                                        <div class="blog__thumbnail">
                                            <a class="blog__thumbnail--link display-block" href="blog-details.html"><img class="blog__thumbnail--img display-block" src="{{ asset('Afurea') }}/assets/img/blog/blog7.webp" alt="blog-img"></a>
                                        </div>
                                        <div class="blog__content">
                                            <ul class="blog__content--meta d-flex">
                                                <li class="blog__content--meta__text">
                                                    <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.001" viewBox="0 0 11.001 11.001">
                                                        <path  data-name="Icon awesome-user-circle" d="M5.5.313a5.5,5.5,0,1,0,5.5,5.5A5.5,5.5,0,0,0,5.5.313Zm0,2.129A1.952,1.952,0,1,1,3.549,4.394,1.952,1.952,0,0,1,5.5,2.442Zm0,7.63A4.25,4.25,0,0,1,2.251,8.559,2.473,2.473,0,0,1,4.436,7.232a.543.543,0,0,1,.157.024A2.937,2.937,0,0,0,5.5,7.41a2.925,2.925,0,0,0,.907-.153.543.543,0,0,1,.157-.024A2.473,2.473,0,0,1,8.75,8.559,4.25,4.25,0,0,1,5.5,10.071Z" transform="translate(0 -0.313)" fill="currentColor"/>
                                                    </svg>
                                                   James Hames
                                                </li>
                                                <li class="blog__content--meta__text">
                                                    <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="12.569" height="13.966" viewBox="0 0 12.569 13.966">
                                                        <path  data-name="Icon material-date-range" d="M8.69,9.285h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm1.4-4.888h-.7V3h-1.4V4.4H7.991V3h-1.4V4.4H5.9a1.39,1.39,0,0,0-1.39,1.4L4.5,15.569a1.4,1.4,0,0,0,1.4,1.4h9.776a1.4,1.4,0,0,0,1.4-1.4V5.793A1.4,1.4,0,0,0,15.673,4.4Zm0,11.173H5.9V7.888h9.776Z" transform="translate(-4.5 -3)" fill="currentColor"/>
                                                    </svg>
                                                    February 05, 2022
                                                </li>
                                            </ul>
                                            <h3 class="blog__content--title h4"><a href="blog-details.html">Top 10 Best Furniture Company
                                                History you Should Know</a></h3>
                                            <p class="blog__content--desc">Mum ut perspiciatis unde omnis iste
                                                natus error sit voluptatem…..</p>
                                            <a class="blog__content--btn primary__btn" href="blog-details.html">Read more </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="blog__items">
                                        <div class="blog__thumbnail">
                                            <a class="blog__thumbnail--link display-block" href="blog-details.html"><img class="blog__thumbnail--img display-block" src="{{ asset('Afurea') }}/assets/img/blog/blog8.webp" alt="blog-img"></a>
                                        </div>
                                        <div class="blog__content">
                                            <ul class="blog__content--meta d-flex">
                                                <li class="blog__content--meta__text">
                                                    <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.001" viewBox="0 0 11.001 11.001">
                                                        <path  data-name="Icon awesome-user-circle" d="M5.5.313a5.5,5.5,0,1,0,5.5,5.5A5.5,5.5,0,0,0,5.5.313Zm0,2.129A1.952,1.952,0,1,1,3.549,4.394,1.952,1.952,0,0,1,5.5,2.442Zm0,7.63A4.25,4.25,0,0,1,2.251,8.559,2.473,2.473,0,0,1,4.436,7.232a.543.543,0,0,1,.157.024A2.937,2.937,0,0,0,5.5,7.41a2.925,2.925,0,0,0,.907-.153.543.543,0,0,1,.157-.024A2.473,2.473,0,0,1,8.75,8.559,4.25,4.25,0,0,1,5.5,10.071Z" transform="translate(0 -0.313)" fill="currentColor"/>
                                                    </svg>
                                                   James Hames
                                                </li>
                                                <li class="blog__content--meta__text">
                                                    <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="12.569" height="13.966" viewBox="0 0 12.569 13.966">
                                                        <path  data-name="Icon material-date-range" d="M8.69,9.285h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm1.4-4.888h-.7V3h-1.4V4.4H7.991V3h-1.4V4.4H5.9a1.39,1.39,0,0,0-1.39,1.4L4.5,15.569a1.4,1.4,0,0,0,1.4,1.4h9.776a1.4,1.4,0,0,0,1.4-1.4V5.793A1.4,1.4,0,0,0,15.673,4.4Zm0,11.173H5.9V7.888h9.776Z" transform="translate(-4.5 -3)" fill="currentColor"/>
                                                    </svg>
                                                    February 05, 2022
                                                </li>
                                            </ul>
                                            <h3 class="blog__content--title h4"><a href="blog-details.html">Top 10 Best Furniture Company
                                                History you Should Know</a></h3>
                                            <p class="blog__content--desc">Mum ut perspiciatis unde omnis iste
                                                natus error sit voluptatem…..</p>
                                            <a class="blog__content--btn primary__btn" href="blog-details.html">Read more </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="blog__items">
                                        <div class="blog__thumbnail">
                                            <a class="blog__thumbnail--link display-block" href="blog-details.html"><img class="blog__thumbnail--img display-block" src="{{ asset('Afurea') }}/assets/img/blog/blog9.webp" alt="blog-img"></a>
                                        </div>
                                        <div class="blog__content">
                                            <ul class="blog__content--meta d-flex">
                                                <li class="blog__content--meta__text">
                                                    <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.001" viewBox="0 0 11.001 11.001">
                                                        <path  data-name="Icon awesome-user-circle" d="M5.5.313a5.5,5.5,0,1,0,5.5,5.5A5.5,5.5,0,0,0,5.5.313Zm0,2.129A1.952,1.952,0,1,1,3.549,4.394,1.952,1.952,0,0,1,5.5,2.442Zm0,7.63A4.25,4.25,0,0,1,2.251,8.559,2.473,2.473,0,0,1,4.436,7.232a.543.543,0,0,1,.157.024A2.937,2.937,0,0,0,5.5,7.41a2.925,2.925,0,0,0,.907-.153.543.543,0,0,1,.157-.024A2.473,2.473,0,0,1,8.75,8.559,4.25,4.25,0,0,1,5.5,10.071Z" transform="translate(0 -0.313)" fill="currentColor"/>
                                                    </svg>
                                                   James Hames
                                                </li>
                                                <li class="blog__content--meta__text">
                                                    <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="12.569" height="13.966" viewBox="0 0 12.569 13.966">
                                                        <path  data-name="Icon material-date-range" d="M8.69,9.285h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm1.4-4.888h-.7V3h-1.4V4.4H7.991V3h-1.4V4.4H5.9a1.39,1.39,0,0,0-1.39,1.4L4.5,15.569a1.4,1.4,0,0,0,1.4,1.4h9.776a1.4,1.4,0,0,0,1.4-1.4V5.793A1.4,1.4,0,0,0,15.673,4.4Zm0,11.173H5.9V7.888h9.776Z" transform="translate(-4.5 -3)" fill="currentColor"/>
                                                    </svg>
                                                    February 05, 2022
                                                </li>
                                            </ul>
                                            <h3 class="blog__content--title h4"><a href="blog-details.html">Top 10 Best Furniture Company
                                                History you Should Know</a></h3>
                                            <p class="blog__content--desc">Mum ut perspiciatis unde omnis iste
                                                natus error sit voluptatem…..</p>
                                            <a class="blog__content--btn primary__btn" href="blog-details.html">Read more </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="blog__items">
                                        <div class="blog__thumbnail">
                                            <a class="blog__thumbnail--link display-block" href="blog-details.html"><img class="blog__thumbnail--img display-block" src="{{ asset('Afurea') }}/assets/img/blog/blog10.webp" alt="blog-img"></a>
                                        </div>
                                        <div class="blog__content">
                                            <ul class="blog__content--meta d-flex">
                                                <li class="blog__content--meta__text">
                                                    <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.001" viewBox="0 0 11.001 11.001">
                                                        <path  data-name="Icon awesome-user-circle" d="M5.5.313a5.5,5.5,0,1,0,5.5,5.5A5.5,5.5,0,0,0,5.5.313Zm0,2.129A1.952,1.952,0,1,1,3.549,4.394,1.952,1.952,0,0,1,5.5,2.442Zm0,7.63A4.25,4.25,0,0,1,2.251,8.559,2.473,2.473,0,0,1,4.436,7.232a.543.543,0,0,1,.157.024A2.937,2.937,0,0,0,5.5,7.41a2.925,2.925,0,0,0,.907-.153.543.543,0,0,1,.157-.024A2.473,2.473,0,0,1,8.75,8.559,4.25,4.25,0,0,1,5.5,10.071Z" transform="translate(0 -0.313)" fill="currentColor"/>
                                                    </svg>
                                                   James Hames
                                                </li>
                                                <li class="blog__content--meta__text">
                                                    <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="12.569" height="13.966" viewBox="0 0 12.569 13.966">
                                                        <path  data-name="Icon material-date-range" d="M8.69,9.285h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm1.4-4.888h-.7V3h-1.4V4.4H7.991V3h-1.4V4.4H5.9a1.39,1.39,0,0,0-1.39,1.4L4.5,15.569a1.4,1.4,0,0,0,1.4,1.4h9.776a1.4,1.4,0,0,0,1.4-1.4V5.793A1.4,1.4,0,0,0,15.673,4.4Zm0,11.173H5.9V7.888h9.776Z" transform="translate(-4.5 -3)" fill="currentColor"/>
                                                    </svg>
                                                    February 05, 2022
                                                </li>
                                            </ul>
                                            <h3 class="blog__content--title h4"><a href="blog-details.html">Top 10 Best Furniture Company
                                                History you Should Know</a></h3>
                                            <p class="blog__content--desc">Mum ut perspiciatis unde omnis iste
                                                natus error sit voluptatem…..</p>
                                            <a class="blog__content--btn primary__btn" href="blog-details.html">Read more </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination__area bg__gray--color">
                                <nav class="pagination justify-content-center">
                                    <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                                        <li class="pagination__list"><a href="blog.html" class="pagination__item--arrow  link ">
                                            <svg xmlns="http://www.w3.org/2000/svg"  width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/></svg></a>
                                        <li>
                                        <li class="pagination__list"><span class="pagination__item pagination__item--current">1</span></li>
                                        <li class="pagination__list"><a href="blog.html" class="pagination__item link">2</a></li>
                                        <li class="pagination__list"><a href="blog.html" class="pagination__item link">3</a></li>
                                        <li class="pagination__list"><a href="blog.html" class="pagination__item link">4</a></li>
                                        <li class="pagination__list"><a href="blog.html" class="pagination__item--arrow  link ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/></svg></a>
                                        <li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End blog section -->

        <!-- Start Newsletter banner section -->
        <section class="newsletter__banner--section section--padding pt-0">
            <div class="container-fluid">
                <div class="newsletter__banner--thumbnail position__relative">
                    <img class="newsletter__banner--thumbnail__img" src="{{ asset('Afurea') }}/assets/img/banner/banner-bg2.webp" alt="newsletter-banner">
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
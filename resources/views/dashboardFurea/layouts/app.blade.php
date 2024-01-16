<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Marketplace | TRIC Indonesia</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="img/LogoTric1.png"> --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Afurea') }}/assets/img/favicon.ico">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="{{ asset('Afurea') }}/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('Afurea') }}/assets/css/plugins/glightbox.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="{{ asset('Afurea') }}/assets/css/vendor/bootstrap.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('Afurea') }}/assets/css/style.css">
    {{-- Bootstrap & Icon  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

</head>

<body>

    <!-- Start header area -->
    <header class="header__section header__section3 header__transparent mb-20 color-scheme-3">
        <div class="header__topbar border-bottom">
            <div class="container">
                <div
                    class="header__topbar--inner header__topbar--inner2 d-flex align-items-center justify-content-between">
                    <ul class="header__info d-flex align-items-center">
                        <li class="header__info--list">
                            <svg class="header__info--icon" xmlns="http://www.w3.org/2000/svg" width="15.982"
                                height="22.403" viewBox="0 0 15.982 22.403">
                                <g id="Icon_feather-smartphone" data-name="Icon feather-smartphone"
                                    transform="translate(-4.5 -1.5)">
                                    <path id="Path_112" data-name="Path 112"
                                        d="M7.14,2h10.7a2.14,2.14,0,0,1,2.14,2.14V21.262a2.14,2.14,0,0,1-2.14,2.14H7.14A2.14,2.14,0,0,1,5,21.262V4.14A2.14,2.14,0,0,1,7.14,2Z"
                                        transform="translate(0 0)" fill="none" stroke="#121a25"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                    <path id="Path_113" data-name="Path 113" d="M12,18h0"
                                        transform="translate(0.491 1.122)" fill="none" stroke="#121a25"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </g>
                            </svg>
                            <a class="header__info--text" href="tel:02742874179">
                                @if (Auth::check())
                                    @if ($pp->store_phone_number)
                                        {{ $pp->store_phone_number }}
                                    @else
                                        Nomor telepon tidak tersedia
                                    @endif
                                @else
                                    Nomor telepon tidak tersedia
                                @endif

                            </a>

                        </li>
                        <li class="header__info--list">
                            <svg class="header__info--icon" xmlns="http://www.w3.org/2000/svg" width="25.712"
                                height="17.142" viewBox="0 0 25.712 17.142">
                                <g id="email" transform="translate(0 -85.333)">
                                    <g id="Group_265" data-name="Group 265" transform="translate(0 85.333)">
                                        <g id="Group_264" data-name="Group 264">
                                            <path id="Path_140" data-name="Path 140"
                                                d="M23.034,85.333H2.678A2.682,2.682,0,0,0,0,88.011V99.8a2.682,2.682,0,0,0,2.678,2.678H23.034A2.682,2.682,0,0,0,25.712,99.8V88.011A2.682,2.682,0,0,0,23.034,85.333ZM24.641,99.8a1.609,1.609,0,0,1-1.607,1.607H2.678A1.609,1.609,0,0,1,1.071,99.8V88.011A1.609,1.609,0,0,1,2.678,86.4H23.034a1.609,1.609,0,0,1,1.607,1.607V99.8Z"
                                                transform="translate(0 -85.333)" fill="#121a25" />
                                        </g>
                                    </g>
                                    <g id="Group_267" data-name="Group 267" transform="translate(2.143 87.476)">
                                        <g id="Group_266" data-name="Group 266">
                                            <path id="Path_141" data-name="Path 141"
                                                d="M64,128.234a.536.536,0,0,0-.745-.139l-8.786,6.011a1.918,1.918,0,0,1-2.178,0l-8.786-6.011a.535.535,0,1,0-.6.884l8.786,6.011a2.98,2.98,0,0,0,3.388,0l8.786-6.011A.535.535,0,0,0,64,128.234Z"
                                                transform="translate(-42.67 -128)" fill="#121a25" />
                                        </g>
                                    </g>
                                    <g id="Group_269" data-name="Group 269" transform="translate(2.142 93.904)">
                                        <g id="Group_268" data-name="Group 268">
                                            <path id="Path_142" data-name="Path 142"
                                                d="M50.022,256.188a.539.539,0,0,0-.755-.069l-6.428,5.357a.536.536,0,0,0,.687.824l6.428-5.357A.537.537,0,0,0,50.022,256.188Z"
                                                transform="translate(-42.646 -255.996)" fill="#121a25" />
                                        </g>
                                    </g>
                                    <g id="Group_271" data-name="Group 271" transform="translate(16.07 93.903)">
                                        <g id="Group_270" data-name="Group 270">
                                            <path id="Path_143" data-name="Path 143"
                                                d="M327.309,261.475l-6.428-5.357a.536.536,0,0,0-.687.824l6.428,5.357a.536.536,0,0,0,.687-.824Z"
                                                transform="translate(-320.001 -255.995)" fill="#121a25" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <a class="header__info--text" href="mailto:info@tric-indonesia.com">
                                @if (Auth::check())
                                    {{ Auth::user()->email }}
                                @else
                                    info@tric-indonesia.com
                                @endif
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        @include('dashboardFurea.layouts.header')
    </header>
    <!-- End header area -->

    <main class="main__content_wrapper">
        <!-- Start slider section -->
        <section class="hero__slider--section color-scheme-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="hero__slider3--inner hero__slider--activation swiper">
                            <div class="hero__slider3--wrapper swiper-wrapper">
                                <div class="swiper-slide ">
                                    <div class="hero__slider3--items hero__slider--bg3 slider1">
                                        <div class="slider__content3 padding-left">
                                            <h2 class="slider__content3--maintitle">Make Beautiful Home <br>
                                                With Moon Sofa</h2>
                                            <p class="slider__content3--desc mb-35">Great furniture can bring beauty at
                                                your home, <br>
                                                So buy our popular and stylish furniture. </p>
                                            <a class="slider__content3--btn primary__btn btn__style3" href="shop.html"
                                                rel="nofollow">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="hero__slider3--items hero__slider--bg3 slider2">
                                        <div class="slider__content3 padding-left text-center">
                                            <h2 class="slider__content3--maintitle">Make Beautiful Home <br>
                                                With Moon Sofa</h2>
                                            <p class="slider__content3--desc color-black mb-35">Great furniture can
                                                bring beauty at your home, <br>
                                                So buy our popular and stylish furniture. </p>
                                            <a class="slider__content3--btn primary__btn btn__style3" href="shop.html"
                                                rel="nofollow">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="hero__slider3--items hero__slider--bg3 slider3">
                                        <div class="slider__content3 padding-left">
                                            <h2 class="slider__content3--maintitle">Make Beautiful Home <br>
                                                With Moon Sofa</h2>
                                            <p class="slider__content3--desc mb-35">Great furniture can bring beauty at
                                                your home, <br>
                                                So buy our popular and stylish furniture. </p>
                                            <a class="slider__content3--btn primary__btn btn__style3" href="shop.html"
                                                rel="nofollow">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper__nav--btn swiper-button-next"></div>
                            <div class="swiper__nav--btn swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End slider section -->

        <!-- Start Categories section -->
        <section class="categories__section color-scheme-3 section--padding">
            <div class="container">
                <div class="section__heading text-center mb-50">
                    <h2 class="section__heading--maintitle">Browse Popular Categories</h2>
                </div>
                <div class="categories__section--inner">
                    <div class="row row-cols-lg-6 row-cols-md-4 row-cols-sm-3 row-cols-2  mb--n30">
                        @foreach ($categories as $item)
                            <div class="col mb-30">
                                <div class="categories__product--items border border-radius-5 text-center">
                                    <a class="categories__product--items__link" href="shop.html">
                                        <img class="categories__product--thumbnail__img display-block"
                                            src="{{ asset('storage/images/' . $item->image) }}"
                                            alt="categories-product">
                                        <h3 class="categories__product--title h4">{{ $item->name }}</h3>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Categories section -->

        <!-- Start product section -->

        <section class="product__section section--padding color-scheme-3 pt-0">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">Top New Furniture</h2>
                </div>
                @if ($barangterbaru->count())
                    <div class="product__section--inner product__swiper--column4 swiper">
                        <div class="swiper-wrapper">
                            @foreach ($barangterbaru as $item)
                                <div class="swiper-slide">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">

                                                <img class="product__items--img product__primary--img"
                                                    src="{{ asset('storage/public/images/' . $item->image) }}"
                                                    alt="Design">

                                                {{-- <img class="product__items--img product__secondary--img"
                                                    src="https://source.unsplash.com/282x295?cardesign"
                                                    alt="Design"> --}}
                                                {{-- <img class="product__items--img product__primary--img" src="{{ asset('Afurea') }}/assets/img/product/product1.webp" alt="product-img">
                                        <img class="product__items--img product__secondary--img" src="{{ asset('Afurea') }}/assets/img/product/product2.webp" alt="product-img"> --}}
                                            </a>
                                            <div class="product__badge style3">
                                                <span class="product__badge--items style3 sale">New</span>
                                            </div>
                                            <ul class="product__items--action d-flex justify-content-center">
                                                {{-- <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="20.51"
                                                            height="19.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li> --}}
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="17.51"
                                                            height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path
                                                                d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0"
                                                                transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                {{-- <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="16.47"
                                                            height="13.088" viewBox="0 0 15.47 11.088">
                                                            <g transform="translate(0 -72.508)">
                                                                <path data-name="Path 114"
                                                                    d="M15.359,80.9l-2.011-2.011a.525.525,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49l1.106,1.106H10.576L8.3,78.052l2.273-2.274h1.618l-1.106,1.106a.287.287,0,0,0,.2.49h1.683a.531.531,0,0,0,.374-.155l2.011-2.011a.38.38,0,0,0,0-.535l-.859-.859a.227.227,0,1,0-.32.321l.806.806L13.027,76.9a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542h-2.04a.227.227,0,0,0-.16.066l-2.34,2.34-.544-.544,2.519-2.519a.382.382,0,0,1,.272-.112h2.293a.317.317,0,0,0,.225-.542l-1.054-1.054h1.282a.076.076,0,0,1,.053.022l.4.4a.227.227,0,1,0,.32-.321l-.4-.4a.531.531,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49L12.194,74.1H10.229a.832.832,0,0,0-.592.245L7.118,76.867,4.6,74.349a.832.832,0,0,0-.592-.245H.378A.378.378,0,0,0,0,74.481v.92a.378.378,0,0,0,.378.378H3.66l2.273,2.274L3.66,80.326H.378A.378.378,0,0,0,0,80.7v.92A.378.378,0,0,0,.378,82H4.007a.835.835,0,0,0,.592-.245l2.519-2.519.8.8a.227.227,0,1,0,.32-.32L3.914,75.392a.227.227,0,0,0-.16-.066H.453v-.769H4.007a.382.382,0,0,1,.272.113l6.043,6.043a.227.227,0,0,0,.16.066h2.04a.317.317,0,0,0,.224-.542l-1.054-1.054h1.282a.075.075,0,0,1,.053.022l1.958,1.958-1.958,1.958a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542H10.229a.383.383,0,0,1-.272-.113l-.968-.968a.227.227,0,0,0-.32.32l.968.968a.833.833,0,0,0,.592.245h1.965l-1.105,1.105a.287.287,0,0,0,.2.49h1.683a.525.525,0,0,0,.374-.155l2.011-2.011A.379.379,0,0,0,15.359,80.9Zm-11.08.539a.389.389,0,0,1-.272.113H.453v-.769h3.3a.226.226,0,0,0,.16-.066l2.34-2.34.543.544Z"
                                                                    transform="translate(0 0)" fill="currentColor" />
                                                            </g>
                                                        </svg>
                                                        <span class="visually-hidden">Compare</span>
                                                    </a>
                                                </li> --}}
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            {{-- <div class="product__items--color">
                                                <ul
                                                    class="product__items--color__wrapper d-flex justify-content-center">
                                                    <li class="product__items--color__list"><a
                                                            class="product__items--color__link one"
                                                            href="javascript:void(0)"><span
                                                                class="visually-hidden">Color 1</span></a></li>
                                                    <li class="product__items--color__list"><a
                                                            class="product__items--color__link two"
                                                            href="javascript:void(0)"><span
                                                                class="visually-hidden">Color 2</span></a></li>
                                                    <li class="product__items--color__list"><a
                                                            class="product__items--color__link three"
                                                            href="javascript:void(0)"><span
                                                                class="visually-hidden">Color 3</span></a></li>
                                                    <li class="product__items--color__list"><a
                                                            class="product__items--color__link four"
                                                            href="javascript:void(0)"><span
                                                                class="visually-hidden">Color 4</span></a></li>
                                                </ul>
                                            </div> --}}
                                            <h3 class="product__items--content__title h4"><a
                                                    href="product-details.html">{{ $item->nama_barang }}</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">Rp. {{ $item->price }}</span>
                                                <span class="old__price">Rp.
                                                    {{ $item->price + 500000 }}</span>
                                            </div>
                                            <a class="product__items--action__cart--btn primary__btn btn__style3"
                                                href="cart.html">
                                                <svg class="product__items--action__cart--btn__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565"
                                                    viewBox="0 0 18.897 21.565">
                                                    <path
                                                        d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z"
                                                        transform="translate(-2.667 -1.366)" fill="currentColor">
                                                    </path>
                                                </svg>
                                                <span class="add__to--cart__text"> Add to cart</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper__nav--btn swiper-button-next"></div>
                        <div class="swiper__nav--btn swiper-button-prev"></div>
                    </div>
                @else
                    <p class="text-center fs-4">No New Furniture</p>
                @endif
            </div>
        </section>

        <!-- End product section -->

        <!-- Start product section -->
        @if ($barang->count())
            <section class="product__section section--padding color-scheme-3 pt-0">
                <div class="container">
                    <div class="section__heading text-center mb-40">
                        <h2 class="section__heading--maintitle">Most Popular Items</h2>
                    </div>
                    <div class="product__section--inner">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                            @foreach ($barang as $item)
                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img"
                                                    src="{{ asset('storage/public/images/' . $item->image) }}"
                                                    alt="Design">
                                                {{-- <img class="product__items--img product__secondary--img"
                                            src="https://source.unsplash.com/282x295?table" alt="Design"> --}}
                                                {{-- <img class="product__items--img product__primary--img" src="{{ asset('Afurea') }}/assets/img/product/product11.webp" alt="product-img">
                                        <img class="product__items--img product__secondary--img" src="{{ asset('Afurea') }}/assets/img/product/product12.webp" alt="product-img"> --}}
                                            </a>
                                            <ul class="product__items--action d-flex justify-content-center">
                                                {{-- <li class="product__items--action__list">
                                            <a class="product__items--action__btn" data-open="modal1"
                                                href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32" />
                                                    <circle cx="256" cy="256" r="80" fill="none"
                                                        stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="32" />
                                                </svg>
                                                <span class="visually-hidden">Quick View</span>
                                            </a>
                                        </li> --}}
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="17.51"
                                                            height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path
                                                                d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0"
                                                                transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                {{-- <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="compare.html">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="16.47" height="13.088"
                                                    viewBox="0 0 15.47 11.088">
                                                    <g transform="translate(0 -72.508)">
                                                        <path data-name="Path 114"
                                                            d="M15.359,80.9l-2.011-2.011a.525.525,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49l1.106,1.106H10.576L8.3,78.052l2.273-2.274h1.618l-1.106,1.106a.287.287,0,0,0,.2.49h1.683a.531.531,0,0,0,.374-.155l2.011-2.011a.38.38,0,0,0,0-.535l-.859-.859a.227.227,0,1,0-.32.321l.806.806L13.027,76.9a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542h-2.04a.227.227,0,0,0-.16.066l-2.34,2.34-.544-.544,2.519-2.519a.382.382,0,0,1,.272-.112h2.293a.317.317,0,0,0,.225-.542l-1.054-1.054h1.282a.076.076,0,0,1,.053.022l.4.4a.227.227,0,1,0,.32-.321l-.4-.4a.531.531,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49L12.194,74.1H10.229a.832.832,0,0,0-.592.245L7.118,76.867,4.6,74.349a.832.832,0,0,0-.592-.245H.378A.378.378,0,0,0,0,74.481v.92a.378.378,0,0,0,.378.378H3.66l2.273,2.274L3.66,80.326H.378A.378.378,0,0,0,0,80.7v.92A.378.378,0,0,0,.378,82H4.007a.835.835,0,0,0,.592-.245l2.519-2.519.8.8a.227.227,0,1,0,.32-.32L3.914,75.392a.227.227,0,0,0-.16-.066H.453v-.769H4.007a.382.382,0,0,1,.272.113l6.043,6.043a.227.227,0,0,0,.16.066h2.04a.317.317,0,0,0,.224-.542l-1.054-1.054h1.282a.075.075,0,0,1,.053.022l1.958,1.958-1.958,1.958a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542H10.229a.383.383,0,0,1-.272-.113l-.968-.968a.227.227,0,0,0-.32.32l.968.968a.833.833,0,0,0,.592.245h1.965l-1.105,1.105a.287.287,0,0,0,.2.49h1.683a.525.525,0,0,0,.374-.155l2.011-2.011A.379.379,0,0,0,15.359,80.9Zm-11.08.539a.389.389,0,0,1-.272.113H.453v-.769h3.3a.226.226,0,0,0,.16-.066l2.34-2.34.543.544Z"
                                                            transform="translate(0 0)" fill="currentColor" />
                                                    </g>
                                                </svg>
                                                <span class="visually-hidden">Compare</span>
                                            </a>
                                        </li> --}}
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">

                                            <h3 class="product__items--content__title h4"><a
                                                    href="/detail">{{ $item->nama_barang }}</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">Rp. {{ $item->price }}</span>
                                                <span class="old__price">Rp.
                                                    {{ $item->price + 500000 }}</span>
                                            </div>
                                            <a class="product__items--action__cart--btn primary__btn btn__style3"
                                                href="cart.html">
                                                <svg class="product__items--action__cart--btn__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565"
                                                    viewBox="0 0 18.897 21.565">
                                                    <path
                                                        d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z"
                                                        transform="translate(-2.667 -1.366)" fill="currentColor">
                                                    </path>
                                                </svg>
                                                <span class="add__to--cart__text"> Add to cart</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @else
            <p class="text-center fs-4">No Post Found</p>
        @endif
        <!-- End product section -->





    </main>

    <!-- Start footer section -->
    @include('dashboardFurea.layouts.footer')
    <!-- End footer section -->



    <!-- Scroll top bar -->
    <button class="color-scheme-3" aria-label="scroll top btn" id="scroll__top"><svg
            xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>

    <!-- All Script JS Plugins here  -->
    <script src="{{ asset('Afurea') }}/assets/js/vendor/popper.js" defer="defer"></script>
    <script src="{{ asset('Afurea') }}/assets/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="{{ asset('Afurea') }}/assets/js/plugins/swiper-bundle.min.js" defer="defer"></script>
    <script src="{{ asset('Afurea') }}/assets/js/plugins/glightbox.min.js" defer="defer"></script>

    <!-- Customscript js -->
    <script src="{{ asset('Afurea') }}/assets/js/script.js" defer="defer"></script>

</body>

</html>

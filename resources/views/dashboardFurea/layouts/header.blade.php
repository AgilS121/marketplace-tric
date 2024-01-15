<!-- Start header area -->
<div class="main__header main__header--style3 header__sticky">
    <div class="container">
        <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
            <div class="offcanvas__header--menu__open ">
                <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                        viewBox="0 0 512 512">
                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                            stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                    </svg>
                    <span class="visually-hidden">Offcanvas Menu Open</span>
                </a>
            </div>
            <div class="main__logo">
                <h1 class="main__logo--title"><a class="main__logo--link" href="/">
                        @if (Auth::check())
                            @if ($pp->store_logo)
                                <img class="main__logo--img" width="150px"
                                    src="{{ asset('storage/public/images/' . $pp->store_logo) }}" alt="logo-img"
                                    style="height: 100px">
                            @else
                                <img class="main__logo--img" width="150px" src="{{ asset('img/LogoTRIC.png') }}"
                                    alt="default-logo-img">
                            @endif
                        @else
                            <img class="main__logo--img" width="150px" src="{{ asset('img/LogoTRIC.png') }}"
                                alt="default-logo-img">
                        @endif


                    </a></h1>
            </div>
            <div class="header__menu d-none d-lg-block">
                <nav class="header__menu--navigation style3">
                    <ul class="d-flex justify-content-center">
                        <li class="header__menu--items style3">
                            <a class="header__menu--link style3" href="/">Home <span
                                    class="menu__plus--icon"></span></a>
                        </li>
                        <li class="header__menu--items mega__menu--items style3">
                            <a class="header__menu--link style3" href="/shopfurea">Shop <span
                                    class="menu__plus--icon"></span></a>

                        </li>
                        <li class="header__menu--items style3">
                            <a class="header__menu--link style3" href="/about">About US </a>
                        </li>

                        <li class="header__menu--items style3">
                            <a class="header__menu--link style3" href="/contact">Contact </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__account">
                <ul class="d-flex">
                    <li class="header__account--items  header__account--search__items">
                        <a class="header__account--btn search__open--btn" href="javascript:void(0)">
                            <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="26.51"
                                height="23.443" viewBox="0 0 512 512">
                                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                    fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                    stroke-width="32" d="M338.29 338.29L448 448" />
                            </svg>
                            <span class="visually-hidden">Search</span>
                        </a>
                    </li>
                    {{-- <li class="header__account--items">
                            <a class="header__account--btn" href="/myaccount">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="26.51" height="23.443" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                <span class="visually-hidden">My Account</span>
                            </a>
                        </li> --}}
                    <li class="header__account--items">
                        <a class="header__account--btn" href="/wishlist">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24.526" height="21.82"
                                viewBox="0 0 24.526 21.82">
                                <path
                                    d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0"
                                    transform="translate(0 0)" fill="currentColor" />
                            </svg>
                            <span class="items__count wishlist_count">02</span>
                        </a>
                    </li>
                    <li class="header__account--items">
                        <a class="header__account--btn minicart__open--btn" href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.897" height="21.565"
                                viewBox="0 0 18.897 21.565">
                                <path
                                    d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z"
                                    transform="translate(-2.667 -1.366)" fill="currentColor" />
                            </svg>
                            <span class="items__count">02</span>
                        </a>
                    </li>
                </ul>
            </div>
            <li class="header__menu--items style3">
                @auth
                    <a class="header__menu--link style3" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 512 512">
                            <path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" />
                            <path
                                d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                        </svg>
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="header__sub--menu">
                        <li class="header__sub--menu__items">{{ Auth::user()->name }}</li>
                        <li class="header__sub--menu__items"></li>
                        <li class="header__sub--menu__items"></li>

                        {{-- <a href="/regispenjual" class="btn btn-primary btn-block mb-2">Daftar Penjual</a> --}}
                        <br>
                        @if (Auth::check())
                            @if (isset($pp))
                                {{-- Jika ada user_id di tabel profile_penjual, tampilkan halaman penjual --}}
                                <a href="/dashboard" class="btn btn-primary btn-block mb-2">Go To Dashboard Seller</a>
                                <br>
                                <a href="/myaccount" class="btn btn-success btn-block mb-2">My Account</a>
                            @else
                                {{-- Jika tidak ada user_id di tabel profile_penjual, tampilkan tautan untuk mendaftar sebagai penjual --}}
                                <a href="/regispenjual" class="btn btn-primary btn-block mb-2">Daftar Penjual</a>
                            @endif
                        @else
                            <img class="main__logo--img" width="150px" src="{{ asset('img/LogoTRIC.png') }}"
                                alt="default-logo-img">
                        @endif

                        <br>
                        <form method="POST" action="/logout">

                            @csrf


                            <button class="btn btn-danger btn-block mb-2"" id="logout" type="submit">Logout</button>
                        </form>
                    </ul>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ 'title' === 'Login' ? 'active' : '' }}""><i
                            class="bi bi-box-arrow-in-right"></i>
                        Login</a>
                </li>

            @endauth
            </li>
        </div>
    </div>
</div>

<!-- Start offCanvas minicart -->
<div class="offCanvas__minicart color-scheme-3" tabindex="-1">
    <div class="minicart__header ">
        <div class="minicart__header--top d-flex justify-content-between align-items-center">
            <h3 class="minicart__title"> Shopping Cart</h3>
            <button class="minicart__close--btn" aria-label="minicart close btn">
                <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                </svg>
            </button>
        </div>
        <p class="minicart__header--desc">The organic foods products are limited</p>
    </div>
    <div class="minicart__product">
        <div class="minicart__product--items d-flex">
            <div class="minicart__thumbnail">
                <a href="product-details.html"><img src="{{ asset('Afurea') }}/assets/img/product/product1.webp"
                        alt="prduct-img"></a>
            </div>
            <div class="minicart__text">
                <h4 class="minicart__subtitle"><a href="product-details.html">The is Garden Vegetable.</a></h4>
                <span class="color__variant"><b>Color:</b> Beige</span>
                <div class="minicart__price">
                    <span class="current__price">$125.00</span>
                    <span class="old__price">$140.00</span>
                </div>
                <div class="minicart__text--footer d-flex align-items-center">
                    <div class="quantity__box minicart__quantity">
                        <button type="button" class="quantity__value decrease" aria-label="quantity value"
                            value="Decrease Value">-</button>
                        <label>
                            <input type="number" class="quantity__number" value="1" />
                        </label>
                        <button type="button" class="quantity__value increase" aria-label="quantity value"
                            value="Increase Value">+</button>
                    </div>
                    <button class="minicart__product--remove" aria-label="minicart remove btn">Remove</button>
                </div>
            </div>
        </div>
        <div class="minicart__product--items d-flex">
            <div class="minicart__thumbnail">
                <a href="product-details.html"><img src="{{ asset('Afurea') }}/assets/img/product/product2.webp"
                        alt="prduct-img"></a>
            </div>
            <div class="minicart__text">
                <h4 class="minicart__subtitle"><a href="product-details.html">Fresh Tomatoe is organic.</a></h4>
                <span class="color__variant"><b>Color:</b> Green</span>
                <div class="minicart__price">
                    <span class="current__price">$115.00</span>
                    <span class="old__price">$130.00</span>
                </div>
                <div class="minicart__text--footer d-flex align-items-center">
                    <div class="quantity__box minicart__quantity">
                        <button type="button" class="quantity__value decrease" aria-label="quantity value"
                            value="Decrease Value">-</button>
                        <label>
                            <input type="number" class="quantity__number" value="1" />
                        </label>
                        <button type="button" class="quantity__value increase" aria-label="quantity value"
                            value="Increase Value">+</button>
                    </div>
                    <button class="minicart__product--remove" aria-label="minicart remove btn">Remove</button>
                </div>
            </div>
        </div>
    </div>
    <div class="minicart__amount">
        <div class="minicart__amount_list d-flex justify-content-between">
            <span>Sub Total:</span>
            <span><b>$240.00</b></span>
        </div>
        <div class="minicart__amount_list d-flex justify-content-between">
            <span>Total:</span>
            <span><b>$240.00</b></span>
        </div>
    </div>
    <div class="minicart__conditions text-center">
        <input class="minicart__conditions--input" id="accept" type="checkbox">
        <label class="minicart__conditions--label" for="accept">I agree with the <a
                class="minicart__conditions--link" href="privacy-policy.html">Privacy And Policy</a></label>
    </div>
    <div class="minicart__button d-flex justify-content-center">
        <a class="primary__btn minicart__button--link btn__style3" href="cart.html">View cart</a>
        <a class="primary__btn minicart__button--link btn__style3" href="checkout.html">Checkout</a>
    </div>
</div>
<!-- End offCanvas minicart -->

<!-- Start serch box area -->
<div class="predictive__search--box color-scheme-3" tabindex="-1">
    <div class="predictive__search--box__inner">
        <h2 class="predictive__search--title">Search Products</h2>
        <form class="predictive__search--form" action="#">
            <label>
                <input class="predictive__search--input" placeholder="Search Here" type="text">
            </label>
            <button class="predictive__search--button" aria-label="search button"><svg
                    class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="30.51"
                    height="25.443" viewBox="0 0 512 512">
                    <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                        stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                        stroke-width="32" d="M338.29 338.29L448 448" />
                </svg> </button>
        </form>
    </div>
    <button class="predictive__search--close__btn" aria-label="search close btn">
        <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
            height="30.443" viewBox="0 0 512 512">
            <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="32" d="M368 368L144 144M368 144L144 368" />
        </svg>
    </button>
</div>
<!-- End serch box area -->

<!-- End header area -->

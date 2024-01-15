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
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="{{ asset('Afurea') }}/assets/css/vendor/bootstrap.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('Afurea') }}/assets/css/style.css">

</head>

<body>

    <!-- Start header area -->
    <header class="header__section header__others border-bottom header__transparent mb-30">

        @include('dashboardFurea.layouts.header')
    </header>
    <!-- End header area -->

    <main class="main__content_wrapper">

        <!-- my account section start -->
        <section class="my__account--section section--padding">
            <div class="container">
                <div class="my__account--section__inner border-radius-10 d-flex">
                    @include('dashboardFurea.posts.sidebaraccount')
                    <div class="account__wrapper">
                        <div class="account__content">
                            <h3 class="account__content--title mb-20">My Profile</h3>

                            @if (Auth::Check())
                                <div class="account__details two">
                                    @if (Auth::User()->image)
                                        <div class="account__details--footer d-flex">

                                            <img class="main__logo--img" width="150px"
                                                src="{{ asset('storage/public/images/' . Auth::User()->image) }}"
                                                alt="logo-img" style="height: 100px">

                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    Edit Image
                                                </a>
                                            </li>
                                        </div>
                                    @else
                                        <div class="account__details--footer d-flex">

                                            <img class="main__logo--img" width="150px"
                                                src="{{ asset('storage/images/default.jpg') }}" alt="default-logo-img">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    Edit Image
                                                </a>
                                            </li>
                                        </div>
                                    @endif
                                    <h4 class="account__details--title">{{ Auth::User()->name }}</h4>
                                    <p class="account__details--desc">{{ Auth::User()->email }}
                                    </p>

                                </div>
                            @else
                                <div class="account__details two">
                                    No Data
                                </div>
                            @endif
                        </div>
                    </div>
                </div>


        </section>
        <!-- my account section end -->

    </main>
    <div class="modal" id="modal1" data-animation="slideInUp">
        <div class="modal-dialog quickview__main--wrapper">
            <header class="modal-header quickview__header">
                <button class="close-modal quickview__close--btn" aria-label="close modal" data-close>✕ </button>
            </header>
            <div class="quickview__inner">
                <div class="">

                    <div class="quickview__info">
                        <form action="/updateProfile" method="POST" id="editformprofile" enctype="multipart/form-data">
                            @csrf
                            <h2 class="product__details--info__title mb-15">Edit Your Profile</h2>
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <label for="image" class="product__details--info__title mb-15">Image</label>
                                <input type="file" class="form-control product__details--info__title mb-15"
                                    id="editimage" name="image">
                            </div>
                            <div class="product__variant">
                                <div class="quickview__variant--list quantity d-flex align-items-center mb-15">
                                    <button class="primary__btn quickview__cart--btn" type="submit">Save</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start footer section -->
    @include('dashboardFurea.layouts.footer')
    <!-- End footer section -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>




    <!-- All Script JS Plugins here  -->
    <script src="{{ asset('Afurea') }}/assets/js/vendor/popper.js" defer="defer"></script>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


    <!-- Bootstrap JS -->
    <script src="{{ asset('Afurea') }}/assets/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="{{ asset('Afurea') }}/assets/js/plugins/swiper-bundle.min.js" defer="defer"></script>
    <script src="{{ asset('Afurea') }}/assets/js/plugins/glightbox.min.js" defer="defer"></script>

    <!-- Customscript js -->
    <script src="{{ asset('Afurea') }}/assets/js/script.js" defer="defer"></script>

</body>

</html>

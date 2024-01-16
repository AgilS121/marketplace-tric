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
                @if (Auth::Check())
                    <p class="account__welcome--text">Hello, {{ Auth::User()->name }} welcome to your dashboard!</p>
                @endif
                <div class="my__account--section__inner border-radius-10 d-flex">

                    @include('dashboardFurea.posts.sidebaraccount')

                    <div class="account__wrapper">
                        <div class="account__content">
                            <h3 class="account__content--title mb-20">Orders History</h3>
                            <div class="account__table--area">
                                <table class="account__table">
                                    <thead class="account__table--header">
                                        <tr class="account__table--header__child">
                                            <th class="account__table--header__child--items">Order</th>
                                            <th class="account__table--header__child--items">Date</th>
                                            <th class="account__table--header__child--items">Payment Status</th>
                                            <th class="account__table--header__child--items">Fulfillment Status</th>
                                            <th class="account__table--header__child--items">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="account__table--body mobile__none">
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#2014</td>
                                            <td class="account__table--body__child--items">November 24, 2022</td>
                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">Unfulfilled</td>
                                            <td class="account__table--body__child--items">$40.00 USD</td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#2024</td>
                                            <td class="account__table--body__child--items">November 24, 2022</td>
                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">Fulfilled</td>
                                            <td class="account__table--body__child--items">$44.00 USD</td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#2164</td>
                                            <td class="account__table--body__child--items">November 24, 2022</td>
                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">Unfulfilled</td>
                                            <td class="account__table--body__child--items">$36.00 USD</td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#2345</td>
                                            <td class="account__table--body__child--items">November 24, 2022</td>
                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">Unfulfilled</td>
                                            <td class="account__table--body__child--items">$87.00 USD</td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#1244</td>
                                            <td class="account__table--body__child--items">November 24, 2022</td>
                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">Fulfilled</td>
                                            <td class="account__table--body__child--items">$66.00 USD</td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#3455</td>
                                            <td class="account__table--body__child--items">November 24, 2022</td>
                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">Fulfilled</td>
                                            <td class="account__table--body__child--items">$55.00 USD</td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">#4566</td>
                                            <td class="account__table--body__child--items">November 24, 2022</td>
                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">Unfulfilled</td>
                                            <td class="account__table--body__child--items">$87.00 USD</td>
                                        </tr>
                                    </tbody>
                                    <tbody class="account__table--body mobile__block">
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>November 24, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>November 24, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>November 24, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>November 24, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>November 24, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>November 24, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>November 24, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- my account section end -->

    </main>

    <!-- Start footer section -->
    @include('dashboardFurea.layouts.footer')
    <!-- End footer section -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
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

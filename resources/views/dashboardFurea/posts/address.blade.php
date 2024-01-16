<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Furea - My Account</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Afurea') }}/assets/img/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                            <h3 class="account__content--title mb-20">Addresses</h3>
                            <button class="new__address--btn primary__btn mb-25" type="button" data-open="modal1"
                                href="javascript:void(0)">Add a new
                                address</button>

                            <div id="userAddress">


                            </div>

                        </div>
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
                        <form id="createProfileForm">
                            @csrf
                            <h2 class="product__details--info__title mb-15"> Your Address</h2>
                            <div class="form-group">
                                <label for="full_name" class="product__details--info__desc mb-15">Full Name</label>
                                <input type="text" class="form-control product__details--info__desc mb-15"
                                    id="full_name" name="full_name">
                            </div>
                            <div class="form-group">
                                <label for="description" class="product__details--info__desc mb-15">Description</label>
                                <textarea type="text" class="form-control product__details--info__desc mb-15" id="description" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="address" class="product__details--info__desc mb-15">Address</label>
                                <textarea type="text" class="form-control product__details--info__desc mb-15" id="address" name="address"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="product__details--info__desc mb-15">Phone</label>
                                <input type="text" class="form-control product__details--info__desc mb-15"
                                    id="phone" name="phone">
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <script src="{{ asset('Afurea') }}/assets/js/vendor/popper.js" defer="defer"></script>
    <script src="{{ asset('Afurea') }}/assets/js/vendor/bootstrap.min.js" defer="defer"></script>
    <!-- ... other scripts ... -->

    <script src="{{ asset('Afurea') }}/assets/js/plugins/swiper-bundle.min.js" defer="defer"></script>
    <script src="{{ asset('Afurea') }}/assets/js/plugins/glightbox.min.js" defer="defer"></script>

    <!-- Customscript js -->
    <script src="{{ asset('Afurea') }}/assets/js/script.js" defer="defer"></script>

    <script>
        $(document).ready(function() {
            console.log("test");
            $.ajax({
                url: 'ambilprofilewhereid',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Perbarui elemen HTML dengan data alamat yang diterima
                    var userAddressHtml = '';
                    console.log(response);

                    if (response.length === 0) {
                        // Jika data kosong, tambahkan pesan default
                        userAddressHtml += '<p class="account__details--desc">No address available</p>';
                    } else {
                        // Iterate through each profile in the response
                        response.forEach(function(userProfile) {
                            // Tampilkan data alamat untuk setiap profil
                            userAddressHtml += '<div class="d-flex">';
                            userAddressHtml += '<div class="account__details two">';
                            userAddressHtml += '<h4 class="account__details--title">' +
                                userProfile.full_name + '</h4>';
                            userAddressHtml += '<p class="account__details--desc">' +
                                userProfile.description + '<br>' +
                                userProfile.address + '<br>' + userProfile.phone + '</p>';
                            userAddressHtml += '</div>';
                            userAddressHtml += '<div class="account__details--footer d-flex">';
                            // Tambahkan tombol Edit dan Hapus dengan menyertakan data-product-id
                            userAddressHtml +=
                                '<button class="account__details--footer__btn btn-edit"  type="button" data-product-id="' +
                                userProfile.id + '">Edit</button>';
                            userAddressHtml +=
                                '<button class="account__details--footer__btn btn-delete"    type="button" data-product-id="' +
                                userProfile.id + '">Delete</button>';

                            userAddressHtml += '</div>';
                            userAddressHtml += '</div>';
                        });
                    }

                    // Update View Addresses link based on the count of profiles
                    var viewAddressesLink =
                        '<a class="account__details--link" href="">View Addresses (' +
                        response.length + ')</a>';
                    $('#userAddress').html(userAddressHtml + viewAddressesLink);

                },
                error: function(error) {
                    // Tangani kesalahan jika ada
                    console.error('Error:', error);
                }
            });


            $('#userAddress').on('click', '.btn-edit', function() {
                var dataId = $(this).data('product-id');
                console.log('Clicked Edit Button for ID:', dataId);

                $.ajax({
                    url: 'getProfileById/' + dataId,
                    method: 'GET',
                    dataType: 'json',
                    success: function(product) {
                        console.log('Edit Profile Data:', product);

                        // Populate the edit modal with product details
                        $('#editProductId').val(product.id);
                        $('#editfull_name').val(product.full_name);
                        $('#editdescription').val(product.description);
                        $('#editaddress').val(product.address);
                        $('#editphone').val(product.phone);

                        // Show the edit form next to the existing address
                        var editFormHtml = '';

                        editFormHtml += '<div class="account__details--footer d-flex">';
                        // Add the edit form next to the existing address
                        editFormHtml +=
                            '<form id="editProfileForm" class="edit-profile-form" style="margin-left: 20px;">';
                        editFormHtml +=
                            '<input type="hidden" id="editProductId" name="id" value="' +
                            product.id + '">';
                        editFormHtml +=
                            '<div class="form-group"><label for="full_name" class="product__details--info__desc mb-15"  >Full Name</label>';
                        editFormHtml +=
                            '<input type="text" class="form-control product__details--info__desc mb-15" id="editfull_name" name="full_name" value="' +
                            product.full_name + '">';
                        editFormHtml += '</div>';

                        editFormHtml +=
                            '<div class="form-group"><label for="description" class="product__details--info__desc mb-15">Description</label>';
                        editFormHtml +=
                            '<textarea type="text" class="form-control product__details--info__desc mb-15" id="editdescription" name="description">' +
                            product.description + '</textarea>';
                        editFormHtml += '</div>';

                        editFormHtml +=
                            '<div class="form-group"><label for="address" class="product__details--info__desc mb-15">Address</label>';
                        editFormHtml +=
                            '<textarea type="text" class="form-control product__details--info__desc mb-15" id="editaddress" name="address">' +
                            product.address + '</textarea>';
                        editFormHtml += '</div>';

                        editFormHtml +=
                            '<div class="form-group"><label for="phone" class="product__details--info__desc mb-15">Phone Number</label>';
                        editFormHtml +=
                            '<input type="text" class="form-control product__details--info__desc mb-15" id="editphone" name="phone" value="' +
                            product.phone + '">';
                        editFormHtml += '</div>';
                        // ... (add other form fields as needed)
                        editFormHtml +=
                            '<div class="quickview__variant--list quantity d-flex align-items-center mb-15">';
                        editFormHtml +=
                            '<button class="primary__btn quickview__cart--btn" type="submit">Save</button>';
                        editFormHtml += '</div>';
                        editFormHtml += '</form>';
                        editFormHtml += '</div>';
                        editFormHtml += '</div>';

                        // Replace the existing address with the edit form
                        $('#userAddress').html(editFormHtml);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            });


            $('#editProfileForm').submit(function(e) {
                e.preventDefault();

                // Get the edited product details from the form
                var editProfileData = new FormData(this);

                // Tambahkan CSRF token ke FormData
                editProfileData.append('_token', $('meta[name="csrf-token"]').attr('content'));

                // Assuming you have an API endpoint to update the product
                $.ajax({
                    url: 'updateProfile', // Adjust the endpoint accordingly
                    method: 'POST',
                    data: editProfileData,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    cache: false,
                    success: function(response) {
                        // Tanggapan dari server ketika berhasil
                        console.log(response);
                        if (response.message === 'Profile updated successfully') {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                // Tambahkan logika di sini setelah pengguna menekan OK
                                setTimeout(function() {
                                    // Use window.location to redirect after successful update
                                    window.location.reload();
                                }, 1000);
                            });
                        } else {
                            // Handle other response cases if needed
                        }
                    },
                    error: function(error) {
                        // Handle error
                        console.error('Error:', error.responseJSON);
                    }
                });
            });

        });

        $('#createProfileForm').submit(function(e) {
            e.preventDefault(); // Hindari pengiriman form default

            // Ambil data dari form
            var formData = new FormData(this);
            console.log(formData);

            // Tambahkan CSRF token ke FormData
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

            // Kirim permintaan AJAX
            $.ajax({
                url: 'addprofil', // Sesuaikan dengan endpoint Anda
                type: 'POST',
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                cache: false,
                success: function(response) {
                    // Tanggapan dari server ketika berhasil
                    console.log(response);
                    if (response.message === 'Product created successfully') {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            setTimeout(function() {
                                location.reload();
                            }, 1000);

                        });
                    } else {
                        // Tambahkan logika jika respons tidak sesuai dengan yang diharapkan
                    }
                    // Lakukan tindakan sesuai keberhasilan, seperti menampilkan pesan atau memperbarui tampilan
                },
                error: function(error) {
                    // Tanggapan dari server jika terjadi kesalahan
                    console.log(error.responseJSON);
                    // Lakukan tindakan sesuai kegagalan, seperti menampilkan pesan error
                }

            });

        });






        $('#userAddress').on('click', '.btn-delete', function() {
            var profileIdToDelete = $(this).data('product-id');
            $('#confirmDeleteBtn').data('product-id', profileIdToDelete);
            $('#deleteModal').modal('show');
        });


        $('#confirmDeleteBtn').on('click', function() {
            var productIdToDelete = $(this).data('product-id');

            // Perform Ajax request to delete the product
            $.ajax({
                url: '/deleteProfile/' + productIdToDelete,
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    if (response.message === 'Product deleted successfully') {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            setTimeout(function() {
                                location.reload();
                            }, 1000);

                        });
                    };
                },
                error: function(err) {
                    console.error('Failed to delete product:', err);

                    // Close the delete confirmation modal
                    $('#deleteModal').modal('hide');
                }
            });
        });
    </script>
</body>

</html>

@extends('dashboard.layouts.app')

@section('content')
    <div class="container">

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Konfigurasi Umum </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form id="editForm">
                                    <!-- Include input fields for editing  details -->
                                    <input type="hidden" id="editId" name="id">

                                    <div class="form-group">
                                        <label for="storeName">Store Name</label>
                                        <input type="text" class="form-control" id="editstoreName" name="store_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="storeDescription">Store Description</label>
                                        <textarea class="form-control" id="storeDescription" name="store_description"></textarea>
                                    </div>


                                    <div class="form-group">
                                        <label for="storeAddress">Store Address</label>
                                        <input type="text" class="form-control" id="editstoreAddress"
                                            name="store_address">
                                    </div>
                                    <div class="form-group">
                                        <label for="storephone">Store Phone</label>
                                        <input class="form-control" id="editstorephone" name="store_phone_number" />
                                    </div>

                                    <!-- Add more input fields for other product details -->

                                    <button type="submit" class="btn btn-success">Save Changes</button>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
    </div>

    </div>
    <!-- Jangan lupa sertakan jQuery atau library JavaScript serupa -->

    <script>
        $(document).ready(function() {
            // Panggil fungsi untuk mengambil data penjual saat halaman dimuat

            var id = {{ Auth::user()->id }};
            console.log(id);

            $.ajax({
                url: "/ambildatabyid",
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Cek apakah respons memiliki data yang sesuai
                    console.log(response);
                    if (response) {
                        // Isi input fields dengan data yang diterima
                        $('#editId').val(response.id);
                        $('#editstoreName').val(response.store_name);
                        $('#storeDescription').val(response.store_description);
                        $('#editstoreAddress').val(response.store_address);
                        $('#editstorephone').val(response.store_phone_number);
                    } else {
                        console.error('Data tidak ditemukan');
                    }
                },
                error: function(error) {
                    console.error('Error:', error);

                    // Console log URL pada error
                    console.log('URL:', error.request.responseURL);
                }
            });
            $('#editForm').submit(function(e) {
                e.preventDefault();

                // Get the edited product details from the form

                var editedProductData = new FormData(this);

                // Tambahkan CSRF token ke FormData
                editedProductData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                // Submit form saat tombol 'Save Changes' ditekan
                $.ajax({
                    url: 'updatePenjual', // Adjust the endpoint accordingly
                    method: 'POST',
                    data: editedProductData,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    cache: false,
                    success: function(response) {
                        // Tanggapan dari server ketika berhasil
                        console.log(response);
                        if (response.message === 'Product updated successfully') {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                // Tambahkan logika di sini setelah pengguna menekan OK
                                setTimeout(function() {
                                    location.reload();
                                }, 1000);

                            });
                        };
                    },
                    error: function(error) {
                        // Handle error
                        console.error('Error:', error.responseJSON);
                    }
                });
            });
        });
    </script>
@endsection

@extends('dashboard.layouts.app')

@section('content')
    <div class="container">

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Konfigurasi Logo </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form id="editForm">
                                    <!-- Include input fields for editing details -->
                                    <input type="hidden" id="editId" name="id">

                                    <!-- Tampilkan gambar saat ini -->
                                    <div class="form-group">
                                        <label for="existingImage">Current Image</label>
                                        <img id="existingImage" class="img-fluid mb-2" alt="Current Image">
                                    </div>

                                    <div class="form-group">
                                        <label for="storeLogo">Store Logo</label>
                                        <input type="file" class="form-control" id="editstoreLogo" name="store_logo">
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

                        // Tampilkan gambar yang sudah ada
                        if (response.store_logo) {
                            $('#existingImage').attr('src', 'storage/public/images/' + response
                                .store_logo);
                        }
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
                    url: 'updateLogoPenjual', // Sesuaikan dengan endpoint yang benar
                    method: 'POST',
                    data: editedProductData,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    cache: false,
                    success: function(response) {
                        // Tanggapan dari server ketika berhasil
                        console.log(response);
                        if (response.message === 'Data updated successfully') {
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
                        }
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

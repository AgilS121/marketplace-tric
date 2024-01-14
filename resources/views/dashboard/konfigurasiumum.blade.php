@extends('dashboard.layouts.app')

@section('content')
    <div class="container">

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Konfigurasi Umum</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <button type="button" class="btn btn-success my-2 addpr" data-toggle="modal"
                                    data-target="#addProductModal"><i class="fas fa-plus"></i> Add Product</button>




                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                    </tbody>

                                    <tfoot>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Action</th>

                                    </tfoot>
                                </table>
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

    <!-- Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form untuk menambahkan produk -->
                    <form id="createProductForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Price</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>
                        <!-- Input untuk upload gambar -->
                        <div class="form-group">
                            <label for="productImage">Image</label>
                            <input type="file" class="form-control-file" id="productImage" name="image">
                        </div>
                        <div class="form-group">
                            <label for="categoryID">Category</label>
                            <select class="form-control" id="categoryID" name="category_id">
                                <!-- Add options dynamically based on your categories -->
                                <option value="1">Choose Category</option>
                                <option value="2">Category 2</option>
                                <option value="3">Category 3</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userID">User ID</label>
                            <input type="text" class="form-control" id="userID" name="user_id">
                        </div>
                        <!-- <div class="form-group">
                                                <label for="productImage">Image</label>
                                                <input type="text" class="form-control" id="productImage" name="productImage">
                                            </div> -->
                        <div class="form-group">
                            <label for="productSlug">Slug</label>
                            <input type="text" class="form-control" id="productSlug" name="slug">
                        </div>
                        <div class="form-group">
                            <label for="productBody">Body</label>
                            <textarea class="form-control" id="productBody" name="body"></textarea>
                        </div>
                        <!-- <div class="form-group">
                                                <label for="productPublishedAt">Published At</label>
                                                <input type="text" class="form-control" id="productPublishedAt" name="productPublishedAt">
                                            </div> -->
                        <!-- More input fields for created_at and updated_at if needed -->

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Product Modal -->
    <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form for editing the product -->
                    <form id="editProductForm">
                        <!-- Include input fields for editing product details -->
                        <input type="hidden" id="editProductId" name="id">

                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" class="form-control" id="editProductName" name="nama_barang">
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Price</label>
                            <input type="text" class="form-control" id="editProductPrice" name="price">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <label for="categoryUbahID">Category</label>
                            <select class="form-control" id="categoryUbahID" name="category_id">
                                <!-- Add options dynamically based on your categories -->
                                <option value="1">Choose Category</option>

                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userID">User ID</label>
                            <input type="text" class="form-control" id="editProductUserId" name="user_id">
                        </div>
                        <!-- <div class="form-group">
                                                <label for="productImage">Image</label>
                                                <input type="text" class="form-control" id="productImage" name="productImage">
                                            </div> -->
                        <div class="form-group">
                            <label for="productSlug">Slug</label>
                            <input type="text" class="form-control" id="editProductSlug" name="slug">
                        </div>
                        <div class="form-group">
                            <label for="productBody">Body</label>
                            <textarea class="form-control" id="editProductBody" name="body"></textarea>
                        </div>

                        <!-- Add more input fields for other product details -->

                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal hapus -->
    <!-- Modal Konfirmasi Hapus -->
    <div class="modal" id="deleteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Hapus Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus produk ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var dataTable = $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                columnDefs: [{
                    targets: 4, // Assuming the buttons are in the 5th column (index 4)
                    className: 'text-center', // Apply the 'text-center' class to the column
                }, ],
            });
            //ambilbarang
            $.ajax({
                url: 'adminproduct/ambilbarang', // Ganti dengan URL yang sesuai dengan struktur rute Anda
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    dataTable.clear();

                    // Add new rows from the AJAX response
                    $.each(response, function(index, product) {
                        dataTable.row.add([
                            product.id,
                            product.nama_barang,
                            product.price,
                            product.category_name,
                            '<img src="/storage/public/images/' + product.image +
                            '" alt="Product Image" style="max-width: 50px; max-height: 50px;">',
                            '<button class="btn btn-warning btn-edit mx-1" data-toggle="modal" data-target="#editProductModal" data-product-id="' +
                            product.id +
                            '"> <i class="fas fa-edit"></i> Edit</button>' +
                            '<button class="btn btn-danger mx-1" data-toggle="modal" data-target="#deleteModal" data-product-id="' +
                            product.id +
                            '"> <i class="fas fa-trash"></i> Delete</button>'
                        ]);
                    });

                    //ambilkategori


                    // Add new rows from the AJAX response
                    $.each(response, function(index, product) {
                        dataTable.row.add([
                            index + 1,
                            product.nama_barang,
                            product.price,
                            product.category_name,
                            '<img src="/storage/public/images/' + product.image +
                            '" alt="Product Image" style="max-width: 50px; max-height: 50px;">',
                            '<button class="btn btn-warning btn-edit mx-1" data-toggle="modal" data-target="#editProductModal" data-product-id="' +
                            product.id +
                            '"> <i class="fas fa-edit"></i> Edit</button>' +
                            '<button class="btn btn-danger mx-1" data-toggle="modal" data-target="#deleteModal" data-product-id="' +
                            product.id +
                            '"> <i class="fas fa-trash"></i> Delete</button>'
                        ]);
                    });


                    // Draw the DataTable to reflect changes
                    dataTable.draw();
                    // Di sini, Anda dapat menampilkan data ke dalam elemen HTML atau melakukan operasi lainnya sesuai kebutuhan
                },
                error: function(error) {
                    // Handle kesalahan jika ada
                    console.error('Error:', error);
                }
            });
        });

        //ambildataketika edit
        // Event handler for Edit button
        $('#tableBody').on('click', '.btn-edit', function() {
            console.log("oke");
            var productId = $(this).data('product-id');
            console.log('Edit product with ID:', productId);



            // Assuming you have an API endpoint to get product details by ID
            $.ajax({
                url: 'adminproduct/getProductById/' + productId,
                method: 'GET',
                dataType: 'json',
                success: function(product) {
                    console.log(product);
                    // Populate the edit modal with product details

                    $('#editProductId').val(product.id);
                    $('#editProductName').val(product.nama_barang);
                    // $('#editProductCategory').val(product.category_id);
                    var productId = product.category_id;
                    $.ajax({
                        url: "{{ url('/getcategory') }}",
                        method: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            var categorySelect = $('#categoryUbahID');
                            console.log(categorySelect);

                            // Bersihkan opsi yang sudah ada (jika ada)
                            categorySelect.empty();
                            categorySelect.append(`<option> Choose Category </option>`);

                            // Tambahkan opsi dari respons
                            $.each(response, function(index, category) {
                                var option = '<option value="' + category.id + '"';

                                // Tentukan kategori yang dipilih (selected) berdasarkan ID produk
                                if (productId === category.id) {
                                    option += ' selected';
                                }

                                option += '>' + category.name + '</option>';
                                categorySelect.append(option);
                            });
                        },
                        error: function(error) {
                            console.error('Error:', error);
                        }
                    });
                    $('#editProductPrice').val(product.price);
                    $('#editProductUserId').val(product.user_id);
                    $('#editProductSlug').val(product.slug);
                    $('#editProductBody').val(product.body);

                    // Populate other input fields with product details

                    // Show the edit modal
                    // $('#editProductModal').modal('show');
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        });



        //simpan data
        $('#createProductForm').submit(function(e) {
            e.preventDefault(); // Hindari pengiriman form default

            // Ambil data dari form
            var formData = new FormData(this);

            // Tambahkan CSRF token ke FormData
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

            // Kirim permintaan AJAX
            $.ajax({
                url: 'adminproduct/store', // Sesuaikan dengan endpoint Anda
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


        //hapus produk
        $('#tableBody').on('click', '.btn-danger', function() {
            console.log("oke");
            var productIdToDelete = $(this).data('product-id');
            console.log(productIdToDelete);

            // Set the product ID in the modal for reference
            $('#confirmDeleteBtn').data('product-id', productIdToDelete);

            // Show the delete confirmation modal
            $('#deleteModal').modal('show');
        });

        // Click event for the Confirm Delete button in the modal
        $('#confirmDeleteBtn').on('click', function() {
            var productIdToDelete = $(this).data('product-id');

            // Perform Ajax request to delete the product
            $.ajax({
                url: 'adminproduct/delete/' + productIdToDelete,
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

        //update data
        $('#editProductForm').submit(function(e) {
            e.preventDefault();

            // Get the edited product details from the form

            var editedProductData = new FormData(this);

            // Tambahkan CSRF token ke FormData
            editedProductData.append('_token', $('meta[name="csrf-token"]').attr('content'));



            // Assuming you have an API endpoint to update the product
            $.ajax({
                url: 'adminproduct/updateProduct', // Adjust the endpoint accordingly
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
    </script>
    <script>
        $(document).ready(function() {

            // Event handler untuk tombol "Add Product"
            $('.addpr').click(function() {
                // Panggil /getcategory
                $.ajax({
                    url: "{{ url('/getcategory') }}",
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // Logika penanganan respons di sini (mungkin memperbarui elemen di modal)
                        console.log(response);
                        var categorySelect = $('#categoryID');

                        // Bersihkan opsi yang sudah ada (jika ada)
                        categorySelect.empty();
                        categorySelect.append(`<option value=""> - Choose Category - </option>`)

                        // Tambahkan opsi dari respons
                        $.each(response, function(index, category) {
                            categorySelect.append('<option value="' + category.id +
                                '">' + category.name + '</option>');
                        });
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });

                // Buka modal "Add Product"
                // $('#addProductModal').modal('show');
            });

            // ... (kode lainnya)
        });
    </script>
@endsection

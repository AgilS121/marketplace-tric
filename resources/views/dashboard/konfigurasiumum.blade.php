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
                                        <input type="text" class="form-control" id="editstoreName" name="nama_barang">
                                    </div>
                                    <div class="form-group">
                                        <label for="storeDescription">Store Description</label>
                                        <textarea class="form-control" id="storeDescription" name="body"></textarea>
                                    </div>


                                    <div class="form-group">
                                        <label for="storeAddress">Store Address</label>
                                        <input type="text" class="form-control" id="editstoreAddress" name="address">
                                    </div>
                                    <div class="form-group">
                                        <label for="storephone">Store Phone</label>
                                        <input class="form-control" id="editstorephone" name="phone" />
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
@endsection

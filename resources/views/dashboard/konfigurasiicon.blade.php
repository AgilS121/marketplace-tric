@extends('dashboard.layouts.app')

@section('content')
    <div class="container">

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Konfigurasi Icon </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form id="editForm">
                                    <!-- Include input fields for editing  details -->
                                    <input type="hidden" id="editId" name="id">

                                    <div class="form-group">
                                        <label for="storeIcon">Store Icon</label>
                                        <input type="file" class="form-control" id="editstoreIcon" name="store_icon">
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

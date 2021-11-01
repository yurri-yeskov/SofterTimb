@extends('layouts.app')

@section('title', 'New product')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Add product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Products</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Product Information
                            </div>
                            <div class="card-body">
                                <form role="form">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Item Name</label>
                                                <input type="email" class="form-control" id=""
                                                       placeholder="Enter email">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">SKU</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Rate</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Account</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Account Code</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div><div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Tax Name</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div><div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Tax Percentage</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div><div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Tax Type</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Product Type</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Source</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Reference ID</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div><div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Last Sync Time</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Usage unit</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Purchase Rate</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Purchase Account</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Purchase Account Code</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Purchase Description</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Inventory Account</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Inventory Account Code</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Reorder Point</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Vendor</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div><div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Initial Stock</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Initial Stock Rate</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Stock On Hand</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Item Type</label>
                                                <input type="text" class="form-control" id=""
                                                       placeholder="">
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; {{Carbon\Carbon::now()->year}} <a
                href="http://adminlte.io">{{ config('app.name', 'Laravel') }}</a>.</strong>
        All rights reserved.
    </footer>

    <!-- ./wrapper -->

    </html>
@endsection

@section('scripts')

@endsection

@extends('layouts.app')

@section('title', 'Products')

@section('styles')

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 align-items-center">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">New Customers</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <create-customer></create-customer>
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

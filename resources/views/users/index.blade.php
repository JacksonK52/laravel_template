@extends('layouts.app')

@section('style')
    {{-- @vite('resources/css/datatable/dataTable.css') --}}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('Users List') }}</div>

                    <div class="card-body">
                        <table id="example1" class="table table-sm table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <td>Name</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <td>{{ $user->name }}</td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- @vite('resources/js/dataTable/dataTable.js') --}}
    {{-- <script src="{{ asset('assets/js/dataTable/dataTable-cust.js') }}"></script> --}}
@endsection
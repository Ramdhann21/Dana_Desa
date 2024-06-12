@extends('layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Penting</h1>
    <a href="{{ route('data.create') }}" class="btn btn-warning mb-2">Tambah Data</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-warning">Data Tables</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <<!DOCTYPE html>
                    <html lang="en">
                    
                    <head>
                        <meta charset="utf-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                        <meta name="description" content="">
                        <meta name="author" content="">
                    
                        <title>Tables</title>
                    
                        <!-- Custom fonts for this template -->
                        <link href="{{ asset('Data/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
                        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
                    
                        <!-- Custom styles for this template -->
                        <link href="{{ asset('Data/css/sb-admin-2.min.css') }}" rel="stylesheet">
                    
                        <!-- Custom styles for this page -->
                        <link href="{{ asset('Data/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
                    </head>
                    
                    <body id="page-top">
                        <!-- Page Wrapper -->
                        <div id="wrapper">
                            <!-- Content Wrapper -->
                            <div id="content-wrapper" class="d-flex flex-column">
                                <!-- Main Content -->
                                <div id="content">
                                    <!-- Begin Page Content -->
                                    <div class="container-fluid">
                                        <!-- Page Heading -->
                                        <h1 class="h3 mb-2 text-gray-800">Data Penting</h1>
                                        <!-- DataTales Example -->
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-warning">Data Tables</h6>
                                            </div>
                                            <div class="card-body">
                                                <a href="{{ route('cetak') }}" target="_blank"><button type="submit" class="btn btn-warning mb-2">Cetak</button></a>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Keperluan</th>
                                                                <th>Tanggal</th>
                                                                <th>Dana Masuk</th>
                                                                <th>Dana Keluar</th>
                                                                <th>Total</th>
                                                                <th>Tujuan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Keperluan</th>
                                                                <th>Tanggal</th>
                                                                <th>Dana Masuk</th>
                                                                <th>Dana Keluar</th>
                                                                <th>Total</th>
                                                                <th>Tujuan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>
                                                            @foreach ($laporans as $item)
                                                                <tr>
                                                                    <td>{{ $item->nama }}</td>
                                                                    <td>{{ $item->keperluan }}</td>
                                                                    <td>{{ $item->tanggal }}</td>
                                                                    <td>{{ $item->dana_masuk }}</td>
                                                                    <td>{{ $item->dana_keluar }}</td>
                                                                    <td>{{ $item->total }}</td>
                                                                    <td>{{ $item->tujuan }}</td>
                                                                    <td>
                                                                        <a href="" class="text-warning">Edit</a> | <a href="" class="text-danger">Delete</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.container-fluid -->
                                </div>
                                <!-- End of Main Content -->
                                <!-- Footer -->
                                <footer class="sticky-footer bg-white">
                                    <div class="container my-auto">
                                        <div class="copyright text-center my-auto">
                                            <span>Copyright &copy; Your Website 2020</span>
                                        </div>
                                    </div>
                                </footer>
                                <!-- End of Footer -->
                            </div>
                            <!-- End of Content Wrapper -->
                        </div>
                        <!-- End of Page Wrapper -->
                    
                        <!-- Scroll to Top Button-->
                        <a class="scroll-to-top rounded" href="#page-top">
                            <i class="fas fa-angle-up"></i>
                        </a>
                    
                        <script src="{{ asset('Data/vendor/jquery/jquery.min.js') }}"></script>
                        <script src="{{ asset('Data/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                        <script src="{{ asset('Data/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
                        <script src="{{ asset('Data/js/sb-admin-2.min.js') }}"></script>
                        <script src="{{ asset('Data/vendor/datatables/jquery.dataTables.min.js') }}"></script>
                        <script src="{{ asset('Data/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
                        <script src="{{ asset('Data/js/demo/datatables-demo.js') }}"></script>
                    </body>
                    
                    </html>
                    thead>
                        <tr>
                            <th>Name</th>
                            <th>Keperluan</th>
                            <th>Tanggal</th>
                            <th>Dana Masuk</th>
                            <th>Dana keluar</th>
                            <th>Total</th>
                            <th>Tujuan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Keperluan</th>
                            <th>Tanggal</th>
                            <th>Dana Masuk</th>
                            <th>Dana keluar</th>
                            <th>Total</th>
                            <th>Tujuan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->keperluan }}</td>
                            <td>{{ $d->tanggal }}</td>
                            <td>{{ $d->dana_masuk }}</td>
                            <td>{{ $d->dana_keluar }}</td>
                            <td>{{ $d->total }}</td>
                            <td>{{ $d->tujuan }}</td>
                            <td>
                                <form action="{{ route('data.destroy', $d->id) }}" method="POST">
                                    <a href="{{ route('data.edit', $d->id) }}" class="btn btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

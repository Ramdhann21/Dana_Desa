<!DOCTYPE html> 
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
                    <h1 class="h3 mb-2 text-gray-800">Data Dana</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        </div>
                        <div class="card-body">
                            <a href="{{ route('cetak') }}" target="_blank"><button type="submit" class="btn btn-warning mb-2">Cetak</button></a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
 <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th width="280px">Action</th>
                    </tr>
                    <tfoot>
                        <tr>
                            <th>Edo</th>
                            <th>30-05-2024</th>
                            <th>200000</th>
                           <th>
                             <a href="class" class="text-warning">Edit</a>|<a href="class" class="text-danger">Delete</a>
                           </th>
                            </tr>
                    @foreach ($danas as $dana)
                    <tr>
                        <td>{{ $dana->nama }}</td>
                        <td>{{ $dana->tanggal }}</td>
                        <td>{{ $dana->total }}</td>
                        
                            <form action="{{ route('danas.destroy',$dana->id) }}" method="POST">
            
                                <a class="btn btn-primary" href="{{ route('danas.edit',$dana->id) }}">Edit</a>
            
                                @csrf
                                @method('DELETE')
            @endforeach
                               
                            </form>
                        </td>
                    </tr>
                 
                </table> 
            </div>
            <div class="pull-right">
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

   
</div>


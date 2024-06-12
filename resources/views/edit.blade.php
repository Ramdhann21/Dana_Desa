@extends('layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Data</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('/tabel', $laporans->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $laporans->name }}" required>
                </div>
                <div class="form-group">
                    <label for="keperluan">Keperluan:</label>
                    <input type="text" class="form-control" id="keperluan" name="keperluan" value="{{ $laporans->keperluan }}" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $laporans->tanggal }}" required>
                </div>
                <div class="form-group">
                    <label for="dana_masuk">Dana Masuk:</label>
                    <input type="number" class="form-control" id="dana_masuk" name="dana_masuk" value="{{ $laporans->dana_masuk }}" required>
                </div>
                <div class="form-group">
                    <label for="dana_keluar">Dana Keluar:</label>
                    <input type="number" class="form-control" id="dana_keluar" name="dana_keluar" value="{{ $laporans->dana_keluar }}" required>
                </div>
                <div class="form-group">
                    <label for="total">Total:</label>
                    <input type="number" class="form-control" id="total" name="total" value="{{ $laporans->total }}" required>
                </div>
                <div class="form-group">
                    <label for="tujuan">Tujuan:</label>
                    <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{ $laporans->tujuan }}" required>
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection

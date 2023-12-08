@extends('user.main')
@section('content')
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Pembayaran</h1>
        </div>
    </div>
</header>
<form action='{{url('driver')}}' method='post'  enctype="multipart/form-data">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm my-3 mx-5">
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{Session::get('nama')}}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Tahun</label>
            <div class="col-sm-10">
                <input type="year" class="form-control" name='tahun' value="{{Session::get('nik')}}" id="tahun">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Plat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='plat' value="{{Session::get('tanggal')}}" id="plat">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='harga' value="{{Session::get('Harga')}}" id="harga">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Merek</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='merek' value="{{Session::get('Merek')}}" id="merek">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jumlah kursi</label>
            <div class="col-sm-10">
                <input type="integer" class="form-control" name='jumlah_kursi' value="{{Session::get('Jumlah_kursi')}}" id="jumlah_kursi">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="foto" class="form-label">Foto</label>
            <img class="img-preview img-fluid">
            <div class="col-sm-10">
                <input type="file" class="form-control" name='image'  id="image" onchange="previewImage()">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>    
</form>
@endsection
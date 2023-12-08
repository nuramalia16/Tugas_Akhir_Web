@extends('layouts.navadmin')
@section('konten')

<!-- START FORM -->
<form action='{{url('driver')}}' method='post'  enctype="multipart/form-data">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{Session::get('Nama')}}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
                <input type="year" class="form-control" name='gender' value="{{Session::get('Gender')}}" id="gender">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='umur' value="{{Session::get('Umur')}}" id="umur">
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
        
    </form>
    </div>
    <!-- AKHIR FORM -->
@endsection

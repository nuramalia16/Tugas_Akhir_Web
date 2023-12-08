@extends('layouts.navadmin')
@section('konten')
<!-- START FORM -->
<form action= '{{url('car/'.$data->Plat)}}' method='post'  enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="my-3 p-3 bg-body rounded shadow-sm my-3 mx-5">
        <a href="{{url('car')}}" class="btn btn-secondary">Kembali</a>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{$data->Nama}}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Tahun</label>
            <div class="col-sm-10">
                <input type="year" class="form-control" name='tahun' value="{{$data->Tahun}}" id="tahun">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Plat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='plat' value=" {{$data->Plat}}" id="plat"> 
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='harga' value=" {{$data->Harga}}" id="harga"> 
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Merek</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='merek' value=" {{$data->Merek}}" id="merek"> 
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jumlah Kursi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jumlah_kursi' value=" {{$data->Jumlah_Kursi}}" id="jumlah_kursi"> 
            </div>
        </div>
        <div class="mb-3 row">
            <label for="foto" class="form-label">Foto</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name='image' value="{{$data->Gambar}}"  id="image">
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

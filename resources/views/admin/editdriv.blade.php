@extends('layouts.navadmin')
@section('konten')

<form action="{{ url('driver/'.$data->id) }}" method='post'  enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{url('driver')}}" class="btn btn-secondary">Kembali</a>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{$data->Nama}}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
                <input type="year" class="form-control" name='gender' value="{{$data->Gender}}" id="gender">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='umur' value=" {{$data->Umur}}" id="umur"> 
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
@endsection

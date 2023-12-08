@extends('layouts.navadmin')
@section('konten')
<!-- START DATA -->

    <div class="my-3 p-3 bg-body rounded shadow-sm my-3 mx-5">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
        <form class="d-flex" action="" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
        </div>
        
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
        <a href="{{route('driver.create')}}" class="btn btn-primary"  style="width: 150px">+ Tambah Data</a>
        </div>
        <div class="pb-3">
            <a href="{{ route('admin') }}" class="btn btn-secondary" style="width: 150px">Kembali</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-1">Nama</th>
                    <th class="col-md-3">Gender</th>
                    <th class="col-md-4">Umur</th>
                    <th class="col-md-2">Gambar</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->Nama}}</td>
                    <td>{{$item->Gender}}</td>
                    <td>{{$item->Umur}}</td>
                    <td><img src="{{asset('storage/' .$item->Gambar)}} " style="width: 150px;" ></td>
                    <td>
                        <a href='{{ route('driver.edit', $item->id) }}' class="btn btn-warning btn-sm" style="width: 50px; margin-bottom: 5px;">Edit</a>
                        <form action="{{ url('driver/'.$item->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" style="width: 50px; margin-bottom: 5px;" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>     
                @endforeach
            </tbody>
        </table>   
</div>
<!-- AKHIR DATA -->

@endsection
    
@extends('layouts.navadmin')
    @section('konten')
    <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm my-3 mx-5 ">
            <!-- FORM PENCARIAN -->
            <div class="pb-3">
            <form class="d-flex" action="{{ route('car.index') }}" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
            </div>
            
            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
            <a href="{{route('car.create')}}" class="btn btn-primary" style="width: 150px">+ Tambah Data</a>
            </div>
            <div class="pb-3">
                <a href="{{ route('admin') }}" class="btn btn-secondary" style="width: 150px">Kembali</a>
            </div>
    
            <table class="table table-bordered table-striped mx-auto"  >
                <thead>
                    <tr>
                        <th class="col-md-1">Nama</th>
                        <th class="col-md-3">Tahun</th>
                        <th class="col-md-4">Plat</th>
                        <th class="col-md-2">Harga</th>
                        <th class="col-md-2">Merek</th>
                        <th class="col-md-2">Jumlah Kursi</th>
                        <th class="col-md-2">Gambar</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->Nama}}</td>
                    <td>{{$item->Tahun}}</td>
                    <td>{{$item->Plat}}</td>
                    <td>{{$item->Harga}}</td>
                    <td>{{$item->Merek}}</td>
                    <td>{{$item->Jumlah_Kursi}}</td>
                    <td><img src="{{asset('storage/' .$item->Gambar)}} " style="width: 150px;" ></td>
                    <td>
                        <a href='{{ route('car.edit', $item->Plat) }}' class="btn btn-warning btn-sm" style="width: 50px; margin-bottom: 5px;">Edit</a>
                        <form action="{{ route('car.destroy', $item->Plat) }}" method="post" style="display:inline;">
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
        
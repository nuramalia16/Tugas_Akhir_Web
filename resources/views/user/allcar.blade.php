@extends('user.main')

@section('content')
    <style>
        .custom-card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; 
            justify-content: center; 
        }

        .custom-card {
            width: 18rem;
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            
        }

        .custom-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

    <div class="custom-card-container" >
        @foreach($car as $c)
            <div class="card mt-3 custom-card ">
                <img src="{{ asset('storage/' . $c->Gambar) }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $c->Nama }}</h5>
                    <p class="card-text">{{ $c->Plat }}</p>
                    <p class="card-text">{{ $c->Harga }}</p>
                    <p class="card-text">{{ $c->Merek }}</p>
                    <p class="card-text">{{ $c->Jumlah_Kursi }}</p>
                    <a href="#" class="btn btn-primary" style="background-color: #3D0C11; color: #fff;">Sewa</a>

                </div>
            </div>
        @endforeach
    </div>
@endsection



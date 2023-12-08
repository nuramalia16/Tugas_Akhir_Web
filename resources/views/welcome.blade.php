@extends('layouts.navbar')

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
            height: auto;
            object-fit: cover;
        }
    </style>
      <div class="jumbotron text-center">
        <h1 class="display-4">Selamat Datang di Rental Mobil</h1>
        <p class="lead">Temukan Mobil Impian Anda dan Nikmati Perjalanan dengan Kenyamanan.</p>
        </div>

    
    <div class="custom-card-container">
        @foreach($car as $c)
            <div class="card mt-3 custom-card">
                <img src="{{ asset('storage/' . $c->Gambar) }}" class="card-img-top" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $c->Nama }}</h5>
                    <p class="card-text">{{ $c->Harga }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection






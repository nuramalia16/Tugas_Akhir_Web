{{-- @extends('user.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as user!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
{{-- @extends('template.navbar') --}}
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
            height: auto;
            object-fit: cover;
        }
    </style>
    <div class="jumbotron text-center">
        <h1 class="display-4">Selamat Datang di Rental Mobil</h1>
        <p class="lead">Temukan Mobil Impian Anda dan Nikmati Perjalanan Dengan Kenyamanan.</p>
    </div>

    <div class="custom-card-container">
        @foreach($car as $d)
            <div class="card mt-3 custom-card">
                <img src="{{ asset('storage/' . $d->Gambar) }}" class="card-img-top" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $d->Nama }}</h5>
                    <p class="card-text">{{ $d->Harga }}</p>
                    <a href="#" style="background-color:#3D0C11;;" class="btn btn-primary">Sewa</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection




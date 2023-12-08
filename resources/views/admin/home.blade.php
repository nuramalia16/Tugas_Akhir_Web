@extends('admin.main')

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

    <div class="custom-card-container">
        @foreach($cars as $car)
            <div class="card mt-3 custom-card">
                <img src="{{ asset('storage/' . $car->Gambar) }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $car->Nama }}</h5>
                    <p class="card-text">{{ $car->Harga }}</p>
                    <a href="#" class="btn btn-primary">Sewa</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection






    
 
  
       


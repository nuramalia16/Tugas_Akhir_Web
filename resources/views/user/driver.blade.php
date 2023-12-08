{{-- @extends('template.navbar')
@section('konten')
    @foreach($home as $car)
    <div class="card mt-3" style="width: 18rem;">
        <img src="{{asset('storage/' .$car->Gambar)}}" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">{{$car->Nama}}</h5>
            <p class="card-text">{{$car->Harga}}</p>
            <a href="#" class="btn btn-primary">Sewa</a>
        </div>
    </div>
    @endforeach
@endsection  --}}

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

    <div class="custom-card-container" >
        @foreach($drivers as $d)
            <div class="card mt-3 custom-card " >
                <img src="{{ asset('storage/' . $d->Gambar) }}" class="card-img-top" alt="" style="max-width: 300px; max-height: 300px;" >
                <div class="card-body">
                    <h5 class="card-title">{{ $d->Nama }}</h5>
                    <p class="card-text">{{ $d->Gender }}</p>
                    <p class="card-text">{{ $d->Umur }}</p>
                    <a href="#" class="btn btn-primary" style="background-color: #3D0C11; color: #fff;">Sewa</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection






    
 
  
       


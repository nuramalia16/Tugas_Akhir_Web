<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Mobil</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">   
<style>
    
.nav-item.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown-menu {
    display: none;
}

</style>
</head>

<body  style="background-color:#FFEED9 ;">

    <header class="bg-dark pt-3 pb-3">
        <div class="container px-4 px-lg-5 my-4">
            <div class="text-center text-white">
                <h1 class="display-5 fw-bolder">Rental Mobil</h1>
                <p class="lead fw-normal text-white-50 mb-0">
                    Mudah dan Cepat
                </p>
            </div>
        </div>
    </header>
    
    <div class="content mt-5">
        @include('komponen.pesan')
        @yield('konten')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/app.css">
</body>

</html>


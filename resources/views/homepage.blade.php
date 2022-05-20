@extends('templates.main')

@section('css')
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/homepage.css">
@endsection

@section('content')
<div class="container-fluid bg-home">
<nav class="navbar navbar-expand-lg  bg-transparent ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="/img/RaihAsa.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item about">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item login">
            <a href="" style="text-decoration: none; color: white">
            <button class="nav-link disabled">Login</button>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="home text-center">
    <h1>Informasi Seputar 
       <br> Lomba dan Beasiswa
    </h1>
    <p>Media yang menyediakan informasi beasiswa dan kompetisi yang Anda butuhkan. Selain itu, kami adalah media penyedia teman untuk mengikuti kompetisi</p>
  </div>
</div>

<div class="container-fluid">
    <h1 class="text-center">Pilih informasi yang ingin dikunjungi</h1>
    <div class="row justify-content-around">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Beasiswa</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lomba</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
</div>
@endsection
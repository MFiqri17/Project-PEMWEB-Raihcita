@extends('templates.main')

@section('css')
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/navbar.css">
<link rel="stylesheet" href="/css/homepage.css">
<link rel="stylesheet" href="/css/footer.css">
@endsection

@section('content')
<div class="container-fluid bg-home">
@include('components.navbar')


  <div class="home text-center row d-flex justify-content-center">
    <h1 class="col-12">Informasi Seputar 
       <br> Lomba dan Beasiswa
    </h1>
    <p class="col-5">Media yang menyediakan informasi beasiswa dan kompetisi yang Anda butuhkan. Selain itu, kami adalah media penyedia teman untuk mengikuti kompetisi</p>
  </div>
</div>

<div class="container-fluid bg-black">
    <h1 class="text-center">Pilih informasi yang ingin dikunjungi</h1>
    <div class="row choise justify-content-center">
        <div class="col-md-2 ">
            <div class="card beasiswa">
                <div class="card-body text-center">
                   
                    <a href="#" class="btn btn-primary">Beasiswa</a>
                </div>
            </div>
        </div>
        <div class="col-md-2 ">
            <div class="card lomba">
                <div class="card-body text-center">
                   
                    <a href="#" class="btn btn-primary">Lomba</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row service px-0">
      <h2>Apa yang kami <span>sediakan?</span></h2>
      <h3>Apa yang kami sediakan?</h3>

      <div class="row">
        <div class="col">
          <img src="/img/info beasiswa.png" alt="">
        </div>
        <div class="col">
          <img src="/img/reminder.png" alt="">
        </div>
      </div>
    </div>

   @include('components.footer')
</div>



@endsection
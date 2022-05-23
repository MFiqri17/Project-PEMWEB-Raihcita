@extends('templates.main')

@section('css')
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/navbar.css">
<link rel="stylesheet" href="/css/homepage.css">
<link rel="stylesheet" href="/css/footer.css">
@endsection

@section('js')
<script type="text/javascript">
  $(window).scroll(function () {
      if ($(window).scrollTop() >= 50) {
          $('.navbar').css('background', '#000000');
      }
      else {
          $('.navbar').css('background', 'transparent');
      }
  });
</script>
@endsection

@section('content')
<div class="container-fluid bg-home">
@include('components.navbar')


  <div class="home text-center row d-flex justify-content-center">
    <h1 data-aos="fade-up" 
    data-aos-duration="3000" class="col-12">Informasi Seputar 
       <br> Lomba dan Beasiswa
    </h1>
    <p data-aos="fade-up" data-aos-duration="2000" class="col-5">Media yang menyediakan informasi beasiswa dan kompetisi yang Anda butuhkan. Selain itu, kami adalah media penyedia teman untuk mengikuti kompetisi</p>
  </div>
</div>

<div class="container-fluid bg-black">
    <h1 data-aos="fade-right" data-aos-duration="3000" class="text-center">Pilih informasi yang ingin dikunjungi</h1>
    <div class="row choise justify-content-center">
        <div class="col-md-2 ">
            <div data-aos-duration="2000" data-aos="flip-right" class="card beasiswa">
                <div class="card-body text-center">
                   
                    <a href="/beasiswa" class="btn btn-primary">Beasiswa</a>
                </div>
            </div>
        </div>
        <div class="col-md-2 ">
            <div data-aos-duration="2000" data-aos="flip-left" class="card lomba">
                <div class="card-body text-center">
                   
                    <a href="/lomba" class="btn btn-primary">Lomba</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row service px-0">
      <h2 data-aos="fade-left" data-aos-duration="3000">Apa yang kami <span>sediakan?</span></h2>
      <h3 data-aos="fade-right" data-aos-duration="3000">Apa yang kami sediakan?</h3>

      <div class="row">
        <div class="col" >
          <img data-aos="fade-up" 
          data-aos-duration="2000" src="/img/info beasiswa.png" alt="">
        </div>
        <div class="col" >
          <img data-aos="fade-up" 
          data-aos-duration="4000" src="/img/reminder.png" alt="">
        </div>
      </div>
    </div>

   
</div>

@include('components.footer')



@endsection
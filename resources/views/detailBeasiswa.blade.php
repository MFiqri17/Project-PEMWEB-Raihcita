@extends('templates.main')

@section('css')
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/navbar.css">
<link rel="stylesheet" href="/css/navbarwithBorder.css">
<link rel="stylesheet" href="/css/detailBeasiswa.css">
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
<div class="container-fluid bg-detail">
 @include('components.navbar')

 <div class="container ">
 <div class="row justify-content-center">
     <div class="col-3">
        <div class="pic">
            <img  data-aos="fade-right" data-aos-duration="2000" style="width:292.79px; height:478.53px;" src="{{ asset('storage/' . $beasiswa->image) }}" alt="">
        </div>
        <div  data-aos="fade-up" data-aos-duration="2000" class="organizer text-center">
            <p>Penyelenggara:</p>
            <p>{{$beasiswa->organizer}}</p>
        </div>
     </div>  
     <div  data-aos="fade-left" data-aos-duration="2000" class="ms-4 detail col-6 text-white">
         <div class="header">
            <h1>{{$beasiswa->name}}</h1>
            <h2>Tanggal Pendaftaran: {{date('d F y', strtotime($beasiswa->startDate))}} - {{date('d F y', strtotime($beasiswa->endDate))}}</h2>
        </div>

        <div class="desc">
            <h3>{{$beasiswa->description}}.</h3>
        </div>

        <div class="req">
            <p>Syarat</p>
            <ul class="ms-3">
                @foreach(explode(',',$beasiswa->requirement) as $req)
                    <li>{{ $req }}</li>
                @endforeach
            </ul>
        </div>
        
        <a class="px-5 py-3" href="{{$beasiswa->link}}">Daftar</a>





     </div>


 </div>


</div>
</div>



 

@endsection
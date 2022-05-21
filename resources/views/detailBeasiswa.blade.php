@extends('templates.main')

@section('css')
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/navbar.css">
<link rel="stylesheet" href="/css/navbarwithBorder.css">
<link rel="stylesheet" href="/css/detailBeasiswa.css">
<link rel="stylesheet" href="/css/footer.css">
@endsection

@section('content')
<div class="container-fluid bg-detail">
 @include('components.navbar')

 <div class="container ">
 <div class="row justify-content-center">
     <div class="col-3">
        <div class="pic">
            <img style="width:292.79px; height:478.53px;" src="/img/test.png" alt="">
        </div>
        <div class="organizer text-center">
            <p>Penyelenggara:</p>
            <p>{{$beasiswa->organizer}}</p>
        </div>
     </div>  
     <div class="ms-4 detail col-6 text-white">
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
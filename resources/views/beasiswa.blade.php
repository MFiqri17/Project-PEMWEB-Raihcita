@extends('templates.main')

@section('css')
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/navbar.css">
<link rel="stylesheet" href="/css/navbarwithBorder.css">
<link rel="stylesheet" href="/css/beasiswa.css">
<link rel="stylesheet" href="/css/footer.css">
@endsection

@section('content')
<div class="container-fluid bg-beasiswa">
 @include('components.navbar')

 <div class="container px-5">
 <div class="row">
     <div class="col-5">
        <div class="search ">
            <div class="input-group mb-3">
              <form action="/beasiswa">
                <input type="text" value="{{request('search')}}" class="form-control" name="search" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
              </form>
            </div>
        
         </div>
     </div>  
 </div>


</div>
<div class="row justify-content-between">
  @if(count($beasiswa) > 0)
    @foreach ($beasiswa as $beasiswa)
     <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <img style="width:222.42px; height:290.58px" src="{{ asset('storage/' . $beasiswa->image) }}" alt="">
            <span class="d-block mt-1">Pendaftaran {{date('d F y', strtotime($beasiswa->startDate))}} - {{date('d F y', strtotime($beasiswa->endDate))}}</span>
            <h5 class="card-title mt-3">{{$beasiswa->name}}</h5>
            <p class="card-text">{{$beasiswa->description}}</p>
            <a href="{{route('detailBeasiswa', $beasiswa->id)}}" class="btn btn-primary">Selengkapnya</a>
          </div>
        </div> 
      </div>   

    @endforeach
  @else
  <p class="text-center text-white">Not found</p>
  @endif
</div>

  @include('components.footer')
</div>



 

@endsection
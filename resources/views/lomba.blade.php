@extends('templates.main')

@section('css')
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/navbar.css">
<link rel="stylesheet" href="/css/navbarwithBorder.css">
<link rel="stylesheet" href="/css/lomba.css">
<link rel="stylesheet" href="/css/pagination.css">
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
<div class="container-fluid bg-lomba">
 @include('components.navbar')

 <div class="container px-5">
 <div style="padding-top: 143px;" class="row">
     <div class="col-5">
        <div class="search ">
            <div class="input-group mb-3">
              <form action="/lomba">
                <input style="width: 500px;" type="text" value="{{request('search')}}" class="form-control" name="search" placeholder="Cari informasi lomba disini" aria-label="Recipient's username" aria-describedby="basic-addon2">
              </form>
            </div>
        
         </div>
     </div>  
 </div>


</div>

<div  class="row justify-content-between">
  @if(count($lombas) > 0)
    @foreach ($lombas as $lomba)
     <div style="margin-top: 200px;" class="col-sm-4">
        <div data-aos="fade-up" 
        data-aos-duration="2000" class="card" style="border:none">
          <div class="card-body">
            <img style="width:222.42px; height:290.58px" src="{{ asset('storage/' . $lomba->image) }}" alt="">
            <span class="d-block mt-1">Pendaftaran {{date('d F y', strtotime($lomba->startDate))}} - {{date('d F y', strtotime($lomba->endDate))}}</span>
            <h5 class="card-title mt-3">{{$lomba->name}}</h5>
            <p class="card-text">{{$lomba->description}}</p>
            <a  href="{{route('detailLomba', $lomba->id)}}"  class="btn btn-primary ">Selengkapnya</a>
          </div>
        </div> 
      </div>   
    @endforeach
  @else
  <p class="text-center text-white">Not found</p>
  @endif
</div>

{{ $lombas->links('components.pagination') }}

</div>



@include('components.footer')





@endsection
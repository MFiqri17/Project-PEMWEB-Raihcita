@extends('templates.main')

@section('css')
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/navbarwithBorder.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/profile.css">
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
    <div class="container-fluid bg-black">
        @include('components.navbar')
        
        <div class="container px-5 profilesec">
            <h1><span>My</span> Profile</h1>
            <div style="margin-top: 30px; padding: 30px 100px 45px 100px; " class="container">
            <div style="border-top-left-radius:97px; border-top-right-radius:97px; border-bottom-left-radius:5px; border-bottom-right-radius:5px; padding-left: 135px; padding-right: 135px;" class="card">
                <form method="post" action="{{route('updateProfile', $user->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5 file text-center">
                        <img id="img-preview" style="width: 130px;
                        height: 130px; border-radius: 50%; border: 2px solid #B71818; margin-top: 44px;" src="{{ asset('storage/' . $user->image) }}" alt="">
                        <div>
                            <input id='image' type='file' name='image' onchange="loadFile(event)" hidden/>
                            <input  class="text-white mb-2" id='buttonid' type='button'  />
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" value="{{$user->name}}" name="name" class="form-control rounded @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                    <div class="mb-5">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" value="{{$user->email}}" name="email" class="form-control rounded @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp">
                      @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="mb-5">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea type="deskripsi"  name="deskripsi" class="form-control rounded @error('deskripsi') is-invalid @enderror" id="deskripsi">{{$user->deskripsi}}</textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="skill" class="form-label">Skill</label>
                        <input type="skill" value="{{$user->skill}}" name="skill" class="form-control rounded @error('skill') is-invalid @enderror" id="skill">
                        @error('skill')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="pengalaman" class="form-label">Pengalaman</label>
                        <input type="pengalaman" value="{{$user->pengalaman}}" name="pengalaman" class="form-control rounded @error('pengalaman') is-invalid @enderror" id="pengalaman">
                        @error('pengalaman')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="buton d-flex flex-row justify-content-end">
                    <button id="btn-submit" type="submit" class="btn ">Simpan</button>
                    <a href="/homepage" class="ms-5"><button type="button">Cancel</button> </a>
                    </div>
                  </form>
            </div>
        </div>
        </div>


        @include('components.footer')

        <script>
            document.getElementById('buttonid').addEventListener('click', openDialog);

            function openDialog() {
            document.getElementById('image').click();
            }



            let loadFile = function(e) {
                let image = document.getElementById('img-preview');
                image.src = URL.createObjectURL(e.target.files[0]);
            }

            document.getElementById('btn-submit').addEventListener('click', function(e) {
                e.preventDefault();
                Swal.fire(
                'Perubahan Telah Disimpan',
                'Lanjutkan',
                'success'
                );
                setTimeout(() => {
                window.location.href = '/homepage';
                }, 3000); 
                })

    
        </script>

    </div>
@endsection
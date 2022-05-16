@extends('templates.main')

@section('css')
    <link rel="stylesheet" href="/css/signinAndRegister.css">
    <link rel="stylesheet" href="/css/register2.css">
@endsection

@section('content')
    <div class="container-fluid  bg-signin">
        
        <div class="row  bg-white ">
            <form class="px-5 " method="post" action="/register2" enctype="multipart/form-data">
             @csrf
            <div class="row g-3 py-3  d-flex justify-content-center align-items-center">
                <div class="col-2">
                    <label for="image" class="col-form-label">Foto Profil</label>
                </div>
                <div class="col-7">
                    <div class="row file-sec d-flex justify-content-start">
                        <div class="col-2">
                            <img id="img-preview" class="img-fluid round"  alt="">
                        </div>
                        <div class="col-8">
                            <input id='image' type='file' name='image' onchange="loadFile(event)" hidden/>
                            <input class="text-white mb-2" id='buttonid' type='button' value='Upload MB' />
                            <span class="d-block">Ukuran maksimal adalah 1MB. JPG, GIF, or PNG.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 py-3  d-flex justify-content-center align-items-center">
                <div class="col-2">
                    <label for="name" class="col-form-label">Nama Lengkap</label>
                </div>
                <div class="col-7">
                    <input type="text" value="{{$user->name}}" class="form-control" name="name" id="nama" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>
            <div class="row g-3 py-3  d-flex justify-content-center align-items-center">
                <div class="col-2">
                    <label for="email" class="col-form-label">Email</label>
                </div>
                <div class="col-7">
                    <input type="email" value="{{$user->email}}" id="email" name="email" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>
            <div class="row g-3 py-3  d-flex justify-content-center align-items-center">
                <div class="col-2">
                    <label for="deskripsi"  class="col-form-label">Deskripsi</label>
                </div>
                <div class="col-7">
                    <textarea  id="deskripsi" name="deskripsi" class="form-control" aria-describedby="passwordHelpInline"></textarea>
                </div>
            </div>
            <div class="row g-3 py-3  d-flex justify-content-center align-items-center">
                <div class="col-2">
                    <label for="skill" class="col-form-label">Skill</label>
                </div>
                <div class="col-7">
                    <input type="text" id="skill" name="skill" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>
            <div class="row g-3 py-3  d-flex justify-content-center align-items-center">
                <div class="col-2">
                    <label for="pengalaman" class="col-form-label">Pengalaman</label>
                </div>
                <div class="col-7">
                    <input type="text" id="pengalaman" name="pengalaman" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>
            <div class="row g-3 py-3 d-flex justify-content-center">
                <div class="col-2">
                    <label for=""></label>
                </div>
                <div class="col-7 ">
                    <button type="submit" class="btn btn-primary form-control mt-4 p-2">Buat Akun</button>
                </div>
            </div>
        </form>
        </div>
    
        <script>
            document.getElementById('buttonid').addEventListener('click', openDialog);

            function openDialog() {
            document.getElementById('image').click();
            }



            let loadFile = function(e) {
                let image = document.getElementById('img-preview');
                image.src = URL.createObjectURL(e.target.files[0]);
            }
            
        </script>

    </div>
@endsection
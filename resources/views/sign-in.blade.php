@extends('templates.main')

@section('css')
    <link rel="stylesheet" href="/css/signinAndRegister.css">
@endsection

@section('content')
    <div class="container-fluid bg-signin">
        <div class="row d-flex justify-content-center">
            
            <div class="col-4  text-white bg-logo ">
                <img src="/img/logo.png" alt="" width="230">
            </div>
            <div class="col-6 align-self-center  bg-white radius ">
                <h1 class="text-center font-weight-bold">Sign In</h1>
                <form action="{{route('login')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control rounded @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp">
                      @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control rounded @error('password') is-invalid @enderror" id="password">
                      @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <div class="row">
                            <div class="col">
                                <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Biarkan saya tetap masuk</label>
                            </div>
                            <div class="col text-end">
                                <a  href=""><p class="d-inline ms-5">Lupa Password?</p></a>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary form-control mt-4 p-2">Masuk</button>
                  </form>
                  <div>
                    <div class="row footer d-flex justify-content-center">
                        <div class="col-5">
                            <p>Belum punya akun? <span> <a href="/sign-up">Sign Up</a> </span></p>
                        </div>
                        <div class="col-5">
                            <p class="text-end">Login sebagai Admin <span> <a href="/sign-in/admin">Login as Admin</a> </span></p>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <script>
    function myFunction() {
        var x = document.getElementById("*passwordbox-id*");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>
@endsection
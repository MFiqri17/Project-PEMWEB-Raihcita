@extends('templates.main')

@section('css')
    <link rel="stylesheet" href="/css/signinAndRegister.css">
    <link rel="stylesheet" href="/css/register.css">
@endsection

@section('content')
    <div class="container-fluid bg-signin">
        <div class="row d-flex justify-content-center">
            
            <div class="col-4  text-white bg-logo ">
            <div class="align-self-center">
                <img src="/img/logo.png" alt="" width="230">
            </div>
            </div>
            <div class="col-6 align-self-center  bg-white radius ">
                <h1 class="text-center font-weight-bold">Sign UP</h1>
                <form method="post" action="/sign-up" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control rounded @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
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
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control rounded @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
                        @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                    <div class="mb-3 form-check">
                        <div class="row">
                            <div class="col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Biarkan saya tetap masuk</label>
                            </div>
                            <div class="col text-end">
                                <a  href=""><p class="d-inline ms-5">Lupa Password?</p></a>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary form-control mt-4 p-2">Masuk</button>
                  </form>
            </div>
        </div>
    </div>
@endsection
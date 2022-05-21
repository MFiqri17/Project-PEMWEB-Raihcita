<nav class="navbar navbar-expand-lg  bg-transparent ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="/img/RaihAsa.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item about">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img style="border-radius: 50%; width: 69px; height: 69px;" src="{{ asset('storage/' . auth()->user()->image)}}" alt=""> 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
          @else
          <li class="nav-item login">
            <a href="{{route('sign-in')}}" style="text-decoration: none; color: white">
            <button class="nav-link disabled px-4">Login</button>
            </a>
          </li>
          @endauth

        </ul>
      </div>
    </div>
  </nav>
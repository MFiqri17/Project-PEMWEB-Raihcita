<aside class="left-sidebar px-5" data-sidebarbg="skin6" style="overflow-y: hidden">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav row d-flex text-center align-items-center">
            <img src="/img/RaihCita.png" alt="">
            <div class="profile"> 
                <h4>{{auth()->user()->name}}</h4>
                <p>Admin</p>
            </div>
            <div class="buton">
                <a href="/dashboard/beasiswa">
                    <button class="btn {{ Request::is('dashboard/beasiswa*') ? 'active': '' }} ">
                        <img src="/img/cap.png" width="20" style="margin-right: 15px;" /> Beasiswa
                   </button>
                </a>  
                <a class="d-block "  href="/dashboard/lomba">
                    <button style="margin-top: 80px" class="btn {{ Request::is('dashboard/lomba*') ? 'active': '' }}">
                        <img src="/img/cap.png" width="20" style="margin-right: 25px;" /> Lomba
                   </button>
                </a>
            </div>
            <div class="logout">
                <a style="text-decoration: none" class="text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout <span class="ms-3"><img src="/img/sign-out.png" alt=""></span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>
        </nav>
    </div>
</aside>
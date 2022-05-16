@extends('templates.main')

@section('css')
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/themes/dist/css/style.css">
    <link rel="stylesheet" href="/themes/dist/css/style.min.css">
    <link rel="stylesheet" href="/css/dashbord.css">
@endsection

@section('content')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <aside class="left-sidebar px-5" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav row d-flex text-center align-items-center">
                    <img src="/img/RaihCita.png" alt="">
                    <div class="profile"> 
                        <h4>Huda Nugraha</h4>
                        <p>Admin</p>
                    </div>
                    <div class="buton">
                        <a href="">
                            <button class="btn btn-primary">
                                <img src="/img/cap.png" width="20" /> Beasiswa
                           </button>
                        </a>
                        <a class="d-block mt-3" href="">
                            <button class="btn btn-primary">
                                <img src="/img/cap.png" width="20" /> Lomba
                           </button>
                        </a>
                    </div>
                    <div>
                        <p>Logout <span><img src="/img/sign-out.png" alt=""></span></p>
                    </div>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Beasiswa List</h4>
                    </div>
                    <div class="col-7">
                        <div class="text-end upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/xtremeadmin/" class="btn btn-danger text-white"
                                target="_blank">Upgrade to Pro</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Products</th>
                                            <th class="border-top-0">License</th>
                                            <th class="border-top-0">Support Agent</th>
                                            <th class="border-top-0">Technology</th>
                                            <th class="border-top-0">Tickets</th>
                                            <th class="border-top-0">Sales</th>
                                            <th class="border-top-0">Earnings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a
                                                            class="btn btn-circle d-flex btn-info text-white">EA</a>
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Elite Admin</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Single Use</td>
                                            <td>John Doe</td>
                                            <td>
                                                <label class="label label-danger">Angular</label>
                                            </td>
                                            <td>46</td>
                                            <td>356</td>
                                            <td>
                                                <h5 class="m-b-0">$2850.06</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a
                                                            class="btn btn-circle d-flex btn-orange text-white">MA</a>
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Monster Admin</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Single Use</td>
                                            <td>Venessa Fern</td>
                                            <td>
                                                <label class="label label-info">Vue Js</label>
                                            </td>
                                            <td>46</td>
                                            <td>356</td>
                                            <td>
                                                <h5 class="m-b-0">$2850.06</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a
                                                            class="btn btn-circle d-flex btn-success text-white">MP</a>
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Material Pro Admin</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Single Use</td>
                                            <td>John Doe</td>
                                            <td>
                                                <label class="label label-success">Bootstrap</label>
                                            </td>
                                            <td>46</td>
                                            <td>356</td>
                                            <td>
                                                <h5 class="m-b-0">$2850.06</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a
                                                            class="btn btn-circle d-flex btn-purple text-white">AA</a>
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Ample Admin</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Single Use</td>
                                            <td>John Doe</td>
                                            <td>
                                                <label class="label label-purple">React</label>
                                            </td>
                                            <td>46</td>
                                            <td>356</td>
                                            <td>
                                                <h5 class="m-b-0">$2850.06</h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
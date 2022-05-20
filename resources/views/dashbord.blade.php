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
        @include('sidebar')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-end">
                    <div class="col-5">
                        <h4 class="page-title">Beasiswa List</h4>
                    </div>
                    <div class="col-7">
                        <div class="text-end upgrade-btn">
                            <a href="/adminForm" class="btn btn-danger text-white"
                                target="_blank">ADD NEW BEASISWA</a>
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
                                            <th class="border-top-0"></th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Date of Registration</th>
                                            <th class="border-top-0">Organizer</th>
                                            <th class="border-top-0">Link Registration</th>
                                            <th class="border-top-0">Description and Requiretment</th>
                                            <th class="border-top-0"></th>
                                            <th class="border-top-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($beasiswa as $beasiswa)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="mr-3">
                                                        
                                                        <img src="{{ asset('storage/' . $beasiswa->image) }}" alt="">
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$beasiswa->name}}</td>
                                            <td>{{$beasiswa->startDate}}</td>
                                            <td>
                                                {{$beasiswa->organizer}}
                                            </td>
                                            <td>{{$beasiswa->link}}</td>
                                            <td>{{$beasiswa->description}}</td>
                                            <td class="d-flex justify-content-start ">
                                                <div>
                                                    <img src="/img/pen.png" alt="">
                                                </div>
                                                <div class="ms-5">
                                                    <img src="/img/trash.png" alt="">
                                                </div> 
                                            </td>
                                        </tr>
                                        @endforeach
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
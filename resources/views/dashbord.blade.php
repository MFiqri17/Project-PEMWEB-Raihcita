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
                            <a  href="{{route('addBeasiswa')}}" class="btn btn-danger text-white">ADD NEW BEASISWA</a>
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
                                                        
                                                        <img style="width:65px; height:55px" src="{{ asset('storage/' . $beasiswa->image) }}" alt="">
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$beasiswa->name}}</td>
                                            <td class="text-center">{{date('d F y', strtotime($beasiswa->startDate))}} <br> - <br> {{date('d F y', strtotime($beasiswa->endDate))}} </td>
                                            <td>
                                                {{$beasiswa->organizer}}
                                            </td>
                                            <td>{{$beasiswa->link}}</td>
                                            <td>{{$beasiswa->description}} <br> {{$beasiswa->requirement}}</td>
                                            <td>
                                                <div class="d-inline">
                                                    <a href="{{route('updateBeasiswa', $beasiswa->id)}}"><img src="/img/pen.png" alt=""></a>
                                                </div>
                                                   
                                                
                                                <form action="{{route('deleteBeasiswa', $beasiswa->id)}}" method="POST" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" style="border: none !important; background: transparent;" onclick="return confirm('are you sure want to delete {{$beasiswa->name}}')"> <img class="ms-5" src="/img/trash.png" alt=""></button>  
                                                </form>  

 
                                                
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
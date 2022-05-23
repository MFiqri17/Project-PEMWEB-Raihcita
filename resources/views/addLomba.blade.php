@extends('templates.main')

@section('css')
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/themes/dist/css/style.css">
    <link rel="stylesheet" href="/themes/dist/css/style.min.css">
    <link rel="stylesheet" href="/css/dashbord.css">
    <link rel="stylesheet" href="/css/adminForm.css">
@endsection

@section('js')
<script>
    $( function() {
      var dateFormat = "mm/dd/yy",
        from = $( "#from" )
          .datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3
          })
          .on( "change", function() {
            to.datepicker( "option", "minDate", getDate( this ) );
          }),
        to = $( "#to" ).datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          from.datepicker( "option", "maxDate", getDate( this ) );
        });
   
      function getDate( element ) {
        var date;
        try {
          date = $.datepicker.parseDate( dateFormat, element.value );
        } catch( error ) {
          date = null;
        }
   
        return date;
      }
    } );
    </script>
@endsection

@section('content')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        @include('components.sidebar')
        <div class="page-wrapper"> 
            <form action="{{route('StoreaddLomba')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Lomba Name</label>
                  <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="organizer" class="form-label">Lomba Organizer</label>
                  <input type="text" name="organizer" class="form-control" id="organizer">
                </div>
                <div class="mb-3">
                <label for="from" class="form-label">Start Date</label>
                <input  type="text" name="startDate" class="form-control" id="from">
                </div>
                <div class="mb-3">
                <label for="to" class="form-label">End Date</label>
                <input type="text" name="endDate" class="form-control" id="to">
                </div>
                <div class="mb-3">
                <label for="link" class="form-label">Link Registration</label>
                <input type="text" name="link" class="form-control" id="link">
                </div>
                <div class="mb-3">
                <label for="desc" class="form-label">Description </label>
                <textarea type="text" name="description" class="form-control" id="desc"></textarea>
                </div>
                <div class="mb-3">
                  <label for="req" class="form-label">Requirement</label>
                  <textarea type="text" name="requirement" class="form-control" id="req"></textarea>
                </div>
                <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" name="image" class="form-control" id="image">
                </div>
                <div class="text-end">
                <button type="submit" class=" btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        
</div>
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="fh">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>FH - SIJADWAL</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/core-img/logounlam.png')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('styleee.css')}}">

    <!-- DataTables CSS -->
    <link href="{{asset('dt.css')}}" rel="stylesheet">
</head>

<body>

  <div class="wrapper">

    @include('include_guests.navigation')

    <!-- ##### Breadcrumb Area Start ##### -->
    @yield('judulawal')
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    @yield('menupengumuman')
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">

            @yield('content')

            @yield('content2')

            </div>
        </div>
    </div>
    <!-- ##### Archive Post Area End ##### -->

    @include('include_guests.footer')
</div>
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>

<script src="{{asset('jquery.dataTables.min.js')}}"></script>


<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready( function () {
    $('#myTable').DataTable({"autoWidth": false});
} );
</script>

<script>
$(document).ready( function () {
    $('#myTable2').DataTable({"autoWidth": false});
} );
</script>
</body>

</html>

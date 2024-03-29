
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('/backend_asset/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('/backend_asset/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('/backend_asset/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('/backend_asset/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('/backend_asset/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/backend_asset/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('/backend_asset/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('/backend_asset/images/favicon.png')}}" />

   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.inc.navbar')
    @include('admin.inc.rsidebar') 
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
    @include('admin.inc.sidebar') 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('contents')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
@include('admin.inc.footer') 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('/backend_asset/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('/backend_asset/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('/backend_asset/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('/backend_asset/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('/backend_asset/js/off-canvas.js')}}"></script>
  <script src="{{asset('/backend_asset/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('/backend_asset/js/template.js')}}"></script>
  <script src="{{asset('/backend_asset/js/settings.js')}}"></script>
  <script src="{{asset('/backend_asset/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('/backend_asset/js/dashboard.js')}}"></script>
  <script src="{{asset('/backend_asset/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
       
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 <script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
</body>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CalmUI Premium Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('calmui/calmui/template/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('calmui/calmui/template/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{asset('calmui/calmui/template/vendors/css/vendor.bundle.addons.css')}}">

  <link rel="stylesheet" href="{{asset('calmui/calmui/template/css/horizontal-layout/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('calmui/calmui/template/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
              
            </ul>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('calmui/calmui/template/images/logo-white.svg')}}" alt="logo"/></a>
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('calmui/calmui/template/images/logo-mini.svg')}}" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
              
            </ul>
          </div>
        </div>
      </nav>
      
    </div>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
       
       <div class="content-wrapper">

          @include('Daniel.inc.messages')
       @yield('content')
        </div>

        <footer class="footer">
          <div class="w-100 clearfix">
           
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('calmui/calmui/template/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('calmui/calmui/template/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('calmui/calmui/template/js/off-canvas.js')}}"></script>
  <script src="{{asset('calmui/calmui/template/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('calmui/calmui/template/js/template.js')}}"></script>
  <script src="{{asset('calmui/calmui/template/js/settings.js')}}"></script>
  <script src="{{asset('calmui/calmui/template/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('calmui/calmui/template/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/calmui/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Nov 2018 10:26:56 GMT -->
</html>


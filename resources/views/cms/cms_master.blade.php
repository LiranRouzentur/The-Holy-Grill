<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script>
    var BASE_URL = "{{url('')}}/"
  </script>
  <title>THG | Admin Panel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- Custom fonts for this template-->
  <link href="{{asset ('cms_lib/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


  <!-- Custom styles for this template-->
  <link href="{{asset ('cms_lib/css/sb-admin-2.min.css?v='. time())}}" rel="stylesheet">
  <link href="{{asset ('cms_lib/css/sb-admin-2.css?v='. time())}}" rel="stylesheet">



</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center " href="{{url('cms/dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-tools"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin Panel </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider ">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{url('cms/dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          Dashboard</a>
      </li>
      <li class="nav-item active  ml-1">
        <a class="nav-link" href="{{url('cms/menu')}}">
          <i class="fas fa-bars"></i>
          Menu</a>
      </li>
      <li class="nav-item active  ml-1">
        <a class="nav-link" href="{{url('cms/content')}}">
          <i class="fab fa-creative-commons-share"></i>
          Content</a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link" href="{{url('cms/categories')}}">
          <i class="fas fa-sitemap"></i>
          Categories</a>
      </li>
      <li class="nav-item active  ml-1">
        <a class="nav-link" href="{{url('cms/products')}}">
          <i class="far fa-square"></i>
          Products</a>
      </li>
      <li class="nav-item active  ml-1">
        <a class="nav-link" href="{{url('cms/orders')}}">
          <i class="fas fa-luggage-cart"></i>
          Orders</a>
      </li>
      <hr class="sidebar-divider ">
      <li class="nav-item active  ml-1">
        <a target="_blank" class="nav-link" href="{{url('')}}">
          <i class="fas fa-undo"></i>
          Back To Site</a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0 mt-5" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column ">

      <!-- Main Content -->
      <div id="content ">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow ">

          <!-- Sidebar Toggle (Topbar) -->
         

          @yield('cms_header')


          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="mt-1 ">

              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
      </div>
      </li>

      </ul>

      </nav>
      <!-- End of Topbar -->
      <div class="container-fluid">

        @yield('cms_content')


      </div>

      <!-- Footer -->

      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  <footer class="footer-block bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Liran Rouzentur 2019</span>
      </div>
    </div>
  </footer>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->


  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ url('user/logout')}}">Logout</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Core plugin JavaScript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  <!-- Bootstrap core JavaScript-->
  <script src="{{asset ('cms_lib/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


  <!-- Page level plugins -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>




  <!-- Custom scripts for all pages-->
  <script src="{{asset ('../public/cms_lib/js/chart-area-demo.js?v='. time())}}"></script>
  <script src="{{asset ('../public/cms_lib/js/chart-pie-demo.js?v='. time())}}"></script>
  <script src="{{asset ('../public/cms_lib/js/create-charts.js?v='. time())}}"></script>
  <script src="{{asset ('../public/cms_lib/js/sb-admin-2.min.js?v='. time())}}"></script>
  <script src="{{asset ('../public/cms_lib/js/sb-admin-2.js?v='. time())}}"></script>


  @if(Session::has('sm'))
  <script>
    toastr.options.positionClass = 'toast-bottom-full-width';
    toastr.options.progressBar = true;
    // toastr.options.escapeHtml = true;


    toastr.success('', "{{ Session::get('sm')}}");
  </script>
  @endif

</body>

</html>

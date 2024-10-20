<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('assets/vendors/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/css/vendor.bundle.base.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}" />
    <link rel="shortcut icon" href="{{url('assets/images/logoweb.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="brand-logo" href="#">
            <img src="{{url('assets/images/centralogo.svg')}}" alt="logo" height="150" />
          </a>
          <a class="brand-logo-mini pl-4 pt-3" href="#">
            <img src="{{url('assets/images/centralogomini.svg')}}" alt="logo" />
          </a>
        </div>
        <hr>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="assets/images/faces/face1.jpg" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mt-1">Wulan</span>
                <span class="font-weight-normal mt-2">sales</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title mt-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('mobil')}}">
              <i class="mdi mdi-car menu-icon"></i>
              <span class="menu-title mt-1">Mobil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-library-books menu-icon"></i>
              <span class="menu-title">Penjualan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Forms</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-calendar"></i>
                </a>
                <p class="mt-3 col-lg-2"><span id="day"></span></p>
              </li>
              <li class="nav-item dropdown d-none d-sm-flex">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-clock"></i>
                </a>
                <p class="mt-3 col-lg-3"><span id="time"></span></p>
              </li>
              <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="assets/images/faces/face1.jpg" />
                  <span class="profile-name">Wulan</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">
          @yield('content')
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script>
      function updateTime() {
        var now = new Date();
        var year = now.getFullYear();
        var month = String(now.getMonth() + 1).padStart(2, '0');
        var day = String(now.getDate()).padStart(2, '0');
        var hours = String(now.getHours()).padStart(2, '0');
        var minutes = String(now.getMinutes()).padStart(2, '0');
        var seconds = String(now.getSeconds()).padStart(2, '0');

        var formattedTime =  hours + ':' + minutes + ':' + seconds;
        var formattedDay = year + '/' + month + '/' + day ;
        document.getElementById('time').innerText = formattedTime;
        document.getElementById('day').innerText = formattedDay;
      }

      setInterval(updateTime, 1000); // Perbarui setiap 1 detik
      window.onload = updateTime; // Jalankan saat halaman dimuat
    </script>
    <!-- plugins:js -->
    <script src="{{url('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{url('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('assets/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{url('assets/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{url('assets/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{url('assets/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{url('assets/vendors/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{url('assets/vendors/flot/jquery.flot.pie.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{url('assets/js/off-canvas.js')}}"></script>
    <script src="{{url('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{url('assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{url('assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>
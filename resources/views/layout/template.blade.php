<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Jelova Cafe and Resto</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
  <link rel="stylesheet" href="../assets/css/mystyle.css">
  @livewireStyles
  
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
      <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><i class="far fa-bell"></i>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li> -->
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="/uploaded/avatar/{{Auth::user()->avatar}}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hai, {{Auth::user()->name}}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              @can('casir')
                <a href="/tampilprofile" class="dropdown-item has-icon">
                  <i class="far fa-user"></i> Profil
                </a>
              @endcan
              @can('waiter')
                <a href="/tampilprofile" class="dropdown-item has-icon">
                  <i class="far fa-user"></i> Profil
                </a>
              @endcan
              @can('kitchen')
                <a href="/tampilprofile" class="dropdown-item has-icon">
                  <i class="far fa-user"></i> Profil
                </a>
              @endcan
              <div class="dropdown-divider"></div>
              <a href="{{route('keluar')}}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Keluar
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Jelova Cafe and Resto</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">JCR</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Panduan</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Panduan</span></a>
                <ul class="dropdown-menu">
                  @can('casir')
                    <li><a class="nav-link" href="/casir/panduan">Panduan Apps</a></li>
                  @endcan
                  @can('waiter')
                    <li><a class="nav-link" href="/waiters/panduan">Panduan Apps</a></li>
                  @endcan
                  @can('kitchen')
                    <li><a class="nav-link" href="/kitchen/panduan">Panduan Apps</a></li>
                  @endcan
                </ul>
              </li>
              <li class="menu-header">Waiter</li>
              @can('waiter')
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Halaman Waiter</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="/pemesanan/tambah">Pemesanan</a></li>
                  <li><a class="nav-link" href="/pemesanan/status">Status Pemesanan</a></li>
                </ul>
              </li>
              @endcan

              @can('kitchen')
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Halaman Kitchen</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="/kitchen/dashboard">Data Pesanan</a></li>
                  <li><a class="nav-link" href="/kitchen/menumakanan">Menu Makanan</a></li>
                  <li><a class="nav-link" href="/kitchen/menuminuman">Menu Minuman</a></li>
                </ul>
              </li>
              @endcan

              @can('casir')
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Halaman Casir</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="/casir/dashboard">Data Pesanan</a></li>
                  <li><a class="nav-link" href="/casir/worker">Data Pekerja</a></li>
                  <!-- <li><a class="nav-link" href="/casir/riwayatpesanan">Riwayat Pemesanan</a></li> -->
                </ul>
              </li>
              @endcan
            </ul>
        </aside>
      </div>

      @yield('content')

      <footer class="main-footer">
        <div class="footer-left">
          
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/index.js"></script>
  @livewireScripts
  @include('sweetalert::alert')
</body>
</html>

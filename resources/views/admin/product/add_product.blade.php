<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{url('/assets/TemplateAdmin/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{url('/assets/TemplateAdmin/assets/css/components.css')}}">
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
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{url('/assets/TemplateAdmin/assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>

      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{url('/dashboard')}}">Toko Sayur</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('/dashboard')}}">Tk</a>
          </div>
          <ul class="sidebar-menu">
              <li class="nav-item ">
                <a href="{{url('/dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="nav-item active">
                <a href="{{url('/dashboard/product')}}" class="nav-link"><i class="fas fa-cube"></i><span>Produk <i class="nav-arrow fas fa-chevron-right" style=""></i></span></a>
              </li>
              <li class="nav-item ">
                <a href="{{url('/dashboard/category')}}" class="nav-link"><i class="fas fa-th-large"></i><span>Kategori</span></a>
              </li>
              <li class="nav-item ">
                <a href="{{url('/dashboard/transaction')}}" class="nav-link"><i class="fas fa-history"></i><span>Riwayat Transaksi</span></a>
              </li>
              <li class="nav-item ">
                <a href="{{url('/dashboard/user')}}" class="nav-link"><i class="fas fa-user"></i><span>Pengguna</span></a>
              </li>
              </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Tambah Produk</h1>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <form class="needs-validation" novalidate="">
                  <div class="card-header">
                    <h4>Informasi Produk</h4>
                  </div>
                  <div class="card-body">

                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" required="">
                    </div>

                    <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control" required="">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Harga</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            Rp.
                          </div>
                        </div>
                        <input type="text" class="form-control currency" required="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Stok</label>
                      <input type="text" class="form-control" required="">
                    </div>

                    <!-- <div class="form-group">
                      <label>Tanggal Update</label>
                      <input type="date" class="form-control" required="">
                    </div> -->

                    <div class="form-group">
                      <label>Foto</label>
                      <input type="file" class="form-control" required="">
                    </div>
                  </div>
                  <div class="card-footer text-center">
                    <button class="btn btn-primary" style="width: 100%;">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>



        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
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
  <script src="{{url('/assets/TemplateAdmin/assets/js/stisla.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{url('/assets/TemplateAdmin/assets/js/scripts.js')}}"></script>
  <script src="{{url('/assets/TemplateAdmin/assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{url('/assets/TemplateAdmin/js/page/index-0.js')}}"></script>
</body>
</html>

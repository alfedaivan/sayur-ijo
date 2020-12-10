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
              <li class="nav-item dropdown">
                <a href="{{url('/dashboard/category')}}" class="nav-link"><i class="fas fa-th-large"></i><span>Kategori</span></a>
              </li>
              <li class="nav-item dropdown ">
                <a href="{{url('/dashboard/transaction')}}" class="nav-link"><i class="fas fa-history"></i><span>Riwayat Transaksi</span></a>
              </li>
              <li class="nav-item dropdown ">
                <a href="{{url('/dashboard/user')}}" class="nav-link"><i class="fas fa-user"></i><span>Pengguna</span></a>
              </li>
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Produk</h1>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">

                <div class="card-header">
                  <h4>
                    <div class="buttons mt-1">
                      <a href="{{url('/dashboard/product/add')}}" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Tambah Produk</a>
                    </div>
                  </h4>
                  <div class="card-header-form">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Tanggal Update</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>
                          <img alt="image" src="../assets/img/products/product-4-50.png" width="50" data-toggle="tooltip" title="apel">
                        </td>
                        <td>Apel</td>
                        <td>Buah</td>
                        <td>Rp. 10000</td>
                        <td>200 </td>
                        <td>01-01-2021</td>
                        <td>
                          <a href="{{url('/dashboard/product/edit')}}" class="btn btn-icon btn-warning mr-1"><i class="fas fa-edit"></i></a>
                          <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>

                    </table>
                  </div>
                </div>
                <div class="card-footer text-right">
                  <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                      </li>
                    </ul>
                  </nav>
                </div>
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

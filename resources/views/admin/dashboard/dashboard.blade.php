<!DOCTYPE html>
<html lang="en">
@include('admin.head')

<body>
  <div id="app">
  <div class="main-wrapper">
      @include('admin.toolbar')

      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{url('/dashboard')}}">Toko Sayur</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('/dashboard')}}">Tk</a>
          </div>
          <ul class="sidebar-menu">
              <li class="nav-item active">
                <a href="{{url('/dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard <i class="nav-arrow fas fa-chevron-right" style=""></i></span></a>
              </li>
              <li class="nav-item ">
                <a href="{{url('/dashboard/product')}}" class="nav-link"><i class="fas fa-cube"></i><span>Produk </span></a>
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
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary pt-1">
                  <i class="fas fa-cube" style="font-size: 2rem;"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Produk</h4>
                  </div>
                  <div class="card-body">
                    100
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger pt-1">
                  <i class="fas fa-th-large" style="font-size: 2rem;"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Kategori</h4>
                  </div>
                  <div class="card-body">
                    100
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning pt-1">
                  <i class="fas fa-shopping-cart" style="font-size: 2rem;"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Transaksi</h4>
                  </div>
                  <div class="card-body">
                    100
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success pt-1">
                  <i class="fas fa-dollar-sign" style="font-size: 2rem;"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Pendapatan</h4>
                  </div>
                  <div class="card-body">
                    1.000.000
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
      </div>

      @include('admin.footer')
    </div>
  </div>

@include('admin.script')
</body>
</html>

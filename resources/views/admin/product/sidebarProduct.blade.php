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
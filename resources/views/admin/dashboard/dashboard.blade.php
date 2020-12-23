@extends('admin.index')

@section('content')
    @include('admin.dashboard.sidebarDashboard')
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
                            {{$product->count()}}
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
                        {{$category->count()}}
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
                        {{$daftar->count()}}
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
                        {{$keranjang->sum('total_harga')}}
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        </div>
@endsection()

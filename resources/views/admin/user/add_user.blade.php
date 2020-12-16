@extends('admin.index')

@section('content')
        @include('admin.user.sidebarUser')

<!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Tambah Pengguna</h1>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <form class="needs-validation" novalidate="">
                  <div class="card-header">
                    <h4>Informasi Pengguna</h4>
                  </div>
                  <div class="card-body">

                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" required="">
                    </div>

                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" required="">
                    </div>

                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" required="">
                    </div>

                    <!-- <div class="form-group">
                      <label>Tanggal Dibuat</label>
                      <input type="date" class="form-control" required="">
                    </div> -->

                    <!-- <div class="form-group">
                      <label>Tanggal Update</label>
                      <input type="date" class="form-control" required="">
                    </div> -->

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
@endsection()

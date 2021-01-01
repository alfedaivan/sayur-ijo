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
                <form method="post" action="/dashboard/user/addvalidation">
                {{csrf_field()}}
                  <div class="card-header">
                    <h4>Informasi Pengguna</h4>
                  </div>
                  <div class="card-body">

                    <div class="form-group">
                      <label>Nama</label>
                      <input name="name" type="text" class="form-control" required="">
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input name="email" type="text" class="form-control" required="">
                    </div>

                    <div class="form-group">
                      <label>Password</label>
                      <input name="password" type="password" class="form-control" required="">
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
                    <button type="submit" class="btn btn-primary" style="width: 100%;" value="Simpan">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection()

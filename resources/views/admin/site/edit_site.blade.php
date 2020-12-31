@extends('admin.index')

@section('content')
        @include('admin.site.sidebarSite')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Edit Pengaturan</h1>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
              <form method="post" action="/dashboard/settings/editvalidation/{{$site->id}}">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                  <div class="card-header">
                    <h4>Informasi Pengaturan</h4>
                   </div>
                  <div class="card-body">

                    <div class="form-group">
                      <label>Facebook </label>
                      <input type="text" name="facebook" class="form-control" placeholder="facebook" value="{{$site->facebook}}">
                    </div>

                    <div class="form-group">
                      <label>Twitter </label>
                      <input type="text" name="twitter" class="form-control" placeholder="Twitter" value="{{$site->twitter}}">
                    </div>

                    <div class="form-group">
                      <label>Gmail </label>
                      <input type="text" name="email" class="form-control" placeholder="E-mail" value="{{$site->email}}">
                    </div>

                    <div class="form-group">
                      <label>Instagram </label>
                      <input type="text" name="instagram" class="form-control" placeholder="Instagram" value="{{$site->instagram}}">
                    </div>

                    <div class="form-group">
                      <label>Nomor WA</label>
                      <input type="text" name="nomor_wa" class="form-control" placeholder="Nomor WA" value="{{$site->nomor_wa}}">
                    </div>

                    <div class="form-group">
                      <label>Tentang Kami </label>
                      <textarea type="text" name="about" class="form-control" style="height:5%;">{{$site->about}}</textarea>
                    </div>


                    <div class="form-group">
                      <label>Alamat </label>
                      <textarea type="text" name="alamat" class="form-control" style="height:5%;" >{{$site->alamat}}</textarea>
                    </div>

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
        </section>
      </div>
@endsection()

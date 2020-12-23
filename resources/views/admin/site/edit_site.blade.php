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
                <form action="#" >
                  <div class="card-header">
                    <h4>Informasi Pengaturan</h4>
                  </div>
                  <div class="card-body">

                    <div class="form-group">
                      <label>Facebook </label>
                      <input type="text" name="facebook" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                      <label>Twitter </label>
                      <input type="text" name="twitter" class="form-control" placeholder="https://www.twitter.com/namaTwitter">
                    </div>

                    <div class="form-group">
                      <label>Gmail </label>
                      <input type="text" name="facebook" class="form-control" placeholder="abc@gmail.com">
                    </div>

                    <div class="form-group">
                      <label>Instagram </label>
                      <input type="text" name="facebook" class="form-control" placeholder="https://www.instagram.com/namaInstagram">
                    </div>

                    <div class="form-group">
                      <label>Nomor WA</label>
                      <input type="text" name="telepon" class="form-control" placeholder="681234567890">
                    </div>

                    <div class="form-group">
                      <label>Tentang Kami </label>
                      <textarea type="text" name="tentang" class="form-control" style="height:5%;"></textarea>
                    </div>


                    <div class="form-group">
                      <label>Alamat </label>
                      <textarea type="text" name="alamat" class="form-control" style="height:5%;"></textarea>
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

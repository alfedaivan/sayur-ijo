<!DOCTYPE html>
<html lang="en">
@include('admin.head')

<body>
  <div id="app">
    <div class="main-wrapper">
        @include('admin.toolbar')
        @include('admin.category.sidebarCategory')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Tambah Kategori</h1>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <form method="post" action="/dashboard/category/addvalidation" >
                {{csrf_field()}}
                  <div class="card-header">
                    <h4>Informasi Kategori</h4>
                  </div>
                  <div class="card-body">

                    <div class="form-group">
                      <label>Nama Kategori</label>
                      <input type="text" name="kategori" class="form-control" required="">
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
      @include('admin.footer')
    </div>
  </div>

  @include('admin.script')
</body>
</html>

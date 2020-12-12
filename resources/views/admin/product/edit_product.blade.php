<!DOCTYPE html>
<html lang="en">
@include('admin.head')

<body>
  <div id="app">
  <div class="main-wrapper">
    @include('admin.toolbar')

    @include('admin.product.sidebarProduct')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Edit Produk</h1>
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
      @include('admin.footer')
    </div>
  </div>

  @include('admin.script')
</body>
</html>

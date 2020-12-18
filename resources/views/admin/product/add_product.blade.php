@extends('admin.index')

@section('content')
    @include('admin.product.sidebarProduct')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Tambah Produk</h1>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <form method="post" action="/dashboard/product/addvalidation" enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="card-header">
                    <h4>Informasi Produk</h4>
                  </div>
                  <div class="card-body">

                    <div class="form-group">
                      <label>Nama</label>
                      <input name="nama_produk"type="text" class="form-control" required="">
                    </div>

                    <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control" required="" name="id_kategori">
                        @foreach($kategori as $k)
                          <option value="{{$k->id}}">{{$k->kategori}}</option>
                        @endforeach
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
                        <input name="harga" type="text" class="form-control currency" required="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Stok</label>
                      <input name="stok" type="text" class="form-control" required="">
                    </div>
                    
                    <div class="form-group">
                      <label>Foto</label>
                      <input name="foto" type="file" class="form-control" required="">
                    </div>
                  </div>
                  <div class="card-footer text-center">
                    <button value="simpan" type="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>



        </section>
      </div>
@endsection()

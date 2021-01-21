@extends('admin.index')

@section('content')
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
                <form method="post" action="/dashboard/product/editvalidation/{{$product->id}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                  <div class="card-header">
                    <h4>Informasi Produk</h4>
                  </div>
                  <div class="card-body">

                    <div class="form-group">
                      <label>Nama</label>
                      <input name="product_name" type="text" class="form-control" required="" value="{{ $product->product_name }}">
                    </div>

                    <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control" required="" name="category_id">
                        @foreach($category as $k)
                          <option value="{{$k->id}}">{{$k->category}}</option>
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
                        <input name="price" type="text" class="form-control currency" required="" value="{{ $product->price }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Satuan</label>
                      <input name="unit" type="text" class="form-control" required="" value="{{ $product->unit }}">
                    </div>

                    <div class="form-group">
                      <label>Stok</label>
                      <input name="stock" type="text" class="form-control" required="" value="{{ $product->stock }}">
                    </div>

                    <!-- <div class="form-group">
                      <label>Tanggal Update</label>
                      <input type="date" class="form-control" required="">
                    </div> -->

                    <div class="form-group">
                      <label>Foto</label>
                      <br>
                      <!-- <input name="foto" type="file" class="form-control" required=""> -->
                      <input name="photo" type="file" class="dropify" value="{{ url('/images'.$product->photo) }}" data-default-file="{{ url('/images'.$product->photo) }}">
                      <input name="hidden_image" type="hidden" class="form-control" value="{{$product->photo}}">
                    </div>

                    <div class="form-group">
                      <input type="hidden" name="created_at" value="{{ $product->created_at }}" class="form-control">
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
@endsection()

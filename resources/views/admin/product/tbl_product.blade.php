@extends('admin.index')

@section('content')
      @include('admin.product.sidebarProduct')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Produk</h1>
          </div>

          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ $message }}
                </div>
            </div>
            @endif

          <div class="row">
            <div class="col-12">
              <div class="card">

                <div class="card-header">
                  <h4>
                    <form action="/dashboard/product" method="GET">
                      <div class="input-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search" >
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          <button href="{{url('/dashboard/product')}}" class="btn btn-danger ml-1">
                            <i class="fa fa-sync-alt" style="font-size: 13px !important;"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </h4>
                  <div class="card-header-form">
                    <div class="buttons mt-1">
                      <a href="{{url('/dashboard/product/add')}}" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Tambah Produk</a>
                    </div>
                  </div>
                </div>

                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Satuan</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                      </tr>
                      <?php $i = 1; $skipped = $product->currentPage() * $product->perPage()-$product->perPage(); ?>
                        @foreach($product as $index => $p)
                        <tr>
                            <td>{{ $skipped + $i }}</td>
                            <td><img src="{{ url('/images/'.$p->photo) }}" height="50" width="50" alt="{{$p->product_name}}" /></td>
                            <td>{{$p -> product_name}}</td>
                            <td>{{$p -> category}}</td>
                            <td>Rp. {{$p -> price}}</td>
                            <td>{{$p -> unit}}</td>
                            <td>{{$p -> stock}}</td>
                            <td>
                            <a href="/dashboard/product/edit/{{$p->id}}" class="btn btn-icon btn-warning mr-1"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#deleteData{{$p->id}}"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach

                    </table>
                  </div>
                </div>
                <div class="card-footer text-right">
                  <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                    {{ $product->links('admin.pagination') }}
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <!-- modal delete -->
      <!-- modal delete -->
      @foreach($product as $p)
          <div class="modal fade" id="deleteData{{$p->id}}" role="dialog" aria-labelledby="deleteData" aria-hidden="true" >
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <form action="{{ route('product.delete', $p->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <div class="modal-header">
                      <h6 class="modal-title" id="DataLabel"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> &nbsp; Konfirmasi Hapus</h6>
                      </div>
                      <hr>
                      <div class="modal-body">
                      <div class="form-group">
                          <h6>
                          <br>
                              Yakin Ingin Menghapus <b>{{$p->product_name}}</b> ?
                          </h6>
                     </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </div>
                  </form>
                  </div>
              </div>
          </div>
      @endforeach
  @endsection()

@extends('admin.index')

@section('content')
      @include('admin.product.sidebarProduct')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Produk</h1>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">

                <div class="card-header">
                  <h4>
                    <div class="buttons mt-1">
                      <a href="{{url('/dashboard/product/add')}}" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Tambah Produk</a>
                    </div>
                  </h4>
                  <div class="card-header-form">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
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
                        <th>Stok</th>
                        <th>Action</th>
                      </tr>
                      <?php $i = 1; $skipped = $produk->currentPage() * $produk->perPage()-$produk->perPage(); ?>
                        @foreach($produk as $index => $p)
                        <tr>
                            <td>{{ $skipped + $i }}</td>
                            <td><img src="{{ url('/images/'.$p->foto) }}" height="75" width="75" alt="" /></td>
                            <td>{{$p -> nama_produk}}</td>
                            <td>{{$p -> kategori}}</td>
                            <td>{{$p -> harga}}</td>
                            <td>{{$p -> stok}}</td>
                            <td>
                            <a href="/dashboard/category/edit/{{$p->id}}" class="btn btn-icon btn-warning mr-1"><i class="fas fa-edit"></i></a>
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
                    {{ $produk->links('admin.pagination') }}
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <!-- modal delete -->
      <div class="modal fade" id="deleteData" role="dialog" aria-labelledby="deleteData" aria-hidden="true" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="#">
                    <div class="modal-header">
                        <h6 class="modal-title" id="DataLabel"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> &nbsp; Konfirmasi Hapus</h6>
                    </div>
                    <hr>
                    <div class="modal-body">
                        <div class="form-group">
                            <h6>
                            <br>
                                Yakin Ingin Menghapus <b>Apel</b> ?
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
@endsection()

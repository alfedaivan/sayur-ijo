@extends('admin.index')

@section('content')
    @include('admin.history.sidebarHistory')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Riwayat Transaksi</h1>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">

                    <div class="card-header">
                        <h4>
                            <form action="#">
                            <div class="input-group">
                                <input type="text" name="term" id="term" class="form-control" placeholder="Search" >
                                <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                <button href="{{url('/dashboard/history')}}" class="btn btn-danger ml-1">
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
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#deleteData"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>

                    </table>
                  </div>
                </div>
                <div class="card-footer text-right">
                  <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                      </li>
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



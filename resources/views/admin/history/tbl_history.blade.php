@extends('admin.index')

@section('content')
    @include('admin.history.sidebarHistory')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Riwayat Transaksi</h1>
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
                            <form action="#">
                            <div class="input-group">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search" >
                                <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                <button href="{{url('/dashboard/history')}}" class="btn btn-danger ml-1">
                                    <i class="fa fa-sync-alt" style="font-size: 13px !important;"></i>
                                </button>
                                </div>
                            </div>
                            </form>
                        </h4>
                    </div>


                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th>No</th>
                        <th>Pelanggan</th>
                        <th>Alamat</th>
                        <th>Catatan</th>
                        <th>Total</th>
                        <th>Waktu Pemesanan</th>
                        <th>Aksi</th>
                      </tr>
                      <?php $i = 1; $skipped = $histories->currentPage() * $histories->perPage()-$histories->perPage(); ?>
                      @foreach($histories as $index => $h)
                      <tr>
                        <td>{{ $skipped + $i }}</td>
                        <td>{{ $h->nama }}</td>
                        <td>{{ $h->alamat }}</td>
                        <td>{{ $h->catatan }}</td>
                        <td>Rp. {{ $h->total }}</td>
                        <td>{{ $h->created_at }}</td>
                        <td>
                            <a href="#" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#deleteData{{$h->id}}"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                      @endforeach
                    </table>
                  </div>
                </div>

                <!-- pagination -->
                {{ $histories->links('admin.pagination') }}
              </div>
            </div>
          </div>
        </section>
    </div>

    <!-- modal delete -->
    @foreach($histories as $h)
    <div class="modal fade" id="deleteData{{$h->id}}" role="dialog" aria-labelledby="deleteData" aria-hidden="true" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="{{ route('history.delete', $h->id) }}" method="post">
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
                    Yakin Ingin Menghapus <b>{{$h->nama}}</b> ?
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



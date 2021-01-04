@extends('admin.index')

@section('content')
        @include('admin.user.sidebarUser')


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pengguna</h1>
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
                            Daftar Pengguna
                        </h4>
                    </div>


                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                      <?php $i = 1?>
                      @foreach($user as $u)
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>
                          <a href="#" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#deleteData{{$u->id}}"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                        @endforeach

                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

    <!-- modal delete -->
    @foreach($user as $u)
      <div class="modal fade" id="deleteData{{$u->id}}" role="dialog" aria-labelledby="deleteData" aria-hidden="true" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form action="{{ route('user.delete', $u->id) }}" method="post">
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
                        Yakin Ingin Menghapus <b>{{$u->name}}</b> ?
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



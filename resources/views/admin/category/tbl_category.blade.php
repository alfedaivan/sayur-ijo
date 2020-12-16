@extends('admin.index')

@section('content')
        @include('admin.category.sidebarCategory')
        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
            <div class="section-header">
                <h1>Kategori</h1>
            </div>

            <div class="row">
                <div class="col-12">
                <div class="card">

                    <div class="card-header">
                    <h4>
                        <div class="buttons mt-1">
                        <a href="{{url('/dashboard/category/add')}}" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Tambah Kategori</a>
                        </div>
                    </h4>
                    <div class="card-header-form">
                        <form action="/dashboard/category" method="GET">
                        <div class="input-group ">
                            <input type="text" name="term" id="term" class="form-control" placeholder="Search">
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
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                        <!-- looping number -->
                        <?php $i = 1; $skipped = $kategori->currentPage() * $kategori->perPage()-$kategori->perPage(); ?>
                        @foreach($kategori as $index => $k)
                        <tr>
                            <td>{{ $skipped + $i }}</td>
                            <td>{{$k -> kategori}}</td>
                            <td>
                            <a href="/dashboard/category/edit/{{$k->id}}" class="btn btn-icon btn-warning mr-1"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#deleteData{{$k->id}}"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                        </table>
                    </div>
                    </div>

                    <!-- pagination -->
                    {{ $kategori->links('admin.pagination') }}

                </div>
                </div>
            </div>
            </section>
        </div>
        </section>
      </div>


    <!-- modal delete -->
    @foreach($kategori as $k)
        <div class="modal fade" id="deleteData{{$k->id}}" role="dialog" aria-labelledby="deleteData" aria-hidden="true" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <form action="{{ route('category.delete', $k->id) }}" method="post">
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
                            Yakin Ingin Menghapus <b>{{$k->kategori}}</b> ?
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

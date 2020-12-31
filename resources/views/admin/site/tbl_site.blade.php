@extends('admin.index')

@section('content')
        @include('admin.site.sidebarSite')
        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
            <div class="section-header">
                <h1>Pengaturan</h1>
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

                    <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                        <tr>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>Gmail</th>
                            <th>Instagram</th>
                            <th>Nomor WA</th>
                            <th>Tentang kami</th>
                            <th>Alamat</th>
                            <th>Edit</th>
                        </tr>
                        <!-- looping number -->
                        @foreach($site as $s)
                        <tr>
                            <td>{{ \Illuminate\Support\Str::limit($s -> facebook, $limit = 10, $end = '...') }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($s -> twitter, $limit = 10, $end = '...') }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($s -> email, $limit = 10, $end = '...') }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($s -> instagram, $limit = 10, $end = '...') }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($s -> nomor_wa, $limit = 10, $end = '...') }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($s -> about, $limit = 90, $end = '...') }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($s -> alamat, $limit = 30, $end = '...') }}</td>
                            <td>
                            <a href="/dashboard/settings/edit/{{$s->id}}" class="btn btn-icon btn-warning mr-1"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                    </div>

                </div>
                </div>
            </div>
            </section>
        </div>
        </section>
      </div>
@endsection()

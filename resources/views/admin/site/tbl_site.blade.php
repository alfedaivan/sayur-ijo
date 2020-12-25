@extends('admin.index')

@section('content')
        @include('admin.site.sidebarSite')
        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
            <div class="section-header">
                <h1>Site</h1>
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
                            <th>About us</th>
                            <th>Alamat</th>
                            <th>Edit</th>
                        </tr>
                        <!-- looping number -->
                        @foreach($site as $s)
                        <tr>
                            <td>{{$s -> facebook}}</td>
                            <td>{{$s -> twitter}}</td>
                            <td>{{$s -> email}}</td>
                            <td>{{$s -> instagram}}</td>
                            <td>{{$s -> nomor_wa}}</td>
                            <td>{{$s -> about}}</td>
                            <td>{{$s -> alamat}}</td>
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
<!DOCTYPE html>
<html lang="en">
@include('admin.head')

<body>
  <div id="app">
    <div class="main-wrapper">
        @include('admin.toolbar')
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
                      @php $no = 1; @endphp
                      @foreach($kategori as $k)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$k -> kategori}}</td>
                        <td>
                          <a href="/dashboard/category/edit/{{$k->id}}" class="btn btn-icon btn-warning mr-1"><i class="fas fa-edit"></i></a>
                          <a href="/dashboard/category/hapus/{{$k->id}}" class="btn btn-icon btn-danger"><i class="fas fa-trash"></i></a>
                          <!-- <a href="#" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#deleteData{{$k->id}}"><i class="fas fa-trash"></i></a> -->
                        </td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                </div>

                {{ $kategori->links('admin.vendor.pagination') }}

              </div>
            </div>
          </div>
        </section>
      </div>



        </section>
      </div>
      @include('admin.footer')
    </div>
  </div>

  @include('admin.script')
</body>
</html>

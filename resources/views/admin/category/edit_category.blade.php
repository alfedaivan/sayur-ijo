@extends('admin.index')

@section('content')
        @include('admin.category.sidebarCategory')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Form Edit Kategori</h1>
                </div>

                <div class="row">
                    <div class="col-12">
                    <div class="card">
                        <form method="post" action="/dashboard/category/editvalidation/{{$category->id}}">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="card-header">
                            <h4>Informasi Kategori</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="category" class="form-control" required="" value="{{$category->category}}">
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
            </section>
        </div>
@endsection()

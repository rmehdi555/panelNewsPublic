@extends('Admin.layouts.app')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ویرایش نقش</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              {{--<li class="breadcrumb-item"><a href="#">خانه</a></li>--}}
              {{--<li class="breadcrumb-item active">جداول ساده</li>--}}
              <div class="btn-group">
                {{--<a href="{{route('roles.index')}}" class="btn btn-sm btn-info">سطوح دسترسی</a>--}}
                {{--<a href="#" class="btn btn-sm btn-success">کاربران مدیریت</a>--}}
              </div>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">ویرایش دسترسی ها</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    {{--<input type="text" name="table_search" class="form-control float-right" placeholder="جستجو">--}}

                    <div class="input-group-append">
                      {{--<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>--}}
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <form method="POST" action="{{ route('permissions.update',['id'=>$permission->id])}}" enctype="multipart/form-data">
                  @csrf
                  {{ method_field('put') }}

                  <div class="box box-info">
                    <div class="box-header with-border">
                      {{--<h3 class="box-title">ویرایش permission</h3>--}}
                      <br>
                    </div>

                    <div class="form-group row">
                      <label for="name" class="col-sm-4 col-form-label text-md-center">عنوان </label>

                      <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ $permission->name  }}" required autofocus>


                      </div>
                    </div>








                    <div class="form-group row">
                      <label for="name" class="col-sm-4 col-form-label text-md-center">توضیحات </label>

                      <div class="col-md-6">
                        <input id="label" type="text" class="form-control" name="label" value="{{ $permission->label  }}" required autofocus>


                      </div>
                    </div>




                    <div class="form-group row">
                      <label for="name" class="col-sm-4 col-form-label text-md-center"></label>

                      <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                          ثبت
                        </button>


                      </div>

                    </div>




                  </div>



                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection






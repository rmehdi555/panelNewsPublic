
@extends('Admin.layouts.app')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>اطلاعات کاربر با کد ملی  {{$user->username}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              {{--<li class="breadcrumb-item"><a href="#">خانه</a></li>--}}
              {{--<li class="breadcrumb-item active">جداول ساده</li>--}}
              <div class="btn-group">
                <a href="{{route('users.userprofile.edit', $user->id)}}" class="btn btn-sm btn-info">ویرایش اطلاعات کاربری</a>

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
                <h3 class="card-title">اطلاعات کاربر</h3>

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
                <div class="form-group row">
                  <label for="name" class="col-sm-4 col-form-label text-md-center">نام</label>
                  <label for="name" class="col-sm-4 col-form-label text-md-center">{{ $user->name }}</label>



                </div>
                <div class="form-group row">
                  <label for="family" class="col-sm-4 col-form-label text-md-center">فامیلی</label>
                  <label for="name" class="col-sm-4 col-form-label text-md-center">{{ $user->family }}</label>


                </div>
                <div class="form-group row">
                  <label for="mobile" class="col-sm-4 col-form-label text-md-center">شماره همراه</label>
                  <label for="name" class="col-sm-4 col-form-label text-md-center">{{ $user->mobile }}</label>


                </div>

                <div class="form-group row">
                  <label for="name" class="col-sm-4 col-form-label text-md-center">ایمیل</label>
                  <label for="name" class="col-sm-4 col-form-label text-md-center">{{ $user->email }}</label>

                </div>

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


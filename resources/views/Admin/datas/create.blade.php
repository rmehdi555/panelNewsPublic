@extends('Admin.layouts.app')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ایجاد خبر جدید</h1>
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
                <h3 class="card-title">ایجاد خبر</h3>

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
              <div class="card-body">
                <form method="POST" action="{{ route('datas.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="box box-info">
                    <div class="box-header with-border">
                      {{--<h3 class="box-title">ایجاد خبر </h3>--}}
                      <br>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-right">عنوان </label>
                      <div class="col-md-6">
                        <textarea id="titlexpath" type="text" class="form-control{{ $errors->has('titlexpath') ? ' is-invalid' : '' }}" name="titlexpath" required autofocus></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-right">خلاصه خبر</label>
                      <div class="col-md-6">
                        <textarea id="absxpath" type="text" class="form-control{{ $errors->has('absxpath') ? ' is-invalid' : '' }}" name="absxpath" required autofocus></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-right">متن خبر</label>
                      <div class="col-md-6">
                        <textarea id="contxpath" type="text" class="form-control{{ $errors->has('contxpath') ? ' is-invalid' : '' }}" name="contxpath" required autofocus></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-right">کلمات کلیدی</label>
                      <div class="col-md-6">
                        <textarea id="tgxpath" type="text" class="form-control{{ $errors->has('tgxpath') ? ' is-invalid' : '' }}" name="tgxpath" required autofocus></textarea>
                      </div>
                    </div>



                    <div class="form-group row">
                      <label for="name" class="col-sm-4 col-form-label text-md-right"></label>

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


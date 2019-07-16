@extends('Admin.layouts.app')
@section('content')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ویرایش خبر</h1>
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
                <h3 class="card-title">ویرایش خبر</h3>

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
                <form method="POST" action="{{ route('datas.update', $data) }}" enctype="multipart/form-data">
                  @csrf
                  {{ method_field('put') }}


                  <div class="box box-info">
                    <div class="box-header with-border">
                      {{--<h3 class="box-title">بخش لیست خبر </h3>--}}
                      <br>
                    </div>
                    <div class="form-group row">

                      <label for="level_id" class="col-sm-12 col-form-label text-md-center">بخش لیست خبر</label>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">لینک خبر خوان</label>
                      <div class="col-md-6">
                        <textarea id="link" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link"  autofocus>{{$data->link}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">لینک سایت مقصد</label>
                      <div class="col-md-6">
                        <textarea id="destlink" type="text" class="form-control{{ $errors->has('destlink') ? ' is-invalid' : '' }}" name="destlink"  autofocus>{{$data->destlink}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">شرط حلقه</label>
                      <div class="col-md-6">
                        <textarea id="forxpath" type="text" class="form-control{{ $errors->has('forxpath') ? ' is-invalid' : '' }}" name="forxpath"  autofocus>{{$data->forxpath}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">عنوان لیست خبر</label>
                      <div class="col-md-6">
                        <textarea id="ftitlexpath" type="text" class="form-control{{ $errors->has('ftitlexpath') ? ' is-invalid' : '' }}" name="ftitlexpath"  autofocus>{{$data->ftitlexpath}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">تاریخ لیست خبر</label>
                      <div class="col-md-6">
                        <textarea id="fdatexpath" type="text" class="form-control{{ $errors->has('fdatexpath') ? ' is-invalid' : '' }}" name="fdatexpath"  autofocus>{{$data->fdatexpath}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">خلاصه لیست خبر</label>
                      <div class="col-md-6">
                        <textarea id="fabsxpath" type="text" class="form-control{{ $errors->has('fabsxpath') ? ' is-invalid' : '' }}" name="fabsxpath"  autofocus>{{$data->fabsxpath}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">متن لیست خبر</label>
                      <div class="col-md-6">
                        <textarea id="fcontxpath" type="text" class="form-control{{ $errors->has('fcontxpath') ? ' is-invalid' : '' }}" name="fcontxpath"  autofocus>{{$data->fcontxpath}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">عکس لیست خبر</label>
                      <div class="col-md-6">
                        <textarea id="fimgxpath" type="text" class="form-control{{ $errors->has('fimgxpath') ? ' is-invalid' : '' }}" name="fimgxpath"  autofocus>{{$data->fimgxpath}}</textarea>
                      </div>
                    </div>




                    <div class="form-group row text-center">

                      <label for="level_id" class="col-sm-12 col-form-label text-md-center">بخش صفحه داخلی خبر </label>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">عنوان خبر</label>
                      <div class="col-md-6">
                        <textarea id="titlexpath" type="text" class="form-control{{ $errors->has('titlexpath') ? ' is-invalid' : '' }}" name="titlexpath"  autofocus>{{$data->titlexpath}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">خلاصه خبر</label>
                      <div class="col-md-6">
                        <textarea id="absxpath" type="text" class="form-control{{ $errors->has('absxpath') ? ' is-invalid' : '' }}" name="absxpath"  autofocus>{{$data->absxpath}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">تاریخ خبر</label>
                      <div class="col-md-6">
                        <textarea id="datexpath" type="text" class="form-control{{ $errors->has('datexpath') ? ' is-invalid' : '' }}" name="datexpath"  autofocus>{{$data->datexpath}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">کلمات کلیدی خبر</label>
                      <div class="col-md-6">
                        <textarea id="tgxpath" type="text" class="form-control{{ $errors->has('tgxpath') ? ' is-invalid' : '' }}" name="tgxpath"  autofocus>{{$data->tgxpath}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">متن خبر</label>
                      <div class="col-md-6">
                        <textarea id="contxpath" type="text" class="form-control{{ $errors->has('contxpath') ? ' is-invalid' : '' }}" name="contxpath"  autofocus>{{$data->contxpath}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">عکس خبر</label>
                      <div class="col-md-6">
                        <textarea id="imgxpath" type="text" class="form-control{{ $errors->has('imgxpath') ? ' is-invalid' : '' }}" name="imgxpath"  autofocus>{{$data->imgxpath}}</textarea>
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



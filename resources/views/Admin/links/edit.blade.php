@extends('Admin.layouts.app')
@section('content')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ویرایش لینک کراولر</h1>
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
                <h3 class="card-title">ویرایش لینک</h3>

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
                <form method="POST" action="{{ route('links.update', $link) }}" enctype="multipart/form-data">
                  @csrf
                  {{ method_field('put') }}

                  <div class="box box-info">
                    <div class="box-header with-border">
                      {{--<h3 class="box-title">مسیر های حلقه</h3>--}}
                      <br>
                    </div>
                    <div class="form-group row">

                      <label for="level_id" class="col-sm-12 col-form-label text-md-center">بخش لیست خبر</label>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">لینک مقصد</label>
                      <div class="col-md-6">
                        <textarea id="destlink" type="text" class="form-control{{ $errors->has('destlink') ? ' is-invalid' : '' }}" name="destlink"  autofocus>{{ $link->destlink }}</textarea>

                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">عنوان</label>
                      <div class="col-md-6">
                        <textarea id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title"  autofocus>{{ $link->title }}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">لینک</label>
                      <div class="col-md-6">
                        <textarea id="link" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link"  autofocus>{{ $link->link }}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">مسیر عنوان درون حلقه</label>
                      <div class="col-md-6">
                        <textarea id="ftitlexpath" type="text" class="form-control{{ $errors->has('ftitlexpath') ? ' is-invalid' : '' }}" name="ftitlexpath"  autofocus>{{ $link->ftitlexpath }}</textarea>

                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">مسیر چکیده درون حلقه</label>
                      <div class="col-md-6">
                        <textarea id="fabsxpath" type="text" class="form-control{{ $errors->has('fabsxpath') ? ' is-invalid' : '' }}" name="fabsxpath"  autofocus>{{$link->fabsxpath}}</textarea>

                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">مسیر لینک محتوای اصلی</label>
                      <div class="col-md-6">
                        <textarea id="fcontxpath" type="text" class="form-control{{ $errors->has('fcontxpath') ? ' is-invalid' : '' }}" name="fcontxpath"  autofocus>{{$link->fcontxpath}}</textarea>

                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">مسیر عکس درون حلقه</label>
                      <div class="col-md-6">
                        <textarea id="fimgxpath" type="text" class="form-control{{ $errors->has('fimgxpath') ? ' is-invalid' : '' }}" name="fimgxpath"  autofocus>{{$link->fimgxpath}}</textarea>

                      </div>
                    </div>









                    <div class="form-group row text-center">

                      <label for="level_id" class="col-sm-12 col-form-label text-md-center">بخش صفحه داخلی خبر </label>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">کلمات کلیدی شامل (and)</label>
                      <div class="col-md-6">
                        <textarea id="andkeywords" type="text" class="form-control{{ $errors->has('andkeywords') ? ' is-invalid' : '' }}" name="andkeywords"  autofocus>{{$link->andkeywords}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center"> کلمات کلیدی هر یک از (or)</label>
                      <div class="col-md-6">
                        <textarea id="orkeywords" type="text" class="form-control{{ $errors->has('orkeywords') ? ' is-invalid' : '' }}" name="orkeywords"  autofocus>{{$link->orkeywords}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">کلمات کلیدی هیچ یک از (not)</label>
                      <div class="col-md-6">
                        <textarea id="notkeywords" type="text" class="form-control{{ $errors->has('notkeywords') ? ' is-invalid' : '' }}" name="notkeywords"  autofocus>{{$link->notkeywords}}</textarea>

                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">مسیر عنوان محتوا</label>
                      <div class="col-md-6">
                        <textarea id="titlexpath" type="text" class="form-control{{ $errors->has('titlexpath') ? ' is-invalid' : '' }}" name="titlexpath"  autofocus>{{$link->titlexpath}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">مسیر چکیده محتوا</label>
                      <div class="col-md-6">
                        <textarea id="absxpath" type="text" class="form-control{{ $errors->has('absxpath') ? ' is-invalid' : '' }}" name="absxpath"  autofocus>{{$link->absxpath}}</textarea>

                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">مسیر متن محتوا</label>
                      <div class="col-md-6">
                        <textarea id="contxpath" type="text" class="form-control{{ $errors->has('contxpath') ? ' is-invalid' : '' }}" name="contxpath"  autofocus>{{$link->contxpath}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center"> مسیر برچسب های محتوا</label>
                      <div class="col-md-6">
                        <textarea id="tgxpath" type="text" class="form-control{{ $errors->has('tgxpath') ? ' is-invalid' : '' }}" name="tgxpath"  autofocus>{{$link->tgxpath}}</textarea>

                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">مسیر تصویر محتوا</label>
                      <div class="col-md-6">
                        <textarea id="imgxpath" type="text" class="form-control{{ $errors->has('imgxpath') ? ' is-invalid' : '' }}" name="imgxpath"  autofocus>{{$link->imgxpath}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center">وضعیت کراول کردن از این سایت</label>
                      <div class="col-md-6">
                        <select class="form-control" id="active" name="active">
                          <option value="1">فعال</option>
                          <option value="0">غیرفعال</option>

                        </select>
                      </div>
                    </div>




                    <div class="form-group row">
                      <label for="level_id" class="col-sm-4 col-form-label text-md-center"></label>
                      <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                          ثبت
                        </button>
                      </div>
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




@extends('Admin.layouts.app')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>لینک کراول ها</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              {{--<li class="breadcrumb-item"><a href="#">خانه</a></li>--}}
              {{--<li class="breadcrumb-item active">جداول ساده</li>--}}
              <div class="btn-group">
                <a href="{{route('links.create')}}" class="btn btn-sm btn-info">ایجاد لینک خبرخوان جدید</a>


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
                <h3 class="card-title">جدول لینک خبر خوان ها</h3>
                <div class="card-tools">
                <form method="post" action="{{ route("links.search") }}">
                  @csrf

                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>


                </form>
                </div>

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
                <table class="table table-striped table-sm">
                  <thead>
                  <tr>

                    <th>کد</th>
                    <th>لینک مقصد</th>
                    <th>لینک مبدا</th>
                    <th>عنوان</th>
                    {{--<th>link</th>--}}
                    <th>وضعیت</th>

                    <th>تنظیمات</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($links as $link)
                    <tr>
                      <td>{{ $link->id }}</td>

                      <td>{!! Str::limit($link->destlink, $limit = 40, $end = '...') !!}</td>
                      <td>{!! Str::limit($link->link, $limit = 40, $end = '...') !!}</td>
                      <td>{!! Str::limit($link->title, $limit = 40, $end = '...') !!}</td>
                      {{--<td>{{ $link->link}}</td>--}}
                      <td>@if($link->active==1)  <span class="badge badge-success">فعال</span>@else <span class="badge badge-danger">غیرفعال</span> @endif</td>

                      <td>
                        {{--<form class="form-inline d-inline" action="{{ route("banner.content.change.status",$bannerContent->id) }}" method="post">--}}
                        {{--@csrf--}}
                        {{--{{ method_field('put') }}--}}
                        {{--<button class="btn btn-link" type="submit">--}}
                        {{--@if($bannerContent->status == 1)--}}
                        {{--<i class="fa fa-toggle-on text-success"></i>--}}
                        {{--@else--}}
                        {{--<i class="fa fa-toggle-off text-muted"></i>--}}
                        {{--@endif--}}
                        {{--</button>--}}
                        {{--</form>--}}
                        {{--<hr>--}}
                        <a class="btn btn-sm btn-info" href="{{ route("links.edit",$link->id) }}"><i class="fa fa-edit"></i></a>
                        <form class="form-inline d-inline" action="{{ route("links.destroy",$link->id) }}" method="post">
                          @csrf
                          {{ method_field('delete') }}
                          <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            {!! $links->render() !!}
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection

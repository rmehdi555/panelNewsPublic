
@extends('Admin.layouts.app')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>دسترسی ها</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              {{--<li class="breadcrumb-item"><a href="#">خانه</a></li>--}}
              {{--<li class="breadcrumb-item active">جداول ساده</li>--}}
              <div class="btn-group">
                <a href="{{route('permissions.create')}}" class="btn btn-sm btn-info">ایجاد دسترسی جدید</a>

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
                {{--<h3 class="card-title">جدول مدیریت نقش ها</h3>--}}

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
                    <th>id</th>
                    <th>نام </th>
                    <th>توضیح</th>

                    <th>update</th>


                  </tr>
                  </thead>
                  <tbody>
                  {{--@foreach($users as $user)--}}
                  @foreach($permissions as  $permission)
                    <tr>

                      <td>{{ $permission->id }}</td>
                      <td>{{ $permission->name }}</td>
                      <td>{{ $permission->label }}</td>

                      <td>
                        <a class="btn btn-sm btn-info" href="{{ route("permissions.edit",$permission->id) }}"><i class="fa fa-edit"></i></a>

                        <form class="form-inline d-inline" action="{{ route("permissions.destroy",$permission->id) }}" method="post">
                          @csrf
                          {{ method_field('delete') }}
                          {{--<input value="delete">--}}
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
            {!! $permissions->render() !!}
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection




@extends('Admin.layouts.app')
@section('content')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">ticket </h1>
    {{--<div class="btn-toolbar mb-2 mb-md-0">--}}
    {{--<div class="btn-group mr-2">--}}
    {{--<a href="#" class="btn btn-sm btn-outline-success">Add User</a>--}}
    {{--</div>--}}

    {{--</div>--}}
    <div class="btn-group">
      <a href="{{route('tickets.create')}}" class="btn btn-sm btn-info">ticket ایجاد</a>

    </div>

  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
      <tr>
        <th>کد تیکت</th>
        <th>نام </th>
        <th>نام خانوادگی</th>
        <th>کد ملی</th>
        <th>شماره همراه</th>
        <th>اولویت</th>
        <th>دسته</th>
        <th>وضعیت</th>
        <th>فایل ها</th>

        <th>تنظیمات</th>


      </tr>
      </thead>
      <tbody>
      {{--@foreach($users as $user)--}}
      @foreach($tickets as  $ticket)
        <tr>

          <td>{{ $ticket->id }}</td>
          <td>{{ $ticket->name }}</td>
          <td>{{ $ticket->family }}</td>
          <td>{{ $ticket->username}}</td>
          <td>{{ $ticket->mobile }}</td>
          <td>{{ $ticket->hasLevelTicket($ticket->level_id)->name }}</td>
          <td>{{ $ticket->hasCategoryTicket($ticket->category_id)->name }}</td>
          <td>{{ $ticket->hasStatusTicket($ticket->status_id)->name }}</td>
          {{--<td><a href="/{{$ticket->hasFileTicket($ticket->id)->url}}"></a>{{$ticket->hasFileTicket($ticket->id)->url}}</td>--}}

          <td>
            <a class="btn btn-sm btn-info" href="{{ route("tickets.answer",$ticket->id) }}"><i class="fa fa-location-arrow" aria-hidden="true"></i></a>
            <a class="btn btn-sm btn-info" href="{{ route("tickets.edit",$ticket->id) }}"><i class="fa fa-edit"></i></a>

            <form class="form-inline d-inline" action="{{ route("tickets.destroy",$ticket->id) }}" method="post">
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
    {!! $tickets->render() !!}
  </div>




@endsection


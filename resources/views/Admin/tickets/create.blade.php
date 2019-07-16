@extends('Admin.layouts.app')


@section('content')


  <div class="card">
    <div class="card-header">ایجادticket  </div>

    <div class="card-body">
      <form method="POST" action="{{ route('tickets.store')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">ایجاد ticket </h3>
          </div>
          <div class="form-group row">
            <label for="level_id" class="col-sm-4 col-form-label text-md-right">اولویت درخواست </label>

            <div class="col-md-6">
              <select id="level_id" class="form-control{{ $errors->has('level_id') ? ' is-invalid' : '' }}" name="level_id" required autofocus>
                @foreach($levels as $level)
                  <option value="{{ $level->id }}">{{ $level->name }}</option>
                @endforeach
              </select>
              @if ($errors->has('level_id'))
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('level_id') }}</strong>
                            </span>
              @endif


            </div>
          </div>

          <div class="form-group row">
            <label for="category_id" class="col-sm-4 col-form-label text-md-right">انتخاب دسته درخواست </label>

            <div class="col-md-6">
              <select id="category_id" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" required autofocus>
                @foreach($categoryticket as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
              @if ($errors->has('category_id'))
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('category_id') }}</strong>
                            </span>
              @endif


            </div>
          </div>

          <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right">نام </label>

            <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="name" value=" @if (Auth::check()){{Auth::user()->name}}@endif" required autofocus>


            </div>
          </div>
          <div class="form-group row">
            <label for="family" class="col-sm-4 col-form-label text-md-right">نام خانوادگی </label>

            <div class="col-md-6">
              <input id="family" type="text" class="form-control" name="family" value="@if (Auth::check()){{Auth::user()->family}}@endif" required autofocus>


            </div>
          </div>

          <div class="form-group row">
            <label for="username" class="col-md-4 col-form-label text-md-right">کد ملی</label>

            <div class="col-md-6">
              <input id="username" type="text" pattern="^\d{10}$"  class="form-control @error('username') is-invalid @enderror" name="username" value="@if (Auth::check()){{Auth::user()->username}}@endif" required autocomplete="username" autofocus>

              @error('username')
              <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="mobile" class="col-md-4 col-form-label text-md-right">شماره همراه</label>

            <div class="col-md-6">
              <input id="mobile"  type="tel" pattern="^\d{11}$"  class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="@if (Auth::check()){{Auth::user()->mobile}}@endif" required autocomplete="mobile" autofocus>

              @error('mobile')
              <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="file" class="col-md-4 col-form-label text-md-right">ارسال فایل</label>

            <div class="col-md-6">
              <input type="file" name="file" class="form-control">
            </div>
          </div>


          <div class="form-group row">
            <label for="body" class="col-md-4 col-form-label text-md-right">متن درخواست</label>

            <div class="col-md-6">
              <textarea id="body" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" value="{{ old('body') }}" required autofocus>
                        </textarea>
              @if ($errors->has('body'))
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('body') }}</strong>
                            </span>
              @endif
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
  </div>

@endsection


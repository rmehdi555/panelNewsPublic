@extends('Admin.layouts.app')

@section('script')
    <script>
        $(document).ready(function(){
            $('#levelticket_id').selectpicher();
        })
    </script>
@endsection
@section('content')

    <div class="card">
        <div class="card-header"> پاسخ  ticket  </div>

        <div class="card-body">
            <form method="POST" action="{{ route('usertickets.storeAnswer')}}" method="post" enctype="multipart/form-data">
                @csrf


                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">پاسخ ticket </h3>
                    </div>
                    <div class="form-group row">
                        <label for="level_id" class="col-sm-4 col-form-label text-md-right">کد درخواست </label>
                        <label for="level_id" class="col-sm-4 col-form-label text-md-right">{{ $ticket->id}}</label>
                        <input type="hidden" name="id" id="nid" value="{{ $ticket->id}}">

                    </div>
                    <div class="form-group row">
                        <label for="level_id" class="col-sm-4 col-form-label text-md-right">اولویت درخواست </label>
                        <label for="level_id" class="col-sm-4 col-form-label text-md-right">{{ $ticket->hasLevelTicket($ticket->level_id)->name }}</label>

                    </div>

                    <div class="form-group row">
                        <label for="category_id" class="col-sm-4 col-form-label text-md-right">انتخاب دسته درخواست </label>


                        <label for="category_id" class="col-sm-4 col-form-label text-md-right">{{ $ticket->hasCategoryTicket($ticket->category_id)->name }}</label>

                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label text-md-right">نام </label>


                        <label for="name" class="col-sm-4 col-form-label text-md-right">{{ $ticket->name }} </label>

                    </div>
                    <div class="form-group row">
                        <label for="family" class="col-sm-4 col-form-label text-md-right">نام خانوادگی </label>

                        <label for="name" class="col-sm-4 col-form-label text-md-right">{{ $ticket->family }} </label>


                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label text-md-right">کد ملی</label>


                        <label for="name" class="col-sm-4 col-form-label text-md-right">{{ $ticket->username }} </label>

                    </div>
                    <div class="form-group row">
                        <label for="mobile" class="col-md-4 col-form-label text-md-right">شماره همراه</label>


                        <label for="name" class="col-sm-4 col-form-label text-md-right">{{ $ticket->mobile }} </label>


                    </div>

                    @foreach($ticket->body()->get() as $body)
                        {{$body->body}}
                    @endforeach
                    @foreach($ticket->file()->get() as $file)
                        {{$file->url}}
                    @endforeach

                    <div class="form-group row">
                        <label for="file" class="col-md-4 col-form-label text-md-right">ارسال فایل</label>

                        <div class="col-md-6">
                            <input type="file" name="file" class="form-control">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="body" class="col-md-4 col-form-label text-md-right">متن پاسخ درخواست</label>

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


@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    ارسال بريد الكتروني الي {{$contact->email}}
                </div>
                <div class="card-body">
                    <form action="{{route('respond.post',$contact)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="message">الرسالة</label>
                            <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit"><i class="fa fa-send"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

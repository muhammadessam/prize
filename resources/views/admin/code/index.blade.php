@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>الكود</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('code.post')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="scriptCode" class="form-control" value="{{$code}}">
                        </div>
                        <button class="btn btn-primary">حفظ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

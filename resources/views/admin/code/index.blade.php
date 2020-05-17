@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>الكود</h3>
                    <div class="alert alert-info">
                       ادخل الكود بالطريقة الصحيح عند نسخ الرابط اختر custom Domain مثال
                        &lt;
                        script type="text/javascript" src="/s_include.php?id=891913"&gt;
                        &lt;/script&gt;
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('code.post')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="scriptCode" class="form-control" value="{{$code}}">
                        </div>
                        @error('scriptCode')
                        {{$message}}
                        @enderror
                        <button class="btn btn-primary">حفظ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>الاعدادات</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{route('settings.update', $setting)}}" method="post">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label for="message">اسم الموقع</label>
                                    <input name="name" type="text" class="form-control" value="{{$setting->name}}"> 
                                </div>
                                <div class="form-group">
                                    <label for="">حالة الموقع</label>
                                    <div class="form-check">
                                        <input class="form-check-input minimal" type="radio" name="active"
                                               value="1" {{$setting->isSiteActive ? 'checked' :''}}>
                                        <label class="form-check-label">فعال</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input minimal" type="radio" name="active"
                                               value="0" {{!$setting->isSiteActive ? 'checked' :''}}>
                                        <label class="form-check-label">مغلق</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">رسالة الاغلاق</label>
                                    <textarea name="closingMessage" id="close" cols="30"
                                              rows="10" class="form-control">{{$setting->closingMessage}}</textarea>
                                </div>

                                <button class="btn btn-primary" type="submit">حفظ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        })
    </script>
@endsection

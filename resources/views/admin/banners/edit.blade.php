@extends('admin.layout.layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    تعديل البنر الخاص ب {{$banner->name}}
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('banners.update', $banner)}}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="">الحالة</label>
                            <div class="form-check">
                                <input class="form-check-input minimal" type="radio" name="is_active"
                                       value="1" {{$banner->is_active ? 'checked' :''}}>
                                <label class="form-check-label">فعال</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input minimal" type="radio" name="is_active"
                                       value="0" {{!$banner->is_active ? 'checked' :''}}>
                                <label class="form-check-label">مغلق</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="type">نوع البنر</label>
                            <select style="width:100%" class="js-example-basic-single" name="type_value">
                                <option value="0" selected></option>
                                <option value="T">نص</option>
                                <option value="I">صورة</option>
                            </select>
                        </div>

                        <div class="form-group" id="text" style="display: none">
                            <label for="type">الكود</label>
                            <input style="width:100%" class="form-control" name="code" type="text">
                            @error('code')
                            <div style="margin-top: 2px" class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group d-none" id="image">
                            <label for="exampleInputFile">الصورة</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"
                                           class="custom-file-input @error('img') is-invalid @enderror"
                                           name="img"
                                           id="exampleInputFile" value="{{old('img')}}">

                                    <label class="custom-file-label" for="exampleInputFile">صورة البنر</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">ارسال صورة</span>
                                </div>
                            </div>
                            @error('img')
                            <div style="margin-top: 2px" class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </form>
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
        });
        $('.js-example-basic-single').select2();

        $('.js-example-basic-single').on('change', function (e) {
            if (this.value == "I") {
                $('#image').removeClass('d-none');
                $('#text').addClass('d-none');
            } else if (this.value == "T") {
                $('#image').addClass('d-none');
                $('#text').removeClass('d-none');
            } else {
                $('#image').addClass('d-none');
                $('#text').addClass('d-none');
            }
        })
    </script>
@endsection

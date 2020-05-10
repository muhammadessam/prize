@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header d-flex justify-content-lg-between">
                    <h3>اضف هدية</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <form action="{{route('gifts.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="type">نوع الهدية</label>
                            <select style="width:100%" class="js-example-basic-single" name="type_value">
                                <option value="T">نص</option>
                                <option value="I">صورة</option>
                            </select>
                        </div>

                        <div class="form-group" id="text">
                            <label for="type">النص</label>
                            <textarea style="width:100%" class="form-control" name="text" type="text"></textarea>
                        </div>


                        <div class="form-group d-none" id="image">
                            <label for="exampleInputFile">الصورة</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"
                                           class="custom-file-input @error('license_pic') is-invalid @enderror"
                                           name="image"
                                           id="exampleInputFile" value="{{old('license_pic')}}">

                                    <label class="custom-file-label" for="exampleInputFile">صورة الهدية</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">ارسال صورة</span>
                                </div>
                            </div>
                            @error('license_pic')
                            <div style="margin-top: 2px" class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary" type="submit">اضافة</button>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>

@endsection

@section('javascript')
    <x-datatablescript tableID="gifts"></x-datatablescript>
    <script>
        $('.js-example-basic-single').select2();
        $('.js-example-basic-single').on('change', function (e) {
            if (this.value == "I") {
                $('#image').removeClass('d-none');
                $('#text').addClass('d-none');
            } else {
                $('#image').addClass('d-none');
                $('#text').removeClass('d-none');
            }
        })
    </script>
@endsection

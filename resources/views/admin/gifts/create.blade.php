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

                        <div class="form-group" id="text">
                            <label for="type">النص</label>
                            <textarea style="width:100%" class="form-control" name="text" type="text"></textarea>
                        </div>


                        <div class="form-group" id="image">
                            <label for="exampleInputFile">الصورة</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"
                                           class="custom-file-input @error('image') is-invalid @enderror"
                                           name="image"
                                           id="exampleInputFile" value="{{old('image')}}">

                                    <label class="custom-file-label" for="exampleInputFile">صورة الهدية</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">ارسال صورة</span>
                                </div>
                            </div>
                            @error('image')
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

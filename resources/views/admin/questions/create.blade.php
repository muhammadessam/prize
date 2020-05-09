@extends('admin.layout.layout')

@section('content')
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        اضافة سؤال جديد
                    </div>
                    <div class="alert alert-info">
                        <ul>
                            <li>الاجابات الاختيارية ادخل الجواب الصحيح اخر حقل وسيقوم النظام بعرضها بشكل عشوائي للزائر</li>
                            <li>الإجابات الصواب والخطاء فقط تعبئه الحقل الاول والحقل الاخير هو الصحيح والنظام سيعرضها للزائر بشكل عشوائي</li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('questions.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="type">السؤال</label>
                                <input value="{{old('question')}}" name="question" type="text"
                                       class="form-control  @error('question') is-invalid @enderror"
                                       placeholder="من فضلك ادخل السؤال">
                            </div>
                            @error('question')
                            <div style="margin-top: 2px" class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="type">الاجابة الاولي</label>
                                <input value="{{old('a1')}}" name="a1" type="text"
                                       class="form-control @error('a1') is-invalid @enderror">
                            </div>
                            @error('a1')
                            <div style="margin-top: 2px" class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="type">الاجابة الثانية</label>
                                <input value="{{old('a2')}}" name="a2" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="type">الاجابة الثالثة</label>
                                <input value="{{old('a3')}}" name="a3" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="type">الاجابة الصحيحة</label>
                                <input value="{{old('correct')}}" name="correct" type="text"
                                       class="form-control @error('correct') is-invalid @enderror">
                            </div>
                            @error('correct')
                            <div style="margin-top: 2px" class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary" type="submit">اضافة</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



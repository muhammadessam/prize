@extends('admin.layout.layout')

@section('content')
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    تعديل
                </div>
                <div class="card-body">
                    <form action="{{route('questions.update', $question)}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <div class="form-group">
                                <label for="type">السؤال</label>
                                <input value="{{$question->question}}" name="question" type="text"
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
                                <input value="{{$question->a1}}" name="a1" type="text"
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
                                <input value="{{$question->a2}}" name="a2" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="type">الاجابة الثالثة</label>
                                <input value="{{$question->a3}}" name="a3" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="type">الاجابة الصحيحة</label>
                                <input value="{{$question->correct}}" name="correct" type="text"
                                       class="form-control @error('correct') is-invalid @enderror">
                            </div>
                            @error('correct')
                            <div style="margin-top: 2px" class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary" type="submit">تعديل</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header d-flex justify-content-lg-between">
                    <div class="col-11">
                        <h3 class="card-title">الاسئلة</h3>
                    </div>
                    <div class="col-1">
                        <a class="btn btn-primary" href="{{route('questions.create')}}">اضافة سؤال</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table style="text-align: center" id="gifts" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>رقم السؤال</th>
                            <th>السؤال</th>
                            <th>الاجابة الاولي</th>
                            <th>الاجابة الثانية</th>
                            <th>الاجابة الثالثة</th>
                            <th>الصحيحة</th>
                            <th>اجراء</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($questions as $question)
                            <tr>
                                <td>{{$question->id}}</td>
                                <td>{{$question->question}}</td>
                                <td>{{$question->a1}}</td>
                                <td>{{$question->a2 ? $question->a2 : ''}}</td>
                                <td>{{$question->a3 ? $question->a3 : ''}}</td>
                                <td>{{$question->correct ? $question->correct : ''}}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{route('questions.edit', $question)}}" class="btn btn-primary ml-2"><i
                                            class="fa fa-edit"></i></a>
                                    <form id="deleteForm" action="{{route('questions.destroy', $question)}}"
                                          method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="deleteFunction()" type="submit"><i
                                                class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
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
@endsection

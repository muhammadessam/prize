@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header d-flex justify-content-lg-between">
                    <div class="col-11">
                        <h3 class="card-title">اتصل بنا</h3>
                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table style="text-align: center" id="contact" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>الايميل</th>
                            <th>الهاتف</th>
                            <th>الرسالة</th>
                            <th>اجراء</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->message}}</td>
                                <td class="d-flex justify-content-center">
                                    <a class="btn btn-primary ml-2" href="{{route('respond.get', $contact)}}"><i
                                            class="fa fa-send"></i></a>
                                    <form id="deleteForm" action="{{route('contact.destroy', $contact)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>
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
    <x-datatablescript tableID="contact"></x-datatablescript>
@endsection

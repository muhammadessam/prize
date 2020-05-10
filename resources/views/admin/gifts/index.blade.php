@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header d-flex justify-content-lg-between">
                    <div class="col-11">
                        <h3 class="card-title">الهدايا</h3>
                    </div>
                    <div class="col-1">
                        <a class="btn btn-primary" href="{{route('gifts.create')}}">اضافة هدية</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table style="text-align: center" id="gifts" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>الصورة</th>
                            <th>النص</th>
                            <th>اجراء</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($gifts as $gift)
                            <tr>
                                <td>
                                    @if($gift->img_path)
                                        <img src="{{asset($gift->img_path)}}" alt=""
                                             style="width: 100px; height: 100px">
                                    @else
                                        <span class="badge badge-danger">-</span>
                                    @endif
                                </td>
                                <td>
                                    @if($gift->text)
                                        <p>{{$gift->text}}</p>
                                    @else
                                        <span class="badge badge-danger">-</span>
                                    @endif
                                </td>
                                <td class="d-flex justify-content-center">
                                    <form id="deleteForm" action="{{route('gifts.destroy', $gift)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit" onclick="deleteFunction()"><i class="fa fa-trash"></i>
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

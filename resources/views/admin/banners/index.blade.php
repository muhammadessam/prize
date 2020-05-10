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
                    <table style="text-align: center" id="banners" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>اسم البانر</th>
                            <th>الكود</th>
                            <th>الصورة</th>
                            <th>الحالة</th>
                            <th>اجراء</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($banners as $banner)
                            <tr>
                                <td>{{$banner->name}}</td>
                                <td>{{$banner->code??'-'}}</td>
                                <td>
                                    @if($banner->img)
                                        <img src="{{asset($banner->img)}}" style="width: 100px;height: 100px;" alt="">
                                    @else
                                    @endif
                                </td>
                                <td>{{$banner->is_active ? "فعال":"غير فعال"}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('banners.edit', $banner)}}"><i
                                            class="fa fa-edit"></i></a>
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
    <x-datatablescript tableID="banners"></x-datatablescript>
@endsection

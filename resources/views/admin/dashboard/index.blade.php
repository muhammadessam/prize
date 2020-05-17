@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <div class="col-4">
            <div class="small-box bg-info-gradient">
                <div class="inner">
                    <h3>{{count(\App\Models\Ip::all())}}</h3>

                    <p>عدد الزيارات</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="small-box bg-danger-gradient">
                <div class="inner">
                    <h3>{{count(\App\Models\Gift::where('used', true)->get())}}</h3>

                    <p>الهدايا المستخدمة</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="small-box bg-success-gradient">
                <div class="inner">
                    <h3>{{count(\App\Models\Gift::where('used', false)->get())}}</h3>

                    <p>الهدايا المتاحة</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>

    </div>
@endsection

@extends('front.layout.layout')
@section('contentFront')
    <div class="row">
        <div class="col-sm-12 col-lg-4 col-xl-4">
            <div><img src="{{asset(\App\Models\Banner::where('name', 'ب1')->first()->img)}}" class="img_card" style="width: 100%;"></div>
        </div>
        <div class="col-sm-12 col-lg-4 col-xl-4">
            <div><img src="{{asset(\App\Models\Banner::where('name', 'ب2')->first()->img)}}" class="img_card"></div>
        </div>
        <div class="col">
            <div><img src="{{asset(\App\Models\Banner::where('name', 'ب3')->first()->img)}}" class="img_card"></div>
        </div>
    </div>
    <div class="row" style="padding: 50px 0px;">
        <div class="col">
            <div style="margin: auto;display: block;background: rgb(20,6,56);padding: 20px;width: 100%;">
                <div class="row" style="height: 500px;">
                    <div class="col">
                        <example-component></example-component>
                    </div>
                    <div class="col-md-12">
                        <div>
                            <div style="width: fit-content;margin: auto;">
                                <a href="#" class="link_cons">
                                    <img src="{{asset('assets/img/iconfinder_instagram_icon_1399542.png')}}" class="img_icons">
                                </a>
                                <a href="#" class="link_cons">
                                    <img src="{{asset('assets/img/logotype%20(1).png')}}" class="img_icons">
                                </a>
                                <a href="#" class="link_cons">
                                    <img src="{{asset('assets/img/windows-media-audio.png')}}" class="img_icons">
                                </a>
                                <a href="#" class="link_cons">
                                    <img src="{{asset('assets/img/logos.png')}}" class="img_icons">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

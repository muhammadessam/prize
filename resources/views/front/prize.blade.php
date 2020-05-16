@extends('front.layout.layout')

@section('contentFront')

    <div class="row" style="padding: 50px 0px;">
        <div class="col">
            <div style="margin: auto;display: block;background: white;padding: 20px;width: 100%;">
                <div class="row">
                    <div class="col-xl-12">
                        <div style="box-shadow: 0px 0px 1px 0px black;border-radius: 2px;padding: 10px;">
                            <div>
                                <p class="text-right">&nbsp;!تهانينا</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div style="padding: 20px 0px;">
                        </div>
                    </div>
                    <div class="col">
                        <div style="padding: 20px 0px;">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="div_gifts">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div>
                                                    <img src="{{asset($gift->img_path)}}"
                                                         class="img_gifts">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div>
                                                                <div class="form-group">
                                                                    <h4 class="text-right heading_gifts">{{$gift->text}}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div>
                                                                <div class="form-group">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div>
                            <div style="width: fit-content;margin: auto;">
                                <a href="#" class="link_cons">
                                    <img src="{{asset('assets/img/iconfinder_instagram_icon_1399542.png')}}"
                                         class="img_icons">
                                </a>
                                <a href="#" class="link_cons">
                                    <img src="{{asset('assets/img/logotype%20(1).png')}}" class="img_icons">
                                </a><a href="#" class="link_cons">
                                    <img src="{{asset('assets/img/windows-media-audio.png')}}" class="img_icons">
                                </a>
                                <a
                                    href="#" class="link_cons"><img src="{{asset('assets/img/logos.png')}}"
                                                                    class="img_icons">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    {!! \App\Models\Setting::all()->first()->code !!}
@endsection

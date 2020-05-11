@extends('front.layout.layout')
@section('contentFront')
    <div class="row" style="padding: 50px 0px;">
        <div class="col">
            <div style="margin: auto;display: block;background: rgb(20,6,56);padding: 20px;width: 100%;">
                <div class="row">
                    <div class="col">
                        <div>
                            <h3 class="text-center" style="color: white;">إتصل بنا</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="div_content_quits">
                            <form style="direction: rtl;" method="post" action="{{route('contact.post')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-xl-12">
                                        <div>
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control inputs_txt" placeholder="الإسم الكامل">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div>
                                            <div class="form-group">
                                                <input name="email" class="form-control inputs_txt" type="email" placeholder="البريد الالكتروني">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div>
                                            <div class="form-group">
                                                <input class="form-control inputs_txt" type="tel" name="phone" placeholder="الهاتف"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div>
                                            <div class="form-group">
                                                <input class="form-control inputs_txt" type="text" name="subject" placeholder="الموضوع"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div>
                                            <div class="form-group">
                                                <textarea name="message" class="form-control inputs_txt" style="max-width: 100%;min-width: 100%;max-height: 130px;min-height: 130px;" placeholder="الرسالة"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <button class="btn btn-primary btn_start" type="submit">إرسال</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div>
                            <div style="width: fit-content;margin: auto;"><a href="#" class="link_cons"><img
                                        src="{{asset('assets/img/iconfinder_instagram_icon_1399542.png')}}" class="img_icons"></a><a
                                    href="#" class="link_cons"><img src="{{asset('assets/img/logotype%20(1).png')}}"
                                                                    class="img_icons"></a><a href="#" class="link_cons"><img
                                        src="{{asset('assets/img/windows-media-audio.png')}}" class="img_icons"></a>
                                <a
                                    href="#" class="link_cons"><img src="{{asset('assets/img/logos.png')}}" class="img_icons"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

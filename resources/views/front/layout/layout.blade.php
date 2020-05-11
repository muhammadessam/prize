<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>project_customer_psd1</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mada">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/untitled.css')}}">

</head>
<body
    style="background-image: url(&quot;assets/img/backgorund.png&quot;);background-size: cover;background-repeat: no-repeat;background-attachment: fixed;font-family: Cairo;">
<div
    style="position: fixed;width: 100%;height: 100%;top: 0;left: 0;background-image: url(&quot;{{asset('assets/img/backgorund_trans.png')}}&quot;);background-position: center;background-attachment: fixed;background-repeat: no-repeat;z-index: 0;"></div>
<header style="margin-top: 30px;z-index: 10;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="width: 100%;">
                    <div style="width: fit-content;margin: auto;text-align: center;">
                        <a href="{{route('contact.get')}}" class="links_menu">
                            <div><i class="fa fa-envelope"></i></div>
                            <div><span>إتصل بنا</span></div>
                        </a>
                        <a href="#" class="links_menu">
                            <div><i class="fa fa-user"></i></div>
                            <div><span>التسجيل</span></div>
                        </a>
                        <a href="#" class="links_menu">
                            <div><i class="fa fa-pencil"></i></div>
                            <div><span>من نحن</span></div>
                        </a>
                        <a href="{{url('/')}}" class="links_menu">
                            <div><i class="fa fa-home"></i></div>
                            <div><span>الرئيسية</span></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div style="width: 100%;"><img src="{{asset('assets/img/LOGO000.png')}}"
                                               style="height: 70px;margin: auto;display: block;margin: 40px auto;">
                </div>
            </div>
        </div>
    </div>
</header>
<main style="z-index: 10;">
    <div class="container" id="app">
        @yield('contentFront')
    </div>
</main>
<footer style="background: rgb(20,6,56);color: white;padding: 0px;z-index: 10;position: relative;">
    <div class="container" style="height: 100%;">
        <div class="row justify-content-center align-items-center" style="height: 100%;">
            <div class="col-sm-12 col-md-5 col-lg-6 col-xl-6">
                <div><a href="#"><img src="{{asset('assets/img/sgywin_41.png')}}" style="height: 50px;margin: auto;display: block;"></a>
                </div>
            </div>
            <div class="col">
                <div><p class="text-center" style="margin: 0;padding:5px 0px">
                        2020 م
                        <span style="color:#efca20">sgy winner </span>
                        جميع الحقوق محوفوضة &copy ل </p></div>
            </div>
        </div>
    </div>
</footer>
@routes
@include('sweetalert::alert')
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>

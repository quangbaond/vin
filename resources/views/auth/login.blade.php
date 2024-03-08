
<html style="font-size: 48px;" lang="vi">

<!-- Mirrored from vinhomess.org/?a=login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2024 17:07:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="renderer" content="webkit" />
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1" />
    <meta name="Robots" contect="none" />
    <link href="statics/css/app.cc8ec.css" rel="stylesheet" />
    <link href="statics/css/login/login.min.css" rel="stylesheet">
    <title>Vinhomes Lottery </title>

</head>
<style>
    .login-header {
        text-align: center; /* Căn giữa theo chiều ngang */
        background-color: #f0f0f0;
        margin-bottom: 20px;/* Màu nền cho header (để xem rõ hình ảnh căn giữa) */
    }

    .logo-form {
        display: flex;
        justify-content: center; /* Căn giữa theo chiều ngang trong phần tử div */
        align-items: center; /* Căn giữa theo chiều dọc trong phần tử div */
    }

    .logo-form img {
        max-width: 300px; /* Giới hạn chiều rộng của hình ảnh */
        max-height: 70%; /* Đảm bảo hình ảnh không vượt quá chiều cao của div */
        height: auto; /* Đảm bảo tỷ lệ khung hình bảo toàn */
    }
    .LoginItem {
        overflow: hidden!important;
        color: #1273f6;
    }
    .Login, body, .login-header {
        background-color: #FFFFFF!important;
    }
    .login_btn Button{
        display: flex;
        background-color: #1273f6
    }
    .swal2-container {
        max-width: 750px;
        height: auto;
    }
    .error {
        color: red;
    }
</style>
<body>
    <form action="{{ route('login') }}" method="post" id="login_form" class="ng-pristine ng-valid">
        @csrf
        <div id="app">
            <div class="Login">
                <div class="LoginItem">
                    <header class="login-header">
                        <div class="logo-form">
                            <img src="templates/default/vinpearl-logo.jpg" href="#">
                        </div>
                    </header>
                    <content>
                        <div class="content-input">
                            <div class="LoginInput">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAUCAMAAABcfiZ7AAAAeFBMVEUAAABhYWFiYmJlZWVlZWVlZWVgYGBlZWVlZWVmZmZlZWVlZWVmZmZmZmZlZWVkZGRkZGRlZWVlZWVlZWVmZmZlZWVlZWVaWlplZWVmZmZlZWVlZWVmZmZlZWVkZGRkZGRiYmJmZmZlZWVmZmZmZmZiYmJlZWVmZmbwQ5diAAAAJ3RSTlMADB7x5ocP4NzWxKR7VU5GQjztx7aAbQW7qZaPcmhSJxnOsK1kNDA90Z/nAAAAnUlEQVQY003MVxKDMAxF0We50DGd0Enf/w6T8Qjw+ZDu6ENwjK6rWguc3kFiySbBB0yEL7eXqOfL3HDcOo5h4egSjjjnyG4cU8uhNUehjNu7KsHGmP6T6hGHvpXN1Mi0x4WyNCOcRBorKaWKU8GPg2e+EdGWP0L32lYrDllVAEbluKyBgU7gG1pEBXz2DrnDRxJhJzxmjlCGX19U/gAkDQjMVctQlAAAAABJRU5ErkJggg==" />
                                <input type="text"  name="username" id="username" value="{{ old('username') }}" placeholder="Nhập tên đăng nhập"/>
                                <div>
                                    <div class="active-opacity" style="display: none;">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAMAAABF0y+mAAAAYFBMVEUAAAC2trbY2NjX19fY2NjY2NjY2NjX19fY2NjY2NjX19fX19fY2NjY2NjY2NjX19fW1tbX19fX19fY2NjX19fS0tLX19fX19fX19fW1tbW1tbW1tbY2NjX19fY2NjY2NgDtBj4AAAAH3RSTlMAB6uk8dupp6L4573KxGFBPCX6iFsh1IBHRTo3M4uJxaXMuAAAAM5JREFUKM990tkOgyAQheGjghYQd7vazvu/ZQ2YcdDE/0bjF1EWcN3orDHWjW8cazRxukmorymp7nd7KjqkXmwDnRo27fk9mYoji+/J6vCf4fZTEVd8wqVZMc6hyiq2rIwzAloiVrZYhy9tlasGy2lrhCep0sjBktDiJowsBpIqjUyCtywrErTS8lKqhZdGJNXhJ20t33VEJy3VN6ClSdW88N1qrHG06WLL/NVmzwi15mymBTY9H7AW3OxT8zNk032n+4Rjy8NppbR7LPzoDzkdQHGvQ2ADAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>

                            </div>
                            @if($errors->has('username'))
                                <span class="error">{{ $errors->first('username') }}</span>
                            @endif
                            @if(session()->has('error'))
                                <span class="error">{{ session()->get('error') }}</span>
                            @endif
                            <div class="LoginInput">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAATCAMAAACqTK3AAAAAV1BMVEUAAACZmZmVlZWYmJiZmZmYmJiWlpaZmZmYmJiZmZmYmJiZmZmYmJiYmJiZmZmZmZmYmJiZmZmXl5eWlpaWlpaLi4uYmJiYmJiZmZmZmZmZmZmWlpaZmZlgZZ36AAAAHHRSTlMA8jUq+khO6mF/V97QwoqEeGpcIhkL37WljA8ISoCCigAAAHVJREFUGNN9jUkOhDAMBG3IjLOHsMzq/78TFEGQg0Rd2iq12lD4GU/ovzNUNLk42uRxOMzI5l+OrHbXK1Pr/Cj5cVAJoQTFU2W1bF1kAWpA0wsSwTYoeKo7ZXWrJuaubb3D0qo8XLbm6fbjVWHqBJHAvlDg7ApzdQbYC0I+zAAAAABJRU5ErkJggg==" />
                                <input type="password" id="password" name="password" value="{{ old('password') }}"placeholder="Nhập mật khẩu" />
                                <div>
                                    <div class="active-opacity" style="display: none;">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAUCAMAAADWUb86AAAAbFBMVEUAAACFhYWTk5OYmJiZmZmYmJiXl5eTk5OZmZmZmZmZmZmZmZmWlpaZmZmYmJiYmJiXl5eYmJiYmJiYmJiWlpaYmJiYmJiZmZmYmJiXl5eYmJiYmJiVlZWZmZmZmZmYmJiZmZmYmJiYmJiZmZkchPT5AAAAI3RSTlMABAq8Y14pHPvn0KAj9d/HFfJyWTvrvod3ZkQ0EOHWppF7bWTtrTwAAADiSURBVCjPhZDXcoMwEAAlZFCjVwOu2f//x2QgHjvCJvuiu5udKxIi/dJiF12nQsiCXu5ZsqeQQjqI97QYnFweuzM2tWsbqUBFn6yoB7UslXTg5YfFPHTJGjcGfPS2lwfTPLIjoNI3eyng+MzvgD3IYOBogftracyAojk9K6e4ALJR/KF1ALmPZ12Weo79GcC1IqA1LJjK2oqVLBEhVyguvHBxcAutydDpaBpUXkGVq2GKkmzb7vq4PKqhXj/xBkOg1bjfMw9wWCN9Nk2gybYUoSbSWWwJtX2SPP9Z/H/Kclv7BjqwFMHa2cJcAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>

                            </div>
                            @if($errors->has('password'))
                                <span class="error">{{ $errors->first('password') }}</span>
                            @endif
                            <div class="login_btn Button" >
                                <input class="btn aftercheck" type="submit" id="submit" name="submit" value="xác nhận" />
                            </div>
                            <div class="content-tab">
                                <div style="" class="tab-title">
                                    <span class="active">Đăng nhập</span>
                                    <div ><a href="{{route('register')}}" class="">Đăng ký</a></div>
                                </div>
                                <div class="tab-transform" style="">
                                    <p class="active" style="left: 0px;"></p>
                                </div>
                            </div>
                        </div>
                        <div class="input-link-div">
                            <div class="input-link-2"></div>
                        </div>
                    </content>
                </div>

            </div>
        </div>
    </form>
{{--    @include('sweetalert::alert')--}}
</body>
</html>

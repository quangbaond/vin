<html style="font-size: 48px;" lang="vi">

<!-- Mirrored from vinhomess.org/?a=login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2024 17:07:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8"/>
    <meta name="renderer" content="webkit"/>
    <meta name="viewport"
          content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1"/>
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1"/>
    <meta name="Robots" contect="none"/>
    <link href="statics/css/app.cc8ec.css" rel="stylesheet"/>
    <link href="statics/css/login/login.min.css" rel="stylesheet">
    <title>Vinhomes Lottery </title>

</head>
<style>
    .login-header {
        text-align: center; /* Căn giữa theo chiều ngang */
        background-color: #f0f0f0;
        margin-bottom: 20px; /* Màu nền cho header (để xem rõ hình ảnh căn giữa) */
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
        overflow: hidden !important;
        color: #1273f6;
    }

    .Login, body, .login-header {
        background-color: #FFFFFF !important;
    }

    .login_btn Button {
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

    .submit input {
        background: #1273f6;
        width: 100%;
        height: 40px;
        display: inline-block;
        border: none;
        cursor: pointer;
        color: #FFF;
        font-size: 16px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        margin: 0 auto;
    }
</style>
<body>
<div id="app">
    <div class="Register">
        <header class="header-nav">
            <div class="header-back active-opacity">
                <a href="{{ route('login') }}"><img class="HeaderImg"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAABCCAYAAAA/rXTfAAAAAXNSR0IArs4c6QAAA1ZJREFUaAXFmk2ITWEYx+8dZhpmTFOimYymqCmKMsWCohihUFgwhcWwGFOG8rEZFigNCyyQSGHBggULFqOGhcJCMmVC46tEpEHIt/F7dN+6ne7pfTb/M0/9e8/7vs97/r9zztx7nnPu5HLDEENDQ3m0GfWjT6gXNQ8DSi6H8Qh0ASXjJwMzMoXCsAydS5IU9XsyA8LULtPpIvNSmx+zBDpeiiAxNpAJEKZHEsZp3f1yIJwPprknxu/Rr5QCYbAvYZrW7WNirBpmd5p7Yty+i8arYXYmTNO6T5ioV8NsTXNPjD+l36CG6UiYpnVfMNGohtmIyd80gqLxV2xPUsOsx+RPkWna5hsmmtQwrU6Yt+RNUcOswuQXisV7EqapYZZjYiVDLD6QoC0rMFiCfsRImLfia6b6zLRg8s0B85mc2WqYeZh8dcBYzlw1zBxM7KhjYWdvgRpmFib29xCL7yQsVsM0Y2KflFjYJ26ZGmY6JvYdEgv7LlqphpmKybsYCfO/0Ro1TBMmdt+Jhd2/1qlhJmNid+RY2J19gxqmEZOXMZLC/CY1TANGz5wwW9Qw9YBYfeuJHWqYaiis8vfELimM7RyKQx4ScvbKYQpAzx1ABzKBKQANRoC+MK8tyouOtozt20X9UptVDPYCpX1sCc4Y2S3CU3ANkDchrJO2GM13Qj0mr04KE3aO0SJk9UwsHpIwLqyTthgtRZ4niQfkaV+fhCPFaAXyPGvZC6basE7aYrQaWZ0Ti7sk1Ehhws4xWos8z+u3yKsO66QtRm3I6p5Y3CRhtBQm7Byj9hhNYf46rfalZRFUpxPqGnkVYZ20xWi7E+oKeeVSmLBzjLqcUJfIGxnWSVuM9jihzpNnN299YNTthDqbJZS30jwFVF5/mnDA6KjzTB3LCsh+AzvphDqcJdQZJ1R3VlD206V9qjyR2dOL/bh70UNETldWZ6ocs8tOKO0TcDhiYCrQVSdUZ1gnbYGpRD1OqHYpTNg5MKPQDQeU1VttYZ20xagKWUUZC6tMW6UwYecYjUF3YkTM2zvwiWGdtMWoFtlTSiy2ZVIe5PN5+xeKhagvcuT1mQAZBFCDNC2o3/opcT9lXDfMNatDj0pcO7uk2VSZycPDuAadQK8Lsorh/1PwP29T2eqMB1TeAAAAAElFTkSuQmCC"/></a>
            </div>
            <div class="header-title">
                Đăng ký
            </div>
            <div class="header-right" style="visibility: hidden;"></div>
        </header>
        <div class="content-tab">
            <div class="tab-title">
                <span class="active">Đăng ký</span>
                <div><a href="{{ route('login')  }}" class="">Đăng nhập</a></div>
            </div>
            <div class="tab-transform">
                <p class="active" style="left: 0px;"></p>
            </div>
        </div>
        <form action="{{ route('register') }}" method="post" id="reg_form" >
            @csrf
            <div class="content">
                <div class="NameRegister">
                    <div class="LoginInput">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAUCAMAAABcfiZ7AAAAeFBMVEUAAABhYWFiYmJlZWVlZWVlZWVgYGBlZWVlZWVmZmZlZWVlZWVmZmZmZmZlZWVkZGRkZGRlZWVlZWVlZWVmZmZlZWVlZWVaWlplZWVmZmZlZWVlZWVmZmZlZWVkZGRkZGRiYmJmZmZlZWVmZmZmZmZiYmJlZWVmZmbwQ5diAAAAJ3RSTlMADB7x5ocP4NzWxKR7VU5GQjztx7aAbQW7qZaPcmhSJxnOsK1kNDA90Z/nAAAAnUlEQVQY003MVxKDMAxF0We50DGd0Enf/w6T8Qjw+ZDu6ENwjK6rWguc3kFiySbBB0yEL7eXqOfL3HDcOo5h4egSjjjnyG4cU8uhNUehjNu7KsHGmP6T6hGHvpXN1Mi0x4WyNCOcRBorKaWKU8GPg2e+EdGWP0L32lYrDllVAEbluKyBgU7gG1pEBXz2DrnDRxJhJzxmjlCGX19U/gAkDQjMVctQlAAAAABJRU5ErkJggg=="/>
                        <input placeholder="Nhập tên đăng nhập" type="text" id="username" name="username" value="{{ old('username') }}"/>
                        <div></div>
                    </div>
                    @if($errors->has('username'))
                        <span class="error">{{ $errors->first('username') }}</span>
                    @endif
                    <div class="NameReg-title">

                        Vui lòng nhập 6~20 ký tự chữ cái, số hoặc kết hợp và phải viết liền
                    </div>
                    <div class="LoginInput">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAATCAMAAACqTK3AAAAAV1BMVEUAAACZmZmVlZWYmJiZmZmYmJiWlpaZmZmYmJiZmZmYmJiZmZmYmJiYmJiZmZmZmZmYmJiZmZmXl5eWlpaWlpaLi4uYmJiYmJiZmZmZmZmZmZmWlpaZmZlgZZ36AAAAHHRSTlMA8jUq+khO6mF/V97QwoqEeGpcIhkL37WljA8ISoCCigAAAHVJREFUGNN9jUkOhDAMBG3IjLOHsMzq/78TFEGQg0Rd2iq12lD4GU/ovzNUNLk42uRxOMzI5l+OrHbXK1Pr/Cj5cVAJoQTFU2W1bF1kAWpA0wsSwTYoeKo7ZXWrJuaubb3D0qo8XLbm6fbjVWHqBJHAvlDg7ApzdQbYC0I+zAAAAABJRU5ErkJggg=="/>
                        <input type="password"  id="password" name="password" placeholder="Nhập mật khẩu"
                               value=""/>
                        <div>
                        </div>
                    </div>
                    @if($errors->has('password'))
                        <span class="error">{{ $errors->first('password') }}</span>
                    @endif
                    <div class="NameReg-title">
                        Vui lòng nhập kết hợp 6-16 ký tự chữ cái và số
                    </div>
                    <div class="LoginInput">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAUCAMAAABcfiZ7AAAAeFBMVEUAAABhYWFiYmJlZWVlZWVlZWVgYGBlZWVlZWVmZmZlZWVlZWVmZmZmZmZlZWVkZGRkZGRlZWVlZWVlZWVmZmZlZWVlZWVaWlplZWVmZmZlZWVlZWVmZmZlZWVkZGRkZGRiYmJmZmZlZWVmZmZmZmZiYmJlZWVmZmbwQ5diAAAAJ3RSTlMADB7x5ocP4NzWxKR7VU5GQjztx7aAbQW7qZaPcmhSJxnOsK1kNDA90Z/nAAAAnUlEQVQY003MVxKDMAxF0We50DGd0Enf/w6T8Qjw+ZDu6ENwjK6rWguc3kFiySbBB0yEL7eXqOfL3HDcOo5h4egSjjjnyG4cU8uhNUehjNu7KsHGmP6T6hGHvpXN1Mi0x4WyNCOcRBorKaWKU8GPg2e+EdGWP0L32lYrDllVAEbluKyBgU7gG1pEBXz2DrnDRxJhJzxmjlCGX19U/gAkDQjMVctQlAAAAABJRU5ErkJggg=="/>
                        <input class="inputxt name" type="text" id="agent" name="code" value="{{ old('code') }}"
                               placeholder="Nhập mã mời"/>
                        <div></div>
                    </div>
                    @if($errors->has('code'))
                        <span class="error">{{ $errors->first('code') }}</span>
                    @endif
                    <div class="NameReg-title">
                        Vui lòng nhập mã giới thiệu
                    </div>
                    <div class="LoginInput">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAATCAMAAACqTK3AAAAAclBMVEUAAACYmJiZmZmYmJiZmZmXl5eYmJiJiYmAgICZmZmZmZmYmJiYmJiYmJiZmZmYmJiYmJiYmJiYmJiYmJiYmJiZmZmYmJiYmJiZmZmXl5eYmJiZmZmYmJiWlpaYmJiYmJiZmZmYmJiXl5eQkJCZmZmZmZmHGoIrAAAAJnRSTlMA9f4w4DVEBgLr3Go8GObSuH1dHuLEpJuMgnVkVCKysKxKKQ/KmHThZdgAAAC1SURBVBjTVY9XDoMwEERn3QBj00KHUJP7XzHEtoR4P5ae1juz8MSpzscIN9HcZLP6iCpIMzQkyvOarAQ1vQK+9VbKOHw/pi7rwSQeqASMP5W8lc+V4A8VtWwEz5yq3L6zYCUga6dyUoDN2QRACegZeAlSh6AdF2OBtoNzSeLbFCUM2b/T+u3Mi13vsri0cF63ArDJcDfbyQ1zGuJgDFXhhnq1vjylCNiNesPTXCjcmFZnxeQjfhbtCG2V6MrrAAAAAElFTkSuQmCC"/>
                        <input type="text" id="name" name="name" placeholder=" Biệt danh" value="{{ old('name') }}"/>
                    </div>
                    @if($errors->has('name'))
                        <span class="error">{{ $errors->first('name') }}</span>
                    @endif
                    <div class="NameReg-title"></div>
                    <div class="NameReg-title"></div>
                    <div class="Register-clause">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAQlBMVEUAAAD/Tlb/TlX/TlX/TVn/VVX/TlX/TVX/////UFj/vsH/xcj/6+z/ZWz/h4z/8fL/3t//tbn/i5H/c3n/b3b/WmFPaxKUAAAAB3RSTlMAkvPVKwa9zEb/gAAAAJZJREFUOMud080OAiEMBOAW2IWuiv/v/6oGPYyY2kl2rvMFDm1lpGhO9Scpa5FPFrXqxnR592v9m3UIrUFUpFgErIwH4idyDLKkGCSpJD6wRwzs0DqA27crgNtvzhfm9gD3c/d6gEtrHb0DTsch0AN8ixt6gEmgB5gEeoBJbGQWTzqsHYAuDF05urR07dnh0NPjx0vP/wWSlxtlOgJ6qAAAAABJRU5ErkJggg=="/>
                        <div>

                            Tôi đã đủ 18 tuổi và đồng ý tuân theo <a class="active-opacity" href="#/RegisterText">《điều
                                khoản đăng ký》</a>
                        </div>
                    </div>
                    <div class="submit">
                        <input type="submit" id="submit" name="submit" value="Đăng ký ngay"/>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>

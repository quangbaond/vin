<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Download</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- // meta favicon --}}
    <link rel="icon" href="templates/default/vinpearl-logo.jpg" type="image/x-icon" />
    <link rel="shortcut icon" href="templates/default/vinpearl-logo.jpg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="templates/default/vinpearl-logo.jpg" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="templates/default/vinpearl-logo.jpg" type="image/x-icon" />

    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0 auto;
            min-width: 320px;
            max-width: 750px;
            /* background: #f1f1f1; */
            /* background-size: cover; */
            /* font-size: .3rem; */
            /* line-height: 1.5; */
            color: #4c4743;
            -webkit-text-size-adjust: 100% !important;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

        }

        a {
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .rating {
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 5px;
            margin-top: 10px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin: 10px 10px;

        }

        .loader {
            width: 48px;
            height: 48px;
            border: 5px solid #FFF;
            border-bottom-color: #FF3D00;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .wraper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .swiper {
            /* width: 600px; */
            height: 300px;
        }
    </style>
</head>

<body>
    <div class="center">
        {{-- <h1>Download File</h1> --}}
        <div style="width: 50%;">
            <img src="templates/default/vinpearl-logo.jpg" alt="logo" width="100%">
            <p style="text-align: center">Tệp tin: &nbsp; Vinhomes.apk</p>
            <p style="text-align: center">Dung Lượng:&nbsp; 30mb</p>
            <p style="text-align: center">Lượt tải:&nbsp; 14.368</p>
        </div>
        <a href="{{ route('downloadApp') }}">Tải xuống</a>
    </div>
    <div class="hinh_anh" style="margin: 10px 0;">
        {{-- <h4>Hình ảnh V</h4> --}}
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="images/anh1.jpg" alt="logo" width="100%">
                </div>
                <div class="swiper-slide">
                    <img src="images/anh2.jpg" alt="logo" width="100%">
                </div>
                <div class="swiper-slide">
                    <img src="images/anh3.jpg" alt="logo" width="100%">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
    <div class="danh_gia">
        <h4 style="margin: 10px 10px;">Đánh giá khách hàng</h4>
        <div class="rating">
            <div style="margin-right: 10px">Nh****</div>
            <div>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>

                <p style="font-size: 14px">
                    Tôi rất hài lòng với ứng dụng này, nên tải nha mn <br>
                </p>
            </div>
        </div>
        <div class="rating">
            <div style="margin-right: 10px">Bi****</div>
            <div>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>

                <p style="font-size: 14px">
                    Rút tiền nhanh vãi... ưng <br>
                </p>
            </div>
        </div>
        <div class="rating">
            <div style="margin-right: 10px">Ph****</div>
            <div>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>

                <p style="font-size: 14px">
                    Tôi chỉ dùng app 1 lần từ lúc mở mắt đến lúc nhắm mắt, kiếm tiền thế này thì không muốn thoát <br>
                </p>
            </div>
        </div>
        <div class="rating">
            <div style="margin-right: 10px">Ki****</div>
            <div>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>

                <p style="font-size: 14px">
                    5 sao nha, đầu tư có lời 100% mỗi tội ít vốn, huuhu <br>
                </p>
            </div>
        </div>
        <div class="rating">
            <div style="margin-right: 10px">Te****</div>
            <div>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>

                <p style="font-size: 14px">
                    Hình như có gì đó sai sai, app ngon mà sao lượt tải ít vậy ta <br>
                </p>
            </div>
        </div>
        <div class="rating">
            <div style="margin-right: 10px">Kh****</div>
            <div>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i>
                {{-- <i style="color: #a9a907; backgroud: #a9a907" class="fa-solid fa-star"></i> --}}

                <p style="font-size: 14px">
                    kiếm tiền tốt nhưng app hơi lag, 4 sao <br>
                </p>
            </div>
        </div>
        <div class="rating" style="justify-content: center">
            <a href="#" id="more">Xem thêm</a>
        </div>
    </div>
    <div class="wraper">
        <span class="loader"></span>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const more = document.getElementById('more');
        more.addEventListener('click', (e) => {
            e.preventDefault();
            const wraper = document.querySelector('.wraper');
            wraper.style.display = 'flex';
            setTimeout(() => {
                wraper.style.display = 'none';
                alert('Hệ thống đang cập nhật, vui lòng thử lại sau!')
            }, 2000)

        })
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'vertical',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
</body>

</html>

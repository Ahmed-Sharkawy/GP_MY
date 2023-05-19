<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REHLA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="icon" href="{{ asset('frontend/img/webpage-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
</head>

<body>
    <a href="{{ route('home.cart') }}" target="_blank">
        <i class="fa-solid fa-cart-shopping shop"></i>
    </a>

    <!-- start header -->
    <div class="header" id="header">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">رحلة</a>
            <ul class="main-nav">
                <li><a href="{{ route('home.program') }}">البرامج السياحية</a></li>
                <li><a href="{{ route('home.hotel') }}">الفنادق</a></li>
                <li><a href="{{ route('home.about') }}"> من نحن</a></li>
                <li><a href="{{ route('home.contact') }} "> تواصل معنا</a></li>
            </ul>
        </div>
    </div>
    <!-- end header -->

    @yield('main')

    <!-- start footer -->
    <div class="footer" id="foot">
        <div class="container">
            <div class="box">
                <h3>رحلة</h3>
                <ul class="social">
                    <li>
                        <a target="_blank" href="#" class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="whats">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mess">
                            <i class="fa-brands fa-facebook-messenger"></i>
                        </a>
                    </li>
                </ul>
                <p class="text">
                    نبذه مختصره نبذه مختصره نبذه مختصره نبذه مختصره نبذه مختصره نبذه
                    مختصره
                </p>
            </div>
            <div class="box">
                <ul class="links">
                    <li><a href="goals.html">اهدافنا</a></li>
                    <li><a href="tour.html">احدث الجولات</a></li>
                    <li>
                        <a href="rehla.html#details" target="_blank">تفاصيل الرحلات</a>
                    </li>
                </ul>
            </div>
            <div class="box">
                <div class="line">
                    <i class="fas fa-map-marker-alt fa-fw main"></i>
                    <div class="info">القاهرة</div>
                </div>
                <div class="line">
                    <i class="far fa-clock fa-fw main"></i>
                    <div class="info">ساعات العمل من 8 صباحا : 5 مساءا</div>
                </div>
                <div class="line">
                    <i class="fas fa-phone-volume fa-fw main"></i>
                    <div class="info">
                        <span>01111111111</span>
                    </div>
                </div>
            </div>
            <div class="box footer-gallery">
                <img src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                <img src="{{ asset('frontend/img/fon2.jpg') }}" alt="" />
                <img src="{{ asset('frontend/img/fon3.jpg') }}" alt="" />
                <img src="{{ asset('frontend/img/land.avif') }}" alt="" />
                <img src="{{ asset('frontend/img/landing1.jpg') }}" alt="" />
            </div>
        </div>
        <p class="copyright">
            Made With love By <span class="emad">REHLA</span> TEAM
        </p>
    </div>
    <!-- end footer -->

    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/all.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>

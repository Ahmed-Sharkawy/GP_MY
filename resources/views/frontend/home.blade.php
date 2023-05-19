@extends('frontend.layout.main')

@section('main')
    <!-- start landing -->
    <div class="landing" id="landing">
        <div class="container">
            <div class="text">
                <h1>اكتشف رحلتك</h1>
                <p>
                    تُعدّ مصر إحدى أهمّ الوجهات السياحية في العالم، وذلك بسبب جمالها
                    الطبيعيّ، وثروتها التاريخيّة، ومعالمها الدينية والثقافية، والآثار
                    الفرعونية
                </p>
            </div>
            <div class="img">
                <img src="{{ asset('frontend/img/landing2.png') }}" alt="" />
            </div>
        </div>
        <a href="#card" class="go-down">
            <i class="fas fa-angle-double-down fa-2x"></i>
        </a>
    </div>
    <!-- end landing -->

    <!-- start about -->
    <div class="about">
        <h2 class="main-title">من نحن</h2>
        <div class="container">
            <div class="row rounded">
                <div class="content col-12 col-md-6 ">
                    <h2>شركه رحله</h2>
                    <p>شركه رحله هي الشركه المتخصصه في السياحه لتقديم عروض سياحيه رحلات سياحيه مغريه جدا و باسعار رخيصه
                        وتوفر وسائل نقل داخل مصر لتوفيق حركه التنقل بسهوله لكل سائح لزياره معالمها والتعرف عليها</p>
                    <a href="{{ route('home.about') }}"><button class="py-1 mt-3">اعرف المزيد</button></a>
                </div>
                <div class="imge col-md-6 p-0 col-12">
                    <img src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!-- end about -->

    <!-- start sections -->
    <div class="card" id="card">
        <div class="main-container">
            <h2 class="main-title">اقسام الموقع</h2>
            <!-- start cards -->
            <div class="cards text-center">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-md-6 col-lg-4">
                            <div class="box">
                                <img class="img-fluid" src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                                <h4 class="p-3 text-light">الاهداف</h4>
                                <blockquote>
                                    نبذه مختصرة نبذه مختصرة نبذه مختصرة نبذه مختصرةنبذه مختصرة
                                    نبذه مختصرةنبذه مختصرةنبذه مختصرةنبذه مختصرةنبذه مختصرة
                                </blockquote>
                                <a href="goals.html">
                                    <button type="button" class="btn btn-primary mb-4">
                                        اذهب
                                    </button></a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="box">
                                <img class="img-fluid" src="{{ asset('frontend/img/fon3.jpg') }}" alt="" />
                                <h4 class="p-3 text-light">برامج السياحة</h4>
                                <blockquote>
                                    نبذه مختصرة نبذه مختصرة نبذه مختصرة نبذه مختصرةنبذه مختصرة
                                    نبذه مختصرةنبذه مختصرةنبذه مختصرةنبذه مختصرةنبذه مختصرة
                                </blockquote>
                                <a href="program.html">
                                    <button type="button" class="btn btn-primary mb-4">
                                        اذهب
                                    </button></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box">
                                <img class="img-fluid" src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                                <h4 class="p-3 text-light" >الفنادق</h4>
                                <blockquote>
                                    نبذه مختصرة نبذه مختصرة نبذه مختصرة نبذه مختصرةنبذه مختصرة
                                    نبذه مختصرةنبذه مختصرةنبذه مختصرةنبذه مختصرةنبذه مختصرة
                                </blockquote>
                                <a href="{{ route('home.hotel') }}">
                                    <button type="button" class="btn btn-primary mb-4">
                                        اذهب
                                    </button></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box">
                                <img class="img-fluid" src="{{ asset('frontend/img/fon3.jpg') }}" alt="" />
                                <h4 class="p-3 text-light">الجولات</h4>
                                <blockquote>
                                    نبذه مختصرة نبذه مختصرة نبذه مختصرة نبذه مختصرةنبذه مختصرة
                                    نبذه مختصرةنبذه مختصرةنبذه مختصرةنبذه مختصرةنبذه مختصرة
                                </blockquote>
                                <a href="tour.html">
                                    <button type="button" class="btn btn-primary mb-4">
                                        اذهب
                                    </button></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box">
                                <img class="img-fluid" src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                                <h4 class="p-3 text-light">احجز رحلتك</h4>
                                <blockquote>
                                    نبذه مختصرة نبذه مختصرة نبذه مختصرة نبذه مختصرةنبذه مختصرة
                                    نبذه مختصرةنبذه مختصرةنبذه مختصرةنبذه مختصرةنبذه مختصرة
                                </blockquote>
                                <a href="book.html">
                                    <button type="button" class="btn btn-primary mb-4">
                                        اذهب
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end cards -->
        </div>
    </div>
    <!-- end sections-->

    <!-- start contact us -->
    <!-- start contact -->
    <section class="contact" id="contact">
        <h2 class="main-title mb-0">تواصل معنا</h2>
        <div class="content">
            <p>
                نبذه مختصرة نبذه مختصرة نبذه مختصرة نبذه مختصرةنبذه مختصرة نبذه
                مختصرةنبذه مختصرةنبذه مختصرةنبذه
            </p>
        </div>
        <div class="container">
            <div class="contactForm">
                <form action="" method="POST">
                    <h2>إرسال رسالة</h2>
                    <div class="inputBox">
                        <label for="">اسمك</label>
                        <input type="text" required />
                    </div>
                    <div class="inputBox">
                        <label for="">الجيميل الخاص بك</label>
                        <input type="email" name="email" placeholder="" required />
                    </div>
                    <div class="inputBox">
                        <label for="">اكتب رسالتك</label>
                        <input type="text" name="message" required />
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="ارسل" />
                    </div>
                </form>
            </div>
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h3>العنوان</h3>
                        <p>القاهرة</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone-volume"></i></div>
                    <div class="text">
                        <h3>الهاتف</h3>
                        <p>01111111111</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="text">
                        <h3>الايميل</h3>
                        <p style="text-transform: lowercase">RehlaTeam@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact us -->
@endsection

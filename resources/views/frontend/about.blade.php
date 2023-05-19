@extends('frontend.layout.main')

@section('main')
    <div class="about">
        <div class="container">
            <div class="row mt-5">
                <div class="imge col-md-6 col-12">
                    <img src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                </div>
                <div class="content col-12 col-md-6">
                    <h2>شركه رحله</h2>
                    <p>شركه رحله هي الشركه المتخصصه في السياحه لتقديم عروض سياحيه رحلات سياحيه مغريه جدا و باسعار رخيصه
                        وتوفر وسائل نقل داخل مصر لتوفيق حركه التنقل بسهوله لكل سائح لزياره معالمها والتعرف عليها</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Strat Teame -->
    <div class="testimonials" id="testimonials">
        <h2 class="main-title mt-5">فريق العمل</h2>
        <div class="container">
            <div class="box">
                <img decoding="async" src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                <h3>محمد علي</h3>
                <span class="title">Marketing</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est
                    natus
                    quaerat ducimus
                </p>
            </div>
            <div class="box">
                <img decoding="async" src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                <h3>ابراهيم سمير</h3>
                <span class="title">Marketing</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est
                    natus
                    quaerat ducimus
                </p>
            </div>
            <div class="box">
                <img decoding="async" src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                <h3>محمود هشام</h3>
                <span class="title">Marketing</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est
                    natus
                    quaerat ducimus
                </p>
            </div>
            <div class="box">
                <img decoding="async" src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                <h3>منى رضا</h3>
                <span class="title">Marketing</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est
                    natus
                    quaerat ducimus
                </p>
            </div>
            <div class="box">
                <img decoding="async" src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                <h3>اسماء علي</h3>
                <span class="title">Marketing</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est
                    natus
                    quaerat ducimus
                </p>
            </div>
            <div class="box">
                <img decoding="async" src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                <h3>مينا حنا</h3>
                <span class="title">Marketing</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est
                    natus
                    quaerat ducimus
                </p>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->
@endsection

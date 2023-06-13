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

            @foreach ($teams as $team)
                <div class="box">
                    <img decoding="async" src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                    <h3>{{ $team->name }}</h3>
                    <span class="title">{{ $team->title }}</span>
                    <div class="rate">

                        @for ($i = 0; $i < $team->rating; $i++)
                            <i style="color: #2196f3;" class="fa-solid fa-star"></i>
                        @endfor

                        @for ($i = 0; $i < 5 - $team->rating; $i++)
                            <i style="color: #2196f3;" class="fa-regular fa-star"></i>
                        @endfor

                    </div>
                    <p>{{ $team->description }}</p>
                </div>
            @endforeach

        </div>
    </div>
    <!-- End Testimonials -->
@endsection

@extends('frontend.layout.main')

@section('main')
    <div class="prog" id="prog">
        <h2 class="main-title">برامج السياحة</h2>
        <div class="container">
            @foreach ($trips as $trip)
                {{-- {{ dd($trip) }} --}}
                <div class="col-5 box">
                    <img src="{{ $trip->getFirstMediaUrl() }}" alt="">
                    <div class="content">
                        <h3>{{ $trip->name }}</h3>
                        <p>{{ $trip->description }}</p>
                        <p>العنوان : {{ $trip->location }}</p>
                        <div class="icon">
                            @php
                                $rating = 5 - $trip->rating;
                            @endphp
                            @for ($i = 0; $i < $trip->rating; $i++)
                                <i style="color: #2196f3;" class="fa-solid fa-star"></i>
                            @endfor
                            @for ($i = 0; $i < $rating; $i++)
                                <i style="color: #2196f3;" class="fa-regular fa-star"></i>
                            @endfor
                        </div>
                    </div>
                    <a href="{{ route('home.trip.plan', $trip->id) }}">
                        <div class="info">
                            تفاصيل الرحلة
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

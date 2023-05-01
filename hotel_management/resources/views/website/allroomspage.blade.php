@extends('layouts.websiteLayout')



@section('content')
    <section class="site-hero inner-page overlay"
        style="background-image: url({{ asset('website_asset/images/hero_4.jpg)') }}" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade">
                    <h1 class="heading mb-3">All Available Rooms</h1>
                    <ul class="custom-breadcrumbs mb-4">
                        <li><a href="index.html">Home</a></li>
                        <li>&bullet;</li>
                        <li>Rooms</li>
                    </ul>
                </div>
            </div>
        </div>

        <a class="mouse smoothscroll" href="#next">
            <div class="mouse-icon">
                <span class="mouse-wheel"></span>
            </div>
        </a>
    </section>
 


    <section class="section">
        <div class="container">

            <div class="row">


                @foreach ($allRooms as $Rooms)
                    <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                        <a href="{{ route('reservationpage', $Rooms->id) }}" class="room">
                            <figure class="img-wrap">
                                <img width="399px" height="250px"
                                    src="{{ asset('uploads/roomImg') }}/{{ $Rooms->picture }}" alt="Free website template"
                                    class="">
                            </figure>
                            <div class="p-3 text-center room-info">
                                <h2>{{ $Rooms->name }}</h2>
                                <span class="text-uppercase letter-spacing-1">{{ $Rooms->roomPrice }} Taka / per
                                    night</span>
                            </div>
                        </a>
                    </div>
                @endforeach



            </div>
        </div>
    </section>

   
    <section class="section bg-image overlay"
        style="background-image: url('{{ asset('website_asset/images/hero_4.jpg') }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
                    <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
                </div>
                <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
                    <a href="reservation.html" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection

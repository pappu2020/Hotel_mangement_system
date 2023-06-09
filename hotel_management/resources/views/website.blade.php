@extends('layouts.websiteLayout')





{{-- @foreach ($allHeroSectionContent as $HeroSectionContent) --}}



<section class="site-hero overlay"
    style="background-image: url({{ asset('uploads/heroSection') }}/{{ $allHeroSectionContent->first()->bannerImg }})"
    data-stellar-background-ratio="0.5">
    {{-- @endforeach --}}
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade-up">
                <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To 5 <span
                        class="fa fa-star text-primary"></span> Hotel</span>
                <h1 class="heading">A Best Place To Stay</h1>
            </div>
        </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
            <span class="mouse-wheel"></span>
        </div>
    </a>
</section>







<!-- END section -->

<section class="section bg-light pb-0">
    <div class="container">

        <div class="row check-availabilty" id="next">
            <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

                <form action="{{ route('checkAvabilityForm') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                            <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="icon-calendar"></span></div>
                                <input type="text" id="checkin_date" class="form-control" name="checkin">
                                @error('checkin')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                            <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="icon-calendar"></span></div>
                                <input type="text" id="checkout_date" class="form-control" name="checkout">
                                @error('checkout')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                            <div class="row">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="adults" class="font-weight-bold text-black">Adults</label>
                                    <div class="field-icon-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="adults" id="adults" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="children" class="font-weight-bold text-black">Children</label>
                                    <div class="field-icon-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="children" id="children" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 align-self-end">
                            <button type="submit" class="btn btn-primary btn-block text-white">Check
                                Availabilty</a>
                        </div>
                    </div>

                </form>

            </div>


        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
                <figure class="img-absolute">
                    <img src="{{ asset('website_asset/images/about/about2.webp') }}" alt="Image" class="img-fluid">
                </figure>
                <img src="{{ asset('website_asset/images/about/about.jpg') }}" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
                <h2 class="heading">Welcome!</h2>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                    coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Learn More</a> <span
                        class="mr-3 font-family-serif"><em>or</em></span> <a
                        href="https://vimeo.com/channels/staffpicks/93951774" data-fancybox
                        class="text-uppercase letter-spacing-1">See video</a></p>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Rooms &amp; Suites</h2>
                <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                    Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="row">


            @foreach ($allRooms as $Rooms)
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <a href="{{ route('reservationpage', $Rooms->id) }}" class="room">
                        <figure class="img-wrap">
                            <img width="399px" height="250px"
                                src="{{ asset('uploads/roomImg') }}/{{ $Rooms->picture }}" class="">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>{{ $Rooms->name }}</h2>
                            <span class="text-uppercase letter-spacing-1">{{ $Rooms->roomPrice }}\- TK / per
                                night</span>
                        </div>
                    </a>
                </div>
            @endforeach




        </div>
    </div>
</section>


<section class="section slider-section bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Photos</h2>
                <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                    Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">


                    @foreach ($allRoomsImg as $RoomsImg)
                        <div class="slider-item">
                            <a href="" data-fancybox="images" data-caption="Caption for this image"><img
                                    src="{{ asset('uploads/roomImg') }}/{{ $RoomsImg->picture }}"
                                    alt="Image placeholder" class="img-fluid"></a>
                        </div>
                    @endforeach


                </div>
                <!-- END slider -->
            </div>

        </div>
    </div>
</section>
<!-- END section -->

<section class="section bg-image overlay"
    style="background-image: url('{{ asset('website_asset/images/hero_3.jpg') }}');">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading text-white" data-aos="fade">Our Restaurant Menu</h2>
                <p class="text-white" data-aos="fade" data-aos-delay="100">Far far away, behind the word
                    mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated
                    they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="food-menu-tabs" data-aos="fade">
            <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active letter-spacing-2" id="mains-tab" data-toggle="tab" href="#mains"
                        role="tab" aria-controls="mains" aria-selected="true">Mains</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link letter-spacing-2" id="desserts-tab" data-toggle="tab" href="#desserts"
                        role="tab" aria-controls="desserts" aria-selected="false">Desserts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link letter-spacing-2" id="drinks-tab" data-toggle="tab" href="#drinks"
                        role="tab" aria-controls="drinks" aria-selected="false">Drinks</a>
                </li>
            </ul>
            <div class="tab-content py-5" id="myTabContent">


                <div class="tab-pane fade show active text-left" id="mains" role="tabpanel"
                    aria-labelledby="mains-tab">
                    <div class="row">


                        @foreach ($allMainFoods as $MainFoods)
                            <div class="col-md-3">



                                <div class="food-menu mb-5">
                                    <span class="d-block text-primary h4 mb-3">{{ $MainFoods->price }} Tk</span>
                                    <h3 class="text-white"><a href="#"
                                            class="text-white">{{ $MainFoods->name }}</a></h3>
                                    <p class="text-white text-opacity-7">{{ $MainFoods->description }}</p>
                                </div>

                            </div>
                        @endforeach


                    </div>


                </div> <!-- .tab-pane -->

                <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
                    <div class="row">

                        @foreach ($allDesertFoods as $MainFoods)
                            <div class="col-md-3">



                                <div class="food-menu mb-5">
                                    <span class="d-block text-primary h4 mb-3">{{ $MainFoods->price }} Tk</span>
                                    <h3 class="text-white"><a href="#"
                                            class="text-white">{{ $MainFoods->name }}</a></h3>
                                    <p class="text-white text-opacity-7">{{ $MainFoods->description }}</p>
                                </div>

                            </div>
                        @endforeach

                    </div>
                </div> <!-- .tab-pane -->
                <div class="tab-pane fade text-left" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
                    <div class="row">

                        @foreach ($allDrinksFoods as $MainFoods)
                            <div class="col-md-3">



                                <div class="food-menu mb-5">
                                    <span class="d-block text-primary h4 mb-3">{{ $MainFoods->price }} Tk</span>
                                    <h3 class="text-white"><a href="#"
                                            class="text-white">{{ $MainFoods->name }}</a></h3>
                                    <p class="text-white text-opacity-7">{{ $MainFoods->description }}</p>
                                </div>

                            </div>
                        @endforeach

                    </div>
                </div> <!-- .tab-pane -->
            </div>
        </div>
    </div>
</section>





<section class="section bg-image overlay"
    style="background-image: url('{{ asset('website_asset/images/footer.jpg') }}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
                <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
            </div>
            <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
                <a href="reservation.html" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve
                    Now</a>
            </div>
        </div>
    </div>
</section>





@section('content')
@endsection

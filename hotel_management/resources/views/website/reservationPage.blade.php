@extends('layouts.websiteLayout')

<style>
    .mybadge {
        background-color: blue !important;
    }
</style>

@section('content')
    @if (session('reservationSuccess'))
        <div class="alert alert-success mt-3 mb-3">{{ session('reservationSuccess') }}</div>
    @endif
    <section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade">
                    <h1 class="heading mb-3">Reservation Form</h1>
                    <ul class="custom-breadcrumbs mb-4">
                        <li><a href="index.html">Home</a></li>
                        <li>&bullet;</li>
                        <li>Reservation</li>
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
    <!-- END section -->

    <section class="section contact-section" id="next">
        <div class="container">
            <div class="row">
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">



                    <a href="" class="room">
                        <figure class="img-wrap">
                            <img width="399px" height="250px"
                                src="{{ asset('uploads/roomImg') }}/{{ $roomsinfo->first()->picture }}"
                                alt="Free website template" class="">
                        </figure>
                        <div class="p-3  room-info">
                            <h2>{{ $roomsinfo->first()->name }} <span
                                    class="badge text-white mybadge">{{ $roomsinfo->first()->ac_nonac }}</span></h2>
                            <span class="text-uppercase letter-spacing-1">{{ $roomsinfo->first()->roomPrice }} Taka / per
                                night <span class="badge mybadge text-white fw-bolder">{{ $roomsinfo->first()->roomPerson }}
                                    Person</span></span>
                        </div>

                    </a>


                    <form action="{{ route('reservationInsert') }}" method="post" class="bg-white p-md-5 p-4 mb-5 border">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="name">Name</label>
                                <input type="text" name="customer_name" class="form-control ">
                                @error('customer_name')
                                    <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="phone">Phone</label>
                                <input type="number" name="customer_phone" class="form-control ">
                                @error('customer_phone')
                                    <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" name="roomId" value="{{ $roomsinfo->first()->id }}">

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="text-black font-weight-bold" for="email">Email</label>
                                <input type="email" name="customer_email" class="form-control ">
                                @error('customer_email')
                                    <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="text-black font-weight-bold" for="email">Address</label>
                                <input type="text" name="customer_address" class="form-control ">
                                @error('customer_address')
                                    <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="checkin_date">Date Check In</label>
                                <input type="date" name="check_in_date" class="form-control">
                                @error('check_in_date')
                                    <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="checkout_date">Date Check Out</label>
                                <input type="date" name="check_out_date" class="form-control">
                                @error('check_out_date')
                                    <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="adults" class="font-weight-bold text-black">Adults</label>
                                <div class="field-icon-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="adult_number" id="adults" class="form-control">
                                        
                                        @for ($i=1; $i<= $roomsinfo->first()->roomPerson; $i++)

                                        <option value="{{$i}}">{{$i}}</option>
                                            
                                        @endfor
                                        
                                       
                                    </select>

                                    @error('adult_number')
                                        <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="children" class="font-weight-bold text-black">Children</label>
                                <div class="field-icon-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="children_number" id="children" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="row mb-4">
                            <div class="col-md-12 form-group">
                                <label class="text-black font-weight-bold" for="message">Notes</label>
                                <textarea name="notes" id="message" class="form-control " cols="30" rows="8"></textarea>
                                @error('notes')
                                    <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="submit" value="Reserve Now"
                                    class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="row">
                        <div class="col-md-10 ml-auto contact-info">
                            <p><span class="d-block">Address:</span> <span class="text-black"> Road 17, Block C , House 38, Kolatuli, Cox'sbazar, Bangladesh</span></p>
                            <p><span class="d-block">Phone:</span> <span class="text-black"> 012121212122</span></p>
                            <p><span class="d-block">Email:</span> <span class="text-black"> info@RelaxHotel.com</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 



    <section class="section bg-image overlay" style="background-image: url('{{ asset('website_asset/images/footer.jpg') }}');">
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

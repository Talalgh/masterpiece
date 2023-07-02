@extends('home.layout')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Shape your body</span>
                                <h1>
                                    Make your <strong>body</strong> better</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>Modern equipment</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>Proffesponal training plan</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>Unique to your needs</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->
    <!-- Banner Section Begin -->
    {{-- <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>Build your best body</h2>
                        <div class="bt-tips">Where health, beauty and fitness meet.</div>
                        @if (Auth::check())
                        <a style="display: none" href="{{route('sign-up.index')}}" class="primary-btn  btn-normal">REGISTR NOW</a>
                     @else
                     <a href="{{route('sign-up.index')}}" class="primary-btn  btn-normal">REGISTR NOW</a>
                     @endif
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Plan</span>
                        <h2>Choose your pricing plan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>Join with coach</h3>
                        <div class="pi-price">
                            <img style="height: 400px;border: 3px solid rgb(243,97,0);border-radius: 0px" src="/img/coach.jpg" alt="">
                        </div>
                        {{-- @if (Auth::check()) --}}
                        <a href="{{ route('coaches-page.index') }}" class="primary-btn pricing-btn">Join now</a>
                    {{-- @else --}}
                        {{-- <a href="{{ route('sign-up.index') }}" class="primary-btn pricing-btn">Join now</a> --}}
                    {{-- @endif --}}
                        </div>
                </div>

                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>Join the gym</h3>
                        <div class="pi-price">
                            <img style="height: 400px;border: 3px solid rgb(243,97,0);border-radius: 0px;width: 250px;" src="/img/gymtalal.jpg" alt="">
                        </div>

                        <a href="{{route('gyms-page.index')}}" class="primary-btn pricing-btn">Join now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonial</span>
                        <h2>Our clients say</h2>
                    </div>
                </div>
            </div>
            <div class="ts_slider owl-carousel">
                @foreach ($reviews as $review)
                    <div class="ts_item">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="ti_pic">
                                    @if ($review->user->image)
                                        <img src="{{ asset('images/' . $review->user->img) }}" alt="User Image">
                                    @else
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Default Image" class="rounded-full">
                                    @endif
                                </div>
                                <div class="ti_text">
                                    <p>{{ $review->review }}</p>
                                    <h5>{{ $review->name }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>






@endsection

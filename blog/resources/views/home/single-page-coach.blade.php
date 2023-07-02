@extends('home.layout')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="services-section spad" style="height: 20px">

    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->

    <div class="contact-section spad" style="height: 1210px">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <div class="contact-widget" style="margin-bottom: 30px">
                        <div class="cw-text">
                            <i class="fa fa-user"></i>
                            <p>NAME<br/>{{ $coach->user->name }} </p>
                        </div>
                        <div class="cw-text">
                            <i class="fa fa-envelope"></i>
                            <p>EMAIL<br/>{{ $coach->user->email }}</p>
                        </div>
                        <div class="cw-text">
                            <i class="fas fa-briefcase"></i>
                            <p>experiences<br/>{{ $coach->experiences }}</p>
                        </div>
                        <div class="cw-text">
                            <i class="fas fa-graduation-cap"></i>
                            <p>education<br/>{{ $coach->education }}</p>
                        </div>
                        <div class="cw-text">
                            <i class="fas fa-comment"></i>
                            <p>description<br/>{{ $coach->description }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="leave-comment">
                        <form action="#" >
                            @if($coach->user->img)
                            <img src="{{ asset('images/'.$coach->user->img) }}" class="rounded-full" style="height: 500px; width: 400px; margin-left: 30px; border: 1px solid rgb(243,97,0);border-radius: 10px;">
                            @else
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-full">
                            @endif
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <section class="pricing-section service-pricing spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Choose your pricing plan</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($card as $subscription)
                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3>{{ $subscription->description }} Month</h3>
                            <div class="pi-price">
                                <h2>$ {{ $subscription->total_price }}</h2>
                                <span>SINGLE CLASS</span>
                            </div>
                            <ul>
                                <li>Free riding</li>
                                <li>Unlimited equipments</li>
                                <li>Personal trainer</li>
                                <li>Weight losing classes</li>
                                <li>Month to mouth</li>
                                <li>No time restriction</li>
                            </ul>
                            <form action="{{route('vesa.index')}}" method="GET">
                                <input type="hidden" value="{{$coach->id}}" name="coach_id" class="primary-btn pricing-btn">
                                <input type="hidden" value="{{$subscription->id}}" name="subscriptions_id">
                                <button type="submit" class="primary-btn pricing-btn" style="width:100%;background-color: rgb(243,97,0);border: none" >Enroll now</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
@endsection

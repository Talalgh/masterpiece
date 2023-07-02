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
                            <p>NAME<br/>{{ $gym->name }} </p>
                        </div>
                        <div class="cw-text">
                            <i class="fa fa-envelope"></i>
                            <p>address<br/>{{ $gym->address }}</p>
                        </div>
                        {{-- <div class="cw-text">
                            <i class="fas fa-briefcase"></i>
                            <p>price<br/></p>
                        </div> --}}
                        <div class="cw-text">
                            <i class="fas fa-comment"></i>
                            <p>description<br/>{{ $gym->description }}</p>
                        </div>


                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="leave-comment">
                        <form action="#" >
                            @if($gym->img)
                            <img src="{{ asset('images/'.$gym->img) }}" class="rounded-full" style="height: 500px; width: 400px; margin-left: 30px; border: 1px solid rgb(243,97,0);border-radius: 10px;">
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
                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3>Class drop-in</h3>
                            <div class="pi-price">
                                <h2>$ {{ $gym->price }}</h2>
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
                            <input type="hidden" value="{{$gym->id}}" name="gym_id" class="primary-btn pricing-btn">
                            <button type="submit"class="primary-btn pricing-btn" style="width:100%;background-color: rgb(243,97,0);border: none" >Enroll now</button>
                        </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3>6 Month unlimited</h3>
                            <div class="pi-price">
                                <h2>$ {{ $gym->price + 15 }}</h2>
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
                                <input type="hidden" value="{{$gym->id}}" name="gym_id" class="primary-btn pricing-btn">
                                <button type="submit"class="primary-btn pricing-btn" style="width:100%;background-color: rgb(243,97,0);border: none" >Enroll now</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3>12 Month unlimited</h3>
                            <div class="pi-price">
                                <h2>$ {{ $gym->price + 30 }}</h2>
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
                                <input type="hidden" value="{{$gym->id}}" name="gym_id" class="primary-btn pricing-btn">
                                <button type="submit"class="primary-btn pricing-btn" style="width:100%;background-color: rgb(243,97,0);border: none" >Enroll now</button>
                            </form >
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- Contact Section End -->

@endsection

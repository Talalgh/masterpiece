@extends('home.layout')
@section('content')

<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricing-section service-pricing spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>-Choose your coach-</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($coaches as $coach)
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3><span style="color: rgb(243,97,0)">Coach -</span> {{ $coach->user->name }}</h3>
                    <div class="pi-price">
                        @if($coach->user->img)
                        <img style="border: 3px solid rgb(243,97,0);height: 315px;width: 290px;" src="{{ asset('images/'.$coach->user->img) }}" alt="">
                        @else
                        <img style="height: 290px;width: 290px;" src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-full">
                        @endif
                    </div>
                    @if (Auth::check())
                    <a href="{{ route('coaches.show', ['coach' => $coach->id]) }}" class="primary-btn pricing-btn">View and Enroll</a>
                    @else
                    <a href="{{ route('sign-up.index') }}" class="primary-btn pricing-btn">View and Enroll</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

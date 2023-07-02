@extends('home.layout')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Add review</h2>
                        <div class="bt-option">
                            <a href="{{route('index')}}">Home</a>
                            <a href="#">Pages</a>
                            <span>review us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7" style="margin: auto">
                    <div class="leave-comment">
                        <p style="color: rgb(243,97,0);font-size: 20px;text-align: center">- We hope that we have served you in the best way -</p>
                        <br>

                        <form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p style="color: rgb(243,97,0);font-size: 20px;">*add your name :</p>
                            <input type="text" name="name" placeholder="Name">

                            <textarea name="review" placeholder="Your Review"></textarea>



                            <button type="submit">Submit</button>

                            @error('review')
                            <div style="color: red" class="error-message">{{ $message }}</div>
                            @enderror
                        </form>



                    </div>
                </div>
            </div>
    </section>
    <!-- Contact Section End -->

@endsection

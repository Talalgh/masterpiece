
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signup/signup.css">
        <title>Regestartion</title>
        <script src="https://kit.fontawesome.com/6c65479865.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <div id="backhome"><a href="{{route('index')}}"><i class="fa-solid fa-house"></i></a></div>
                <form action="{{ route('sign-up') }}" method="post" enctype="multipart/form-data" id="signup-form" >
                    {!! csrf_field() !!}
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" id="name-sign" name="name" placeholder="Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback name-error">
                            <strong id="color1">{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <strong id="color1"><span id="name-error"></span></strong> <!-- Add the error message element -->

                    <input type="email" id="email-sign" name="email1" placeholder="Email" class="form-control{{ $errors->has('email1') ? ' is-invalid' : '' }}" value="{{ old('email1') }}">
                    @if ($errors->has('email1'))
                        <span class="invalid-feedback email-error">
                            <strong id="color1">{{ $errors->first('email1') }}</strong>
                        </span>
                    @endif
                    <strong id="color1"><span id="email-error-sign" ></span></strong> <!-- Add the error message element -->

                    <input type="password" name="password1" id="password-sign" placeholder="Password" class="form-control{{ $errors->has('password1') ? ' is-invalid' : '' }}">
                    @if ($errors->has('password1'))
                        <span class="invalid-feedback password-error">
                            <strong id="color1">{{ $errors->first('password1') }}</strong>
                        </span>
                    @endif
                    <strong id="color1"><span id="password-error-sign" ></span></strong> <!-- Add the error message element -->

                    <input type="password" class="form-control" name="password1_confirmation" id="conf-Password" placeholder="Confirm Password">
                    <strong id="color1"><span id="conf-password-error-sign"></span></strong> <!-- Add the error message element -->

                    <button type="submit" class="btn">Sign Up</button>
                </form>
            </div>

            <!-- sign up for lessor sign-up.lessor -->


        <div class="form-container sign-in-container">
            <form action="{{ route('login.check') }}" method="post" novalidate id="login-form">
                @csrf
                <div id="backhome"><a href="{{route('index')}}"><i class="fa-solid fa-house"></i></a></div>
                <h1 class="sss">Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <span class="sss">or use your account</span>

                <input type="email" name="email" class="form-control{{ $errors->has('email') || (Session::has('login-error') && !empty(Session::get('login-error'))) ? ' is-invalid' : '' }}" id="floatingInputSignIn" placeholder="Email" value="{{ old('email') }}">
                @if ($errors->has('email') || (Session::has('login-error') && !empty(Session::get('login-error'))))
                    <span class="invalid-feedback email-error">
                        <strong id="color1">{{ $errors->first('email')}}</strong>
                        <strong id="color1">{{Session::get('login-error') }}</strong>
                    </span>
                @endif

                <strong id="color1"><span id="email-error-login" ></span></strong>

                <input type="password" name="password" class="form-control{{ $errors->has('password') || (Session::has('login-error') && !empty(Session::get('login-error'))) ? ' is-invalid' : '' }}" id="password-login" placeholder="Password">
                @if ($errors->has('password') || (Session::has('login-error') && !empty(Session::get('login-error'))))
                    <span class="invalid-feedback password-error">
                        <strong id="color1">{{ $errors->first('password')}}</strong>
                        <strong id="color1">{{Session::get('login-error') }}</strong>
                    </span>
                @endif

                <strong id="color1"><span id="password-error-login"></span></strong>

                <button type="submit" class="btn" id="bbb">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us, please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>

                    <a class="ghost" id="signUp1"></a>
                </div>
            </div>
        </div>
    </div>

    <script src="signup/signup.js"></script>

    </body>
    </html>

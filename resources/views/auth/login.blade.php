{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
@extends('auth.app')
@section('content')
    <header class="profile_header bg_third login_header">
        <div class="profile_header-logo">
            <img src="../img/png/<?= $theme ?>/logo_no_background.png">
        </div>
        <div class="login_header-actions">
            <p class="s-14">Don`t have an account?</p>
            <a class="btn_bordered" href="{{ route('register') }}">Sign up</a>
        </div>
    </header>
    <main class="profile_main login_main">
        <div class="login_container">
                <h2 class="h3">Welcome back</h2>
                <form class="login_form" method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="edit_popup_input_group">
                    <input type="text" class="edit_input" name="email" placeholder="Email">
                </div>
                    <div class="edit_popup_input_group">
                        <input class="edit_input" id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                    </div>

                <label id="email-error" class="error" for="email"></label>
                <button class="blue_btn w_full flex flex-center" type="submit">Continue with email</button>
                </form>

                <div class="text-line">
                    <div class="s-12">or login with</div>
                </div>
                <div class="login_social_list">
                    <a class="btn_bordered login_social"><img class="_icon" src="{{asset('img/svg/icons/google.svg')}}" alt="icon"> Continue
                        with Google</a>
                    <a class="btn_bordered login_social"><img class="_icon" src="{{asset('img/svg/icons/facebook.svg')}}" alt="icon"> Continue
                        with
                        Facebook</a>
                    <a class="btn_bordered login_social"><img class="_icon" src="{{asset('img/svg/icons/tiktok.svg')}}" alt="icon"> Continue with
                        TikTok</a>
                    <a class="btn_bordered login_social"><img class="_icon" src="{{asset('img/svg/icons/X_white.svg')}}" alt="icon"> Continue
                        with
                        Twitter</a>
                    <a class="btn_bordered login_social" onclick="signInPopup()">
                        {{--                        <img class="_icon" src="../img/svg/icons/X_white.svg" alt="">--}}
                        Are you a brand ambassador? Login here
                    </a>
                </div>
        </div>
    </main>
    <script>

        $('#loginForm').validate({
            rules: {
                email: {
                    required: true,

                },
            },
            messages: {

                email: "Email is required",

            },
        });
    </script>
@endsection

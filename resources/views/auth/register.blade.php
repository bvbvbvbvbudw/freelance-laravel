@extends('auth.app')
@section('content')
    <header class="profile_header bg_third login_header">
        <div class="profile_header-logo">
            <img src="{{asset('img/png/' . $theme . '/logo_no_background.png')}}" alt="icon">
        </div>
        <div class="login_header-actions">
            <p class="s-14">Already have an account</p>
            <a class="btn_bordered" href="{{ route("login") }}">Login</a>
        </div>
    </header>
    <main class="profile_main login_main">
        <div class="login_container">
                <h2 class="h3">Sign up</h2>
                <form class='login_form' method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6 edit_popup_input_group">
                            <input id="name" type="text" class="edit_input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 edit_popup_input_group">
                            <input id="email" type="email" class="edit_input form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <input type="hidden" value="1" name="role">
                    <div class="row mb-3">
                        <div class="col-md-6 edit_popup_input_group">
                            <input id="password" type="password" class="edit_input form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 edit_popup_input_group">
                            <input id="password-confirm" type="password" class="edit_input form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="blue_btn w_full flex flex-center">Sign in with email</button>
                        </div>
                    </div>
                </form>
                <div class="text-line">
                    <div class="s-12">or signup with</div>
                </div>
                <div class="login_social_list">
                    <a class="btn_bordered login_social"><img class="_icon" src="{{asset('img/svg/icons/google.svg')}}" alt="icon"> Sign in
                        with Google</a>
                    <a class="btn_bordered login_social"><img class="_icon" src="{{asset('img/svg/icons/facebook.svg')}}" alt="icon"> Sign in
                        with
                        Facebook</a>
                    <a class="btn_bordered login_social"><img class="_icon" src="{{asset('img/svg/icons/apple.svg')}}" alt="icon"> Sign in with
                        Apple</a>
                    <a class="btn_bordered login_social"><img class="_icon" src="{{asset('img/svg/icons/X_white.svg')}}" alt="icon"> Sign in
                        with
                        Twitter</a>
                    <a class="btn_bordered login_social" onclick="applyBrandPopup()">
{{--                        <img class="_icon" src="../img/svg/icons/X_white.svg" alt="">--}}
                        Are you a brand ambassador? Register here
                    </a>
                </div>
        </div>
    </main>
    <script>

        $('#signupForm').validate({
            rules: {
                email: {
                    required: true,

                },
                password: {
                    required: true,

                },
            },
            messages: {

                email: "Email is required",
                password: "Password is required",
            },

        });
    </script>
@endsection

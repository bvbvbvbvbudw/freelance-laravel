{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="role" class="col-md-4 col-form-label text-md-end">Role</label>--}}

{{--                            <select class="form-control" name="role">--}}
{{--                                @if(count($roleOptions >= 1))--}}
{{--                                    @foreach($roleOptions as $id => $role)--}}
{{--                                        <option value="{{ $id }}">{{ $role }}</option>--}}
{{--                                    @endforeach--}}
{{--                                @endif--}}
{{--                            </select>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
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
{{--                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

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
{{--                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

                        <div class="col-md-6 edit_popup_input_group">
                            <input id="email" type="email" class="edit_input form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
{{--                        <label for="role" class="col-md-4 col-form-label text-md-end">Role</label>--}}

                        <select class="form-control edit_popup_input_group" style="width: 100%" name="role">
                            {{--                                @if(count($roleOptions >= 1))--}}
                            @foreach($roleOptions as $id => $role)
                                <option value="{{ $id }}">{{ $role }}</option>
                            @endforeach
                            {{--                                @endif--}}
                        </select>
                    </div>

                    <div class="row mb-3">
{{--                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

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
{{--                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

                        <div class="col-md-6 edit_popup_input_group">
                            <input id="password-confirm" type="password" class="edit_input form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
{{--                            <button  class="btn btn-primary">--}}
{{--                                {{ __('Register') }}--}}
{{--                            </button>--}}
                            <button type="submit" class="blue_btn w_full flex flex-center">Continue with email</button>
                        </div>
                    </div>
                </form>
                <div class="text-line">
                    <div class="s-12">or signup with</div>
                </div>
                <div class="login_social_list">
                    <a class="btn_bordered login_social"><img class="_icon" src="../img/svg/icons/google.svg" alt=""> Sign up
                        with Google</a>
                    <a class="btn_bordered login_social"><img class="_icon" src="../img/svg/icons/facebook.svg" alt=""> Sign up
                        with
                        Facebook</a>
                    <a class="btn_bordered login_social"><img class="_icon" src="../img/svg/icons/apple.svg" alt=""> Sign up with
                        Apple</a>
                    <a class="btn_bordered login_social"><img class="_icon" src="../img/svg/icons/X_white.svg" alt=""> Sign up
                        with
                        Twitter</a>
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

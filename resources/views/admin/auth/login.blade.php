@extends('admin.auth.layouts.app')
@section('content')
    <div class="row">
        <div class="col-xl-7">
            <img class="bg-img-cover bg-center fadeIn animated"
                src="{{ asset(isset($setting->login_register_bg_image) ? 'storage/' . $setting->login_register_bg_image : 'static/login_register_bg_img.jpg') }}"
                alt="loginpage">
        </div>
        <div class="col-xl-5 p-0">
            <div class="login-card">
                <div>
                    <div>
                        <a class="logo text-start" href="{{ route('home') }}">
                            <img class="img-fluid for-light"
                                src="{{ asset(setting('logo') ? 'storage/' . setting('logo') : 'static/logo.png') }}"
                                alt="Light Logo">
                            <img class="img-fluid for-dark"
                                src="{{ asset(setting('dark_logo') ? 'storage/' . setting('dark_logo') : 'static/logo_dark.png') }}"
                                alt="Dark Logo">
                        </a>
                    </div>
                    <div class="login-main">
                        <form class="theme-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <h4>Sign in to account</h4>
                            <p>Enter your email & password to login</p>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input class="form-control @error('email')shake animated @enderror" type="email"
                                    name="email" placeholder="Your Email" required>
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control @error('password')shake animated @enderror" type="password"
                                        name="password" placeholder="*********" required>
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                                @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input type="checkbox" name="remember" id="remember-me"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="text-muted" for="checkbox1">Remember password</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                            </div>
                            @include('admin.auth.layouts.socialite')
                            @if (Route::has('register'))
                                <p class="mt-4 mb-0 text-center">
                                    Don't have account?<a class="ms-2" href="{{ route('register') }}">Create
                                        Account</a>
                                </p>
                                <hr>
                                <span class="d-flex justify-content-center">
                                    <a href="{{ route('password.request') }}" class="card-link">Forgot
                                        Password?</a>
                                </span>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

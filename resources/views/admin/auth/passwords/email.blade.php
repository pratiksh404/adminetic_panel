@extends('admin.auth.layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="login-card">
                <div>
                    <div>
                        <a class="logo text-start" href="{{ route('home') }}">
                            <img class="img-fluid for-light"
                                src="{{ asset(isset($setting->logo) ? 'storage/' . $setting->logo : 'static/logo.png') }}"
                                alt="Light Logo">
                            <img class="img-fluid for-dark"
                                src="{{ asset(isset($setting->logo_dark) ? 'storage/' . $setting->logo_dark : 'static/logo_dark.png') }}"
                                alt="Dark Logo">
                        </a>
                    </div>
                    <div class="login-main">
                        <form class="theme-form" method="POST" action="{{ route('password.email') }}">
                            @csrf
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
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block w-100" type="submit">Recover Password</button>
                            </div>
                            @if (Route::has('register'))
                                <p class="mt-4 mb-0">Don't have account?<a class="ms-2"
                                        href="{{ route('register') }}">Create Account</a>
                                </p>
                            @endif
                            @if (Route::has('login'))
                                <p class="mt-4 mb-0">Have account?<a class="ms-2" href="{{ route('login') }}">Login</a>
                                </p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

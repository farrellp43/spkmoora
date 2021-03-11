@extends('layouts.app')

@section('content')

@section('title','login')

<div id="app">
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <img src="{{ url('img/3.png') }}" alt="logo" width="80"
                        class="shadow-light rounded-circle mb-5 mt-2">
                    <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Moora</span>
                    </h4>
                    <p class="text-muted">Before you get started, you must login or register if you don't already
                        have an account.</p>
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" tabindex="1" required autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <div class="invalid-feedback">
                                Please fill in your email
                            </div> --}}
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                            </div>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                tabindex="2" required>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <div class="invalid-feedback">
                                please fill in your password
                            </div> --}}
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember">Remember Me</label>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="float-left mt-3">
                                Forgot Password?
                            </a>
                            @endif
                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                Login
                            </button>
                        </div>

                        <div class="mt-5 text-center">
                            Don't have an account? <a href="{{ route('register') }}">Create new one</a>
                        </div>
                    </form>

                    <div class="text-center mt-5 text-small">
                        Copyright &copy; Muhammad Farrell Denando. Powered by Stisla
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                data-background="{{ url('img/unsplash/login-bg2.jpg') }}">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold">Retention Basin</h1>
                            <h5 class="font-weight-normal text-muted-transparent">Semarang, Indonesia</h5>
                        </div>
                        Photo by <a class="text-light bb" target="_blank"
                            href="https://unsplash.com/photos/BdCl4IdiLWo">Sandro Meier</a> on <a
                            class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
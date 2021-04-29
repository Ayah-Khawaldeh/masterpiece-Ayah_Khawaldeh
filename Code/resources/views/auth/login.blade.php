@extends('layout.public.public_main')

@section('contant')


<main>

<!-- page title area start -->
<section class="page__title p-relative d-flex align-items-center" data-background="{{asset('public_theme/assets/img/page-title/page-title-1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__title-inner text-center">
                    <h1>User-Login</h1>
                    <div class="page__title-breadcrumb">
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/public">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User-Login</li>
                        </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title area end -->

<!-- login Area Strat-->
<section class="login-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="basic-login">
                    <h3 class="text-center mb-60">Login From Here</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label for="name">{{ __('E-Mail Address') }}<span>**</span></label>
                        <input id="name" type="email"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="pass">{{ __('Password') }}<span>**</span></label>
                        <input id="pass" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="login-action mb-20 fix">
                            <!-- <span class="log-rem f-left">
                                <input id="remember" type="checkbox" />
                                <label for="remember">Remember me!</label>
                            </span> -->
                            <!-- <span class="forgot-login f-right">
                                <a href="#">Lost your password?</a>
                            </span> -->
                        </div>
                        <button type="submit" class="os-btn w-100"> {{ __('Login') }}</button>
                       
                    </form>
                    <button type="submit" class="os-btn w-100" style="margin-top: 4%;"><a href="/register">register</a></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login Area End-->
</main>
        @endsection
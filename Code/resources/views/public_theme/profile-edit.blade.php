@extends('layout.public.public_main')

@section('contant')

<main>

    <!-- page title area start -->
    <section class="page__title p-relative d-flex align-items-center" data-background="{{asset('public_theme/assets/img/page-title/page-title-1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Admin-Register</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Admin-Register</li>
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
                        <h3 class="text-center mb-60">Signup From Here</h3>
                        <form method="POST" action="/user/update/{{$useredit->id}}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                            <label for="name">{{ __('Name') }}<span>**</span></label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value=" {{ Auth::user()->name }}" autocomplete="name" autofocus />
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="email-id">{{ __('E-Mail Address') }}<span>**</span></label>
                            <input id="email-id" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value=" {{ Auth::user()->email }}"  required autocomplete="email" />
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="pass">{{ __('Password') }} <span>**</span></label>
                            <input id="pass" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="new-password" />
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                 
                                <label for="pass">phone<span>**</span></label>
                            <input id="pass" type="text" class="form-control @error('password') is-invalid @enderror" name="phone"  value=" {{ Auth::user()->phone }}"  />
                           
                            <label for="pass">image<span>**</span></label>
                    <input class="form-control" style="padding-top: 10px" type="file" placeholder="image" name="image" />
                  </div>
                            <div class="mt-10"></div>
                            <button  type="submit" class="os-btn w-100"> Update</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Area End-->
</main>
        @endsection
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
                        <form action="#">
                            <label for="name">Username <span>**</span></label>
                            <input id="name" type="text" placeholder="Enter Username" />
                            <label for="email-id">Email Address <span>**</span></label>
                            <input id="email-id" type="text" placeholder="Email address..." />
                            <label for="pass">Password <span>**</span></label>
                            <input id="pass" type="password" placeholder="Enter password..." />
                            <div class="mt-10"></div>
                            <button class="os-btn w-100">Register Now</button>
                            <div class="or-divide"><span>or</span></div>
                            <a href="login.html" class="os-btn os-btn-black w-100">login Now</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Area End-->
</main>
        @endsection

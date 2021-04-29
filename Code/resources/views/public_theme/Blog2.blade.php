@extends('layout.public.public_main')

@section('contant')
<div class="body-overlay transition-3"></div>
<!-- extra info area end -->

<main>
    <!-- page title area start -->
    <section class="page__title p-relative d-flex align-items-center" data-background="{{asset('public_theme/assets/img/page-title/page-title-1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Blog</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/public">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->
    <!-- blog area start -->
    <section class="blog__area pt-55">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="postbox__title mb-55">
                        <h1><a href="blog.html">Anteposuerit litterarum formas.</a></h1>
                        <div class="blog__meta">
                            <span>By <a href="#">Shahnewaz Sakil</a></span>
                            <span>/ September 14, 2017</span>
                        </div>
                    </div>
                    <div class="postbox__thumb w-img">
                        <img src="{{asset('public_theme/assets/img/blog/blog-big-7.jpg')}}" alt="">
                    </div>
                    <div class="postbox__wrapper mb-70">
                        <div class="postbox__text mt-65">
                            <p>Diga, Koma and Torus are three kitchen utensils designed for <span class="highlight theme">Ommo</span>, a new design-oriented brand introduced at the Ambiente show in February 2016. <span class="highlight">Minimalist approach, bright colors, stainless steel and matte plastic</span>, abstract shapes and curved lines are the defining features of these products designed to be extremely functional, user-friendly and fun.</p>
                        </div>
                        <div class="postbox__text">
                            <p>Diga is a two-color melamine salad bowl where vegetables can be washed, drained and served. The disk at the bottom of the bowl can be turned counterclockwise to drain water when washing vegetables and it can be turned clockwise to lock the drain and hold condiments in the bowl when serving.</p>
                        </div>
                        <article class="postbox format-quote mt-45 mb-50">
                            <div class="postbox__quote">
                                <blockquote>
                                    <p> <i class="fas fa-quote-right"></i> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                </blockquote>
                            </div>
                        </article>
                        <div class="postbox__details-img w-img mb-60">
                            <img src="{{asset('public_theme/assets/img/blog/blog-1.jpg')}}" alt="">
                        </div>
                        <div class="postbox__text">
                            <p>Koma and Torus are two tea infusers, each with an original design and a concealed function. Koma has a round base and a long stainless steel-trimmed handle which offers a comfortable grip and allows.
                            </p>
                        </div>
                        <div class="postbox__text">
                            <p>And the brushed steel cover opens and closes at the touch of a finger to easily fill and empty the infuser. The perfect way to enjoy brewing tea. Torus is donut-shaped and can      cling to any cup. It is accompanied by a case that can contain up to three different diffusers and can be used for dry storage of loose tea.
                            </p>
                        </div>
                    </div>

    <!-- blog area end -->
</main>

<!-- footer area start -->
<section class="footer__area footer-bg">
    <div class="footer__top pt-100 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="footer__widget mb-30">
                        <div class="footer__widget-title mb-25">
                            <a href="index.html"><img src="{{asset('public_theme/assets/img/logo/logo-2.png')}}" alt="logo"></a>
                        </div>
                        <div class="footer__widget-content">
                            <p>Outstock is a premium Templates theme with advanced admin module. It’s extremely customizable, easy to use and fully responsive and retina ready.</p>
                            <div class="footer__contact">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text">
                                            <span>Add: 1234 Heaven Stress, Beverly Hill, Melbourne, USA.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fal fa-envelope-open-text"></i>
                                        </div>
                                        <div class="text">
                                            <span>Email: <a href="http://themepure.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c0f2322382d2f380c2e2d3f252f3824292129622f2321">[email&#160;protected]</a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fal fa-phone-alt"></i>
                                        </div>
                                        <div class="text">
                                            <span>Phone Number: (800) 123 456 789</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

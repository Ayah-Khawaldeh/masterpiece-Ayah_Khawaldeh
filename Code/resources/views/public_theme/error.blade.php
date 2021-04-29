@extends('layout.public.public_main')

@section('contant')<!-- scroll up area start -->


<main>

    <!-- page title area start -->
    <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/page-title/page-title-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>File Not Found</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> 404 Error page</li>
                            </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- error area start -->
    <section class="error__area pt-60 pb-100">
        <div class="container">
            <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                <div class="error__content text-center">
                    <div class="error__number">
                        <h1>404</h1>
                    </div>
                    <span>component not found</span>
                    <h2>Nothing To See Here!</h2>
                    <p>The page are looking for has been moved or doesn’t exist anymore, if you like you can return to our homepage. If the problem persists, please send us an email to <span class="highlight comment"><a href="http://themepure.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d6b4b7a5bfb5a2beb3bbb396b1bbb7bfbaf8b5b9bb">[email&#160;protected]</a></span></p>

                    <div class="error__search">
                        <input type="text" placeholder="Enter Your Text...">
                        <button type="submit" class="os-btn os-btn-3 os-btn-black">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- error area end -->

</main>

@endsection

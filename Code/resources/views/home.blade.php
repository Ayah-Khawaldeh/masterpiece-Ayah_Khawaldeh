@extends('layouts.public_main')

{{--  @section('content')  --}}
@section('contant')
<!-- page title area start -->
<section class="page__title p-relative d-flex align-items-center" data-background="{{asset('public_theme/assets/img/page-title/page-title-1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__title-inner text-center">
                    <h1>Home</h1>
                    <div class="page__title-breadcrumb">
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/public">Home</a></li>
                            {{-- <li class="breadcrumb-item active" aria-current="page"> Login</li> --}}
                        </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title area end -->
<div class="container" style="margin: 6rem">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

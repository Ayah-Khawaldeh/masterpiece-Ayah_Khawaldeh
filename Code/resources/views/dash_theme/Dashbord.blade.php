@extends('layout.dash.dash_main')
@section('contant')
<!-- breadcrumb -->
<div class="page-heading">
    <div class="row d-flex align-items-center">
        <div class="col-md-6">
            <div class="breadcrumb_nav">
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a class="parent-item" href="index.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        {{--  <i class="fa fa-home"></i>  --}}
                        Dashboard
                    </li>

                </ol>
            </div>
        </div>

    </div>
</div>
<!-- breadcrumb_End -->

<!-- Section -->
						<section class="chart_section">
							<div class="row">

								<div class="col-xl-3 col-sm-6 mb-4">
									<div class="card border-0 text-light">
										<div class="card-body">
											<div class="row">
												<div class="col-12">
													<div class="homepage_single">
														<span class="sec_icon"><a href="/registered-user"><i class="fa fa-group" aria-hidden="true"></a></i></span>
														<div class="homepage_fl_right">
															<h4 class="mt-0">Visitors</h4>
															<h3>75, <span class="single-count">843</span></h3>
														</div>
														<p>
															Visitors <span class="fl_right text-danger">Normal <i class="fa fa-long-arrow-down" aria-hidden="true"></i></span>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-sm-6 mb-4">
									<div class="card border-0 text-light">
										<div class="card-body">
											<div class="row">
												<div class="col-12">
													<div class="homepage_single">
														<span class="sec_icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
														<div class="homepage_fl_right">
															<h4 class="mt-0">Messages</h4>
															<h3><span class="single-count">1228</span></h3>
														</div>
														<p>
															Last month <span class="fl_right text-danger">Normal <i class="fa fa-long-arrow-down" aria-hidden="true"></i></span>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-sm-6 mb-4">
									<div class="card border-0 text-light">
										<div class="card-body">
											<div class="row">
												<div class="col-12">
													<div class="homepage_single">
														<span class="sec_icon"><a><i class="fa fa-heart" aria-hidden="true"></i></a></span>
														<div class="homepage_fl_right">
															<h4 class="mt-0">Number of Visitors</h4>
															<h3><span class="single-count">+1234K</span></h3>
														</div>
														<p>
															Update now <span class="fl_right text-success">Update <i class="fa fa-refresh" aria-hidden="true"></i></span>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
@endsection

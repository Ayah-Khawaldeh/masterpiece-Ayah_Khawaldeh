
<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Jeparo - Responsive Bootstrap 4 Admin Dashboard</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />

		<link href="{{asset('dash_theme/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('dash_theme/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('dash_theme/assets/css/ionicons.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('dash_theme/assets/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('dash_theme/assets/css/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
		<link href="{{asset('dash_theme/assets/css/weather-icons.min.css')}}" rel="stylesheet">
		<!--Morris Chart -->
		<link rel="stylesheet" href="{{asset('dash_theme/assets/js/index/morris-chart/morris.css')}}">
		<link href="{{asset('dash_theme/assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('dash_theme/assets/css/responsive.css')}}" rel="stylesheet">
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119595512-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119595512-1');
</script>

	</head>

	<body>
		<div class="wrapper">
			<!-- header -->
			<header class="main-header">
				<div class="container_header">
					<div class="logo d-flex align-items-center">
						<a href="#"> <strong class="logo_icon"> <img src="{{asset('dash_theme/assets/images/small-logo.png')}}" alt=""> </strong> <span class="logo-default"> <img src="{{asset('dash_theme/assets/images/logo2.png')}}" alt=""> </span> </a>
						{{--  <div class="icon_menu full_menu">
							<a href="#" class="menu-toggler sidebar-toggler"></a>
						</div>  --}}
					</div>
					<div class="right_detail">
						<div class="row d-flex align-items-center min-h pos-md-r">
							<div class="col-xl-5 col-3 search_col ">
								<div class="top_function">

									
								</div>
							</div>
							<div class="col-xl-7 col-9 d-flex justify-content-end">
								<div class="right_bar_top d-flex align-items-center">


									<!--DropDown_Inbox_End -->
									<!-- Dropdown_User -->
									<div class="dropdown dropdown-user">
									<!-- {{$image = Auth::guard('admin')->user()->image}} -->
                                     <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true"> <img class="img-circle pro_pic" src='{{asset("images/$image")}}'alt=""> </a>
									 {{Auth::guard('admin')->user()->name}}
                                    <ul class="dropdown-menu dropdown-menu-default">
										 <li>
												<a href="#"> <i class="icon-user"></i> Profile </a>
											</li>
											<li>
												<a href="#"> <i class="icon-settings"></i> Settings </a>
											</li>
											<li>
												<a href="#"> <i class="icon-directions"></i> Help </a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="/Profile"> <i class="icon-lock"></i> My Profile </a>
											</li>
											<li>

											<a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                            <i class="icon-lock"></i> {{ __('Logout') }}

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                           </form></a>

											</li>

										</ul>
									</div>
									<!-- Dropdown_User_End -->

                                    {{--  <div class="header__action" >
                                        <ul >
                                            <!-- Authentication Links -->
                                            @guest
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                       <span class="caret"></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest  --}}

                                        </ul>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</header>
			<!-- header_End -->
			<!-- Content_right -->
			<div class="container_full">

				<div class="side_bar scroll_auto">
                <div class="user-panel">
						<div class="user_image">
							<img src='{{asset("images/$image")}}' class="img-circle mCS_img_loaded" alt="User Image">
						</div>
						<div class="info">
							<p>
							{{Auth::guard('admin')->user()->name}}
							</p>
						</div>
					</div>

					<ul id="dc_accordion" class="sidebar-menu tree">
						<li class="menu_sub">
							<a href="/Dashboard"> <i class="fa fa-home"></i> Dashboard</a></li>

						<li class="menu_sub">
							<a href="/Mange Products"> <i class="fa fa-newspaper-o"></i> <span>Mange Products </span> </a>

						</li>
						<li class="menu_sub">
							<a href="/Mange Categories"> <i class="fa fa-laptop"></i> <span>Mange Categories </span>  </a>

						</li>

						<li class="menu_sub">
							<a href="/Contact  "> <i class="fa fa-table"></i> <span>Contact  </span> </a>

						</li>
						<li class="menu_sub">
							<a href="/Users  "> <i class="fa fa-table"></i> <span>Customers  </span> </a>

						</li>
						 <li class="menu_sub">
							<a href="/Mange Admins"> <i class="fa fa-envelope-o"></i> <span>Mange Admins  </span>  </a>

						</li>
						<li class="menu_sub">
							<a href="/orders"> <i class="fa fa-envelope-o"></i> <span>Mange orders  </span>  </a>

						</li>
						<!-- <li class="menu_sub">
							<a href="/registered-users"> <i class="fa fa-group"></i> <span>Registered-Users</span>  </a>

						</li> --}} -->

							</ul>
						</li>

					</ul>
				</div>

				<div class="content_wrapper">
					<div class="container-fluid">
                        @yield('contant')

					</div>
			</div>
			<!-- Content_right_End -->

			<!-- Footer -->
			<footer class="footer ptb-20">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="copy_right">
							<p>
								2021 © Dashboard Theme By
								<a href="#">Ayah Khawaldeh</a>
							</p>
						</div>
						<a id="back-to-top" href="#"> <i class="ion-android-arrow-up"></i> </a>
					</div>
				</div>
			</footer>
			<!-- Footer_End -->
		<script type="text/javascript" src="{{asset('dash_theme/assets/js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('dash_theme/assets/js/popper.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('dash_theme/assets/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('dash_theme/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		<!--vectormap-->
		<script src="{{asset('dash_theme/assets/js/index/jquery-jvectormap-1.2.2.min.js')}}"></script>
		<script src="{{asset('dash_theme/assets/js/index/jquery-jvectormap-world-mill-en.js')}}"></script>
		<script src="{{asset('dash_theme/assets/js/index/vmap-init.js')}}"></script>

		<!--echarts-->
		<script type="text/javascript" src="{{asset('dash_theme/assets/js/index/echarts-all-3.js')}}"></script>
		<!--init echarts-->
		<script type="text/javascript" src="{{asset('dash_theme/assets/js/index/init-echarts.js')}}"></script>

		<!-- chart js -->
		<script src="{{asset('dash_theme/assets/js/index/Chart.bundle.js')}}"></script>
		<script src="{{asset('dash_theme/assets/js/index/utils.js')}}"></script>

		<script src="{{asset('dash_theme/assets/js/index/chart.js')}}"></script>

		<script type="text/javascript" src="{{asset('dash_theme/assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
		<script src="{{asset('dash_theme/assets/js/custom.js')}}" type="text/javascript"></script>

	</body>


<!-- Mirrored from theembazaar.com/demo/appsitebox/jeparo/v2.1/Vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2021 19:08:17 GMT -->
</html>

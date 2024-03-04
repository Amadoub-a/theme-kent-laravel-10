<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<title>My website | Home</title>
	<meta name="description" content="Updates and statistics" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

	<link href="{{asset('theme/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

	<link href="{{asset('theme/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('theme/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('theme/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

	<link rel="shortcut icon" href="{{asset('media/logos/favicon.ico')}}" />
</head>

<body id="kt_body" class="header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	<!--begin::Main-->
	<!--begin::Header Mobile-->
	<div id="kt_header_mobile" class="header-mobile">
		<!--begin::Logo-->
		<a href="#">
			<img alt="Logo" src="{{asset('media/logos/logo.png')}}" class="max-h-30px" />
		</a>
		<!--end::Logo-->
		<!--begin::Toolbar-->
		<div class="d-flex align-items-center">
			<button class="btn btn-icon btn-icon-white btn-hover-icon-white" id="kt_aside_mobile_toggle">
				<span class="svg-icon svg-icon-xxl">
					<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24" />
							<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
							<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
			</button>
			<!--begin::Topbar Mobile Toggle-->
			<button class="btn btn-icon btn-icon-white btn-hover-icon-white ml-1" id="kt_header_mobile_topbar_toggle">
				<span class="svg-icon svg-icon-xl">
					<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
							<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
			</button>
			<!--end::Topbar Mobile Toggle-->
		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Header Mobile-->
	<!--begin::Aside-->
	<div class="aside aside-left aside-fixed" id="kt_aside">
		<!--begin::Aside Brand-->
		<div class="aside-brand h-80px px-7 flex-shrink-0">
			<!--begin::Logo-->
			<a href="#" class="aside-logo">
				<img alt="Logo" src="{{asset('media/logos/logo.png')}}" class="max-h-40px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toggle-->
			<button class="aside-toggle btn btn-sm btn-icon-white px-0" id="kt_aside_toggle">
				<span class="svg-icon svg-icon svg-icon-xl">
					<!--begin::Svg Icon | path:assets/media/svg/icons/Text/Toggle-Right.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24" />
							<path fill-rule="evenodd" clip-rule="evenodd" d="M22 11.5C22 12.3284 21.3284 13 20.5 13H3.5C2.6716 13 2 12.3284 2 11.5C2 10.6716 2.6716 10 3.5 10H20.5C21.3284 10 22 10.6716 22 11.5Z" fill="black" />
							<path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M14.5 20C15.3284 20 16 19.3284 16 18.5C16 17.6716 15.3284 17 14.5 17H3.5C2.6716 17 2 17.6716 2 18.5C2 19.3284 2.6716 20 3.5 20H14.5ZM8.5 6C9.3284 6 10 5.32843 10 4.5C10 3.67157 9.3284 3 8.5 3H3.5C2.6716 3 2 3.67157 2 4.5C2 5.32843 2.6716 6 3.5 6H8.5Z" fill="black" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
			</button>
			<!--end::Toolbar-->
		</div>
		<!--end::Aside Brand-->
		<!--begin::Aside Menu-->
		<div id="kt_aside_menu" class="aside-menu my-5" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
			<!--begin::Menu Nav-->
			<ul class="menu-nav">
				<li class="menu-item menu-item-active" aria-haspopup="true">
					<a href="{{route('home')}}" class="menu-link">
						<span class="svg-icon menu-icon">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
									<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-text">Dashboard</span>
					</a>
				</li>
				<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
					<a href="javascript:;" class="menu-link menu-toggle">
						<span class="svg-icon menu-icon">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
									<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-text">Menu with sub</span>
						<i class="menu-arrow"></i>
					</a>
					<div class="menu-submenu">
						<i class="menu-arrow"></i>
						<ul class="menu-subnav">
							<li class="menu-item" aria-haspopup="true">
								<a href="custom/pages/wizard/wizard-1.html" class="menu-link">
									<i class="menu-bullet menu-bullet-dot">
										<span></span>
									</i>
									<span class="menu-text">Sub menu 1</span>
								</a>
							</li>
							<li class="menu-item" aria-haspopup="true">
								<a href="custom/pages/wizard/wizard-1.html" class="menu-link">
									<i class="menu-bullet menu-bullet-dot">
										<span></span>
									</i>
									<span class="menu-text">Sub menu 2</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!--end::Aside-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" class="header">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Info-->
						<div class="d-flex align-items-center flex-wrap mr-1 mt-5 mt-lg-0">
							<!--begin::Page Heading-->
							<div class="d-flex align-items-baseline flex-wrap mr-5">
								<!--begin::Page Title-->
								<h4 class="text-dark font-weight-bold my-1 mr-5">Dashboard
									<small class="text-muted ml-2">updates and statistics</small>
								</h4>
								<!--end::Page Title-->
							</div>
							<!--end::Page Heading-->
						</div>
						<!--end::Info-->
						<!--begin::Topbar-->
						<div class="topbar">
							<!--begin::User-->
							<div class="topbar-item mr-3">
								<div class="btn btn-icon btn-bg-white btn-hover-primary btn-icon-primary btn-circle align-items-center overflow-hidden" id="kt_quick_user_toggle">
									<img alt="Logo" src="{{asset('media/svg/avatars/001-boy.svg')}}" class="h-75 align-self-end" />
								</div>
							</div>
							<!--end::User-->
						</div>
					</div>
				</div>
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<div class="d-flex flex-column-fluid">
						<div class="container">
							<main class="py-4">
								@yield('content')
							</main>
						</div>
					</div>

					<!--begin::Footer-->
					<!--doc: add "bg-white" class to have footer with solod background color-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2021©</span>
								<a href="" target="_blank" class="text-dark-75 text-hover-primary">Votre theme</a>
							</div>
							<!--end::Copyright-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
					
				</div>
			</div>
			<!-- begin::User Panel-->
			<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
				<!--begin::Header-->
				<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
					<h3 class="font-weight-bold m-0">User Profile
						<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
							<i class="ki ki-close icon-xs text-muted"></i>
						</a>
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="offcanvas-content pr-5 mr-n5">
					<!--begin::Header-->
					<div class="d-flex align-items-center mt-5">
						<div class="symbol symbol-100 mr-5">
							<div class="symbol-label" style='background-image:url("{{asset('media/users/user.png')}}")'></div>
							<i class="symbol-badge bg-success"></i>
						</div>
						<div class="d-flex flex-column">
							<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{Auth::user()->name}}</a>
							<div class="text-muted mt-1">Role</div>
							<div class="navi mt-1">
								<a href="#" class="navi-item">
									<span class="navi-link p-0 pb-2">
										<span class="navi-icon mr-1">
											<span class="svg-icon svg-icon-lg svg-icon-primary">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
														<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</span>
										<span class="navi-text text-muted text-hover-primary">{{Auth::user()->email}}</span>
									</span>
								</a>
							</div>
						</div>
					</div>
					<!--end::Header-->
				</div>
			</div>
		</div>
	</div>
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="{{asset('theme/plugins/global/plugins.bundle.js')}}"></script>
	<script src="{{asset('theme/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
	<script src="{{asset('theme/js/scripts.bundle.js')}}"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::Page Vendors(used by this page)-->
	<script src="{{asset('theme/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
	<!--end::Page Vendors-->
	<!--begin::Page Scripts(used by this page)-->
	<script src="{{asset('theme/js/pages/widgets.js')}}"></script>
</body>
</html>
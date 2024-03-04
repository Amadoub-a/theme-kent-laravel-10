<!DOCTYPE html>
<html lang="fr">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>My website | Login</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{asset('theme/css/pages/login/login-2.css')}}" rel="stylesheet" type="text/css"/>
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('theme/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('theme/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('theme/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{asset('media/logos/favicon.ico')}}" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-2 login-signin-on d-flex flex-column flex-column-fluid bg-white position-relative overflow-hidden" id="kt_login">
				<!--begin::Header-->
				<div class="login-header py-10 flex-column-auto">
					<div class="container d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between">
						<!--begin::Logo-->
						<a href="#" class="flex-column-auto py-5 py-md-0">
							<img src="{{asset('media/logos/logo.png')}}" alt="logo" class="h-50px" />
						</a>
						<!--end::Logo-->
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="login-body d-flex flex-column-fluid align-items-stretch justify-content-center">
					<div class="container row">
						<div class="col-lg-6 d-flex align-items-center">
							<!--begin::Signin-->
							<div class="login-form login-signin">
								<!--begin::Form-->
								<form class="form w-xxl-550px rounded-lg p-20" method="POST" action="{{ route('authenticate') }}">
									<!--begin::Title-->
                                    @csrf
									<div class="pb-13 pt-lg-0 pt-5">
										<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Authentification</h3>
									</div>
									<!--begin::Title-->
									<!--begin::Form group-->
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
										<input class="form-control form-control-solid h-auto p-6 rounded-lg" type="email" name="email" autocomplete="off" required/>
                                        @error('email')
                                            <div class="alert alert-danger h-auto mt-3" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
									</div>
									<!--end::Form group-->
									<!--begin::Form group-->
									<div class="form-group">
										<div class="d-flex justify-content-between mt-n5">
											<label class="font-size-h6 font-weight-bolder text-dark pt-5">Mot de passe</label>
											<a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">Mot de passe oubli&eacute; ?</a>
										</div>
										<input class="form-control form-control-solid h-auto p-6 rounded-lg" type="password" name="password" autocomplete="off" required/>
									</div>
									<!--end::Form group-->
									<!--begin::Action-->
									<div class="pb-lg-0 pb-5">
										<button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4">Connexion</button>
									</div>
									<!--end::Action-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Signin-->
						</div>
					</div>
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="login-footer py-10 flex-column-auto">
					<div class="container d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between">
						<div class="font-size-h6 font-weight-bolder order-2 order-md-1 py-2 py-md-0">
							<span class="text-muted font-weight-bold mr-2"><?= date('Y')?></span>
							<a href="#" target="_blank" class="text-dark-50 text-hover-primary">Theme</a>
						</div>
					</div>
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
	</body>
	<!--end::Body-->
</html>
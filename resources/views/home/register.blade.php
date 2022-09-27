<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/assets/vendors/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="{{url('/')}}/assets/vendors/images/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/assets/vendors/images/favicon-16x16.png" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/vendors/styles/style.css" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag("js", new Date());

		gtag("config", "G-GBZ3SGGX85");
	</script>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				"gtm.start": new Date().getTime(),
				event: "gtm.js"
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != "dataLayer" ? "&l=" + l : "";
			j.async = true;
			j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
	</script>
	<!-- End Google Tag Manager -->
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="{{url('/')}}/user/login">
					<img src="{{url('/')}}/assets/vendors/images/deskapp-logo.svg" alt="" />
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="{{url('/')}}/user/login">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{url('/')}}/assets/vendors/images/login-page-img.png" alt="" />
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Create a new account</h2>
						</div>
						<form id="new-user-register">
                            @csrf
							<div class="form-wrap max-width-600 mx-auto">
								<div class="form-group row">
									<div class="col-sm-6">
										<input type="text" name="first_name" class="form-control" placeholder="First name" />
									</div>
									<div class="col-sm-6">
										<input type="text" name="last_name" class="form-control" placeholder="Last Name" />
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-12">
										<input type="text" name="email" class="form-control" placeholder="Mobile number or email address" />
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-12">
										<input type="password" name="new-password" class="form-control" placeholder="New Password" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-form-label">Date of birth*</label>
									<div class="col-sm-4">
										<select class="form-control" name="birthday_day" id="birthday_day">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>
									</div>
									<div class="col-sm-4">
										<select class="form-control" name="birthday_month" id="birthday_month">
											<option value="1">Jan</option>
											<option value="2">Feb</option>
											<option value="3">Mar</option>
											<option value="4">Apr</option>
										</select>
									</div>
									<div class="col-sm-4">
										<select class="form-control" name="birthday_year" id="birthday_year">
											<option value="2000">2000</option>
											<option value="2001">2001</option>
											<option value="2002">2002</option>
											<option value="2003">2003</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-form-label">Gender*</label>
									<div class="col-sm-12">
										<div class="custom-control custom-radio custom-control-inline pb-0">
											<input type="radio" id="male" name="gender" class="custom-control-input" value="1"/>
											<label class="custom-control-label" for="male">Male</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline pb-0">
											<input type="radio" id="female" name="gender" class="custom-control-input" value="2"/>
											<label class="custom-control-label" for="female">Female</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<!-- <a class="btn btn-primary btn-lg btn-block" href="index.html">Sign Up</a> -->
										<input type="hidden" class="user-register-url" value="{{url('/')}}/user/user-registration">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign Up">
									</div>
									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
										OR
									</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="{{url('/')}}/user/login">Already have an account?</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{url('/')}}/assets/vendors/scripts/core.js"></script>
	<script src="{{url('/')}}/assets/vendors/scripts/script.min.js"></script>
	<script src="{{url('/')}}/assets/vendors/scripts/process.js"></script>
	<script src="{{url('/')}}/assets/vendors/scripts/layout-settings.js"></script>
	<script src="{{url('/')}}/assets/js/custom.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>
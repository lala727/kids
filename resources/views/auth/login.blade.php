<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<title>Sign In – PlayLearnKids</title>
		<meta name="description" content="#">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap core CSS -->
		<link href="{{ asset('pages/dist/css/lib/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
		<!-- Swipe core CSS -->
		<link href="{{ asset('pages/dist/css/swipe.min.css') }}" type="text/css" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('pages/dist/css/style.css') }}">
		<!-- Favicon -->
		<link href="{{ asset('pages/images/favicon.png') }}" type="image/png" rel="icon">
	</head>
	<body class="start">
		<main>
			<div class="layout">
				<!-- Start of Sign In -->
				<div class="main order-md-1">
					<div class="start">
						<div class="container">
							<div class="col-md-12">
								<div class="content">
									<h1>Sign In</h1>
									<form method="POST" action="{{ route('login') }}">
                                        @csrf
										<div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">
											<button class="btn icon"><i class="material-icons">mail_outline</i></button>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div>
										<div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
											<button class="btn icon"><i class="material-icons">lock_outline</i></button>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div>
                                        <div class="mb-3 row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check" id="rem">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember" style="color: #fff">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                                <button type="submit" class="btn button" formaction="">Sign In</button>
                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                                @endif
                                            </form>
                                        </div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of Sign In -->
				<!-- Start of Sidebar -->
				<div class="aside order-md-2">
					<div class="container">
						<div class="col-md-12">
							<div class="preference">
								<h2>Hello</h2>
								<p>Sign in to your account by entering your account details.<!-- <br>Or Signup below!</p>
								<a href=""><button class="btn button" id="#signupBtn">Sign Up</button></a>-->
							</div>
						</div>
					</div>
				</div>
				<!-- End of Sidebar -->
			</div> <!-- Layout -->
		</main>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script
		src="{{ asset('pages/dist/js/vendor/jquery.js') }}"
		integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
		crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="{{ asset('pages/dist/js/vendor/jquery.js') }}" <\/script>')</script>
		<script src="{{ asset('pages/dist/js/vendor/popper.min.js') }}"></script>
		<script src="{{ asset('pages/dist/js/bootstrap.min.js') }}"></script>
	</body>

</html>
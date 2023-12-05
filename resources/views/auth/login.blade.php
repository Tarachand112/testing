@extends('layouts.guest.app')
@section('content')
	<div class="container-1">
		<div class="access-container p-6">
			<form class="login-form validate-form">
				<span class="login-form-title">Login</span>
				<div class="access-input validate-input" data-validate ="Valid email is required: ex@abc.xyz">
					<input class="login-input" type="text" name="email" placeholder="Email">
					<span class="input-focus"></span>
					<span class="input-symbol">
						<i class="zmdi zmdi-email" aria-hidden="true"></i>
					</span>
				</div>
				<div class="access-input validate-input" data-validate = "Password is required">
					<input class="login-input" type="password" name="pass" placeholder="Password">
					<span class="input-focus"></span>
					<span class="input-symbol">
						<i class="zmdi zmdi-lock" aria-hidden="true"></i>
					</span>
				</div>
				<div class="text-right pt-3 pb-3">
					<p class="mb-0"><a href="forgot-password.html" class="text-primary ml-1">Forgot Password?</a></p>
				</div>
				<div class="">
					<button type="submit" class="btn btn-primary-light btn-block">Login</button>
				</div>
				<div class="text-center pt-3">
					<p class="mb-0">Not a member?<a href="{{ url('register') }}" class="text-primary ml-1">Sign UP now</a></p>
				</div>
			</form>
		</div>
	</div>
@endsection
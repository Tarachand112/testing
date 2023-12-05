@extends('layouts.guest.app')
@section('content')
<div class="container-1">
	<div class="access-container p-6">
		<form class="login-form validate-form">
			<span class="login-form-title">Registration</span>
			<label class="custom-control custom-radio">
				<input type="radio" class="custom-control-input" name="type" value="0" checked>
				<span class="custom-control-label">Individual</span>
			</label>
			<label class="custom-control custom-radio ml-3">
				 <input type="radio" class="custom-control-input" name="type" value="1">
				<span class="custom-control-label">Company/Organisation</span>
			</label>
			<div class="access-input my-3 first_name">  
				<input class="login-input" type="text" name="first_name" placeholder="First Name">
				<span class="input-symbol">
					<i class="mdi mdi-account" aria-hidden="true"></i>
				</span>
			</div>
			<div class="access-input last_name">
				<input class="login-input" type="text" name="last_name" placeholder="Last Name">
				<span class="input-symbol">
					<i class="mdi mdi-account" aria-hidden="true"></i>
				</span>
			</div>
			<div class="access-input validate-input d-none company_name">  
				<input class="login-input" type="text" name="company_name" placeholder="Company Name">
				<span class="input-symbol">
					<i class="mdi mdi-account" aria-hidden="true"></i>
				</span>
			</div>
			<div class="access-input validate-input" data-validate = "Valid email is required: ex@abc.xyz">
				<input class="login-input" type="text" name="email" placeholder="Email">
				<span class="input-focus"></span>
				<span class="input-symbol">
					<i class="zmdi zmdi-email" aria-hidden="true"></i>
				</span>
			</div>
			<div class="access-input validate-input mt-6" data-validate = "Password is required">
				<input class="login-input" type="password" name="pass" placeholder="Password">
				<span class="input-focus"></span>
				<span class="input-symbol">
					<i class="zmdi zmdi-lock" aria-hidden="true"></i>
				</span>
			</div>
			<div class="access-input validate-input" data-validate = "Password is required">
				<input class="login-input" type="password" name="pass" placeholder="Password">
				<span class="input-focus"></span>
				<span class="input-symbol">
					<i class="zmdi zmdi-lock" aria-hidden="true"></i>
				</span>
			</div>
			<div class="form-group mt-4">
				<label class="custom-switch">
					<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
					<span class="custom-switch-indicator"></span>
					<span class="pl-2">Agree the <a href="terms.html">terms and policy</a></span> 
				</label>
			</div>
			<div class="">
				<button type="submit" class="btn btn-primary-light btn-block">Register</button>
			</div>
			<div class="text-center pt-3">
				<p class="mb-0">Already have account?<a href="{{ url('login') }}" class="text-primary ml-1">Sign In</a></p>
			</div>
		</form>
	</div>
</div>
@endsection

@section('scripts')
<script>
	$('input[name=type]').on('change', function() {
		if ($(this).val() == 1) {
			$('.company_name').removeClass('d-none').addClass('d-block');
			$('.first_name').removeClass('d-block').addClass('d-none');
			$('.last_name').removeClass('d-block').addClass('d-none');
		} else {
			$('.company_name').removeClass('d-block').addClass('d-none');
			$('.first_name').removeClass('d-none').addClass('d-block');
			$('.last_name').removeClass('d-none').addClass('d-block');
		}
	});
</script>
@endsection
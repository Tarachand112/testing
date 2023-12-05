@extends('layouts.guest.app')

@section('content')
<div class="container-1 my-5">
	<div class="access-container p-6">
		<form class="login-form validate-form">
			<div class="card-body text-center">
				<span class="avatar avatar-xxl brround cover-image" data-image-src="{{ asset('images/faces/male/25.jpg') }}"></span>
				<h4 class="h4 mb-0 mt-3">James Thomas</h4>
			</div>
			<div class="access-input validate-input" data-validate = "Password is required">
				<input class="login-input" type="password" name="pass" placeholder="Password">
				<span class="input-focus"></span>
				<span class="input-symbol">
					<i class="zmdi zmdi-lock" aria-hidden="true"></i>
				</span>
			</div>
			<button type="submit" class="btn btn-primary-light btn-block">Unlock</button>
			<div class="text-center pt-3">
				<p class="mb-0">Login With One Time Code</p>
			</div>
		</form>
	</div>
</div>
@endsection
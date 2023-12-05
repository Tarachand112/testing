@extends('layouts.auth.app')

@section('content')
<div class="page-header">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">System</a></li>
		<li class="breadcrumb-item"><a href="#">Translations</a></li>
		<li class="breadcrumb-item active" aria-current="page">Edit Translations</li>
	</ol>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 class="mb-0 card-title">Default forms</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="input" placeholder="Enter Your Name" value="Enter Your Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="example-disabled-input" placeholder="Read Only Text area." value="Read Only Text area. " readonly="">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled text area.." value="" disabled="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group has-success">
							<input type="text" class="form-control is-valid state-valid" name="example-text-input-valid" placeholder="Valid Email..">
						</div>
						<div class="form-group  has-danger">
							<input type="text" class="form-control is-invalid state-invalid" name="example-text-input-invalid" placeholder="Invalid feedback">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="example-password-input" placeholder="Password..">
						</div>
					</div>
					<div class="col-md-12">
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write a large text here ..."></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<h3 class="mb-0 card-title">Default forms with labels</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="form-label">Enter Name</label>
							<input type="text" class="form-control" name="example-text-input" placeholder="Name">
						</div>
						<div class="form-group">
							<label class="form-label">Disabled</label>
							<input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled text area.." value="" disabled="">
						</div>
						<div class="form-group">
							<label class="form-label">Readonly</label>
							<input type="text" class="form-control" name="example-disabled-input" placeholder="Read Only Text area." value="Read Only Text area. " readonly="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="form-label">Valid Email</label>
							<input type="text" class="form-control is-valid state-valid" name="example-text-input-valid" placeholder="Valid Email..">
						</div>
						<div class="form-group m-0">
							<label class="form-label">Invalid Number</label>
							<input type="text" class="form-control is-invalid state-invalid" name="example-text-input-invalid" placeholder="Invalid Number..">
							<div class="invalid-feedback">Invalid feedback</div>
						</div>
						<div class="form-group">
							<label class="form-label">Password</label>
							<input type="password" class="form-control" name="example-password-input" placeholder="Password..">
						</div>
					</div>
					<div class="col-md-12 ">
						<div class="form-group mb-0">
							<label class="form-label">Message</label>
							<textarea class="form-control" name="example-textarea-input" rows="4" placeholder="text here.."></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Input Forms</h3>
			</div>
			<div class="card-body">

				<div class="form-group">
					<label class="form-label">Text</label>
					<input type="text" class="form-control" name="example-text-input" placeholder="Text..">
				</div>

				<div class="form-group">
					<label class="form-label">Country</label>
					<select name="country" id="select-countries" class="form-control custom-select">
						<option value="br" data-data="{&quot;image&quot;: &quot;../assets/images/flags/br.svg&quot;}">Brazil</option>
						<option value="cz" data-data="{&quot;image&quot;: &quot;../assets/images/flags/cz.svg&quot;}">Czech Republic</option>
						<option value="de" data-data="{&quot;image&quot;: &quot;../assets/images/flags/de.svg&quot;}">Germany</option>
						<option value="pl" data-data="{&quot;image&quot;: &quot;../assets/images/flags/pl.svg&quot;}" selected="">Poland</option>
					</select>
				</div>
				<div class="form-group">
					<label class="form-label">Input group</label>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-append">
							<button class="btn btn-primary-light" type="button">Go!</button>
						</span>
					</div>
				</div>
				<div class="form-group mb-0">
					<label class="form-label">Input group buttons</label>
					<div class="input-group">
						<input type="text" class="form-control">
						<div class="input-group-append">
							<button type="button" class="btn btn-primary-light br-tr-0 br-br-0">Action</button>
							<button data-toggle="dropdown" type="button" class="btn btn-primary-light dropdown-toggle"></button>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="javascript:void(0)">News</a>
								<a class="dropdown-item" href="javascript:void(0)">Messages</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="javascript:void(0)">Edit Profile</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@extends('layouts.auth.app')

@section('content')
<div class="page-header">
	<ol class="breadcrumb">
		<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
	</ol>
</div>
<div class="row">
	<div class="col-lg-4 col-xl-4 col-md-12 col-sm-12">
		<div class="card">
			<div class="card-body">
				<div class="text-center">
					<div class="userprofile">
						<div class="userpic  brround"> <img src="../assets/images/faces/female/16.jpg" alt="" class="userpicimg"> </div>
						<h3 class="username mb-2">Joyce Stewart</h3>
						<p class="mb-1 text-muted">Ui Designer, USA</p>
						<div class="text-center mb-4">
							<span><i class="fa fa-star text-warning"></i></span>
							<span><i class="fa fa-star text-warning"></i></span>
							<span><i class="fa fa-star text-warning"></i></span>
							<span><i class="fa fa-star-half-o text-warning"></i></span>
							<span><i class="fa fa-star-o text-warning"></i></span>
						</div>
						<div class="socials text-center mt-3">
							<a href="" class="btn btn-circle btn-primary-light">
							<i class="fa fa-facebook"></i></a> <a href="" class="btn btn-circle btn-danger-light ">
							<i class="fa fa-google-plus"></i></a> <a href="" class="btn btn-circle btn-info-light ">
							<i class="fa fa-twitter"></i></a> <a href="" class="btn btn-circle btn-warning-light "><i class="fa fa-envelope"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<div class="card-title">Edit Password</div>
			</div>
			<div class="card-body">
				<div class="d-flex mb-3">
					<img alt="User Avatar" class="rounded-circle avatar-lg mr-2" src="../assets/images/faces/female/16.jpg">
					<div class="ml-auto mt-xl-2 mt-lg-0 ml-lg-2">
						<a href="#" class="btn btn-primary-light btn-sm mt-1 mb-1"><i class="fe fe-camera mr-1"></i>Edit profile</a>
						<a href="#" class="btn btn-danger-light btn-sm mt-1 mb-1"><i class="fe fe-camera-off mr-1"></i>Delete profile</a>
					</div>
				</div>
				<div class="form-group">
					<label class="form-label">Change Password</label>
					<input type="password" class="form-control" value="password">
				</div>
				<div class="form-group">
					<label class="form-label">New Password</label>
					<input type="password" class="form-control" value="password">
				</div>
				<div class="form-group">
					<label class="form-label">Confirm Password</label>
					<input type="password" class="form-control" value="password">
				</div>
			</div>
			<div class="card-footer text-right">
				<a href="#" class="btn btn-primary-light">Updated</a>
				<a href="#" class="btn btn-danger-light">Cancle</a>
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Edit Profile</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="form-group">
							<label for="exampleInputname">First Name</label>
							<input type="text" class="form-control" id="exampleInputname" placeholder="First Name">
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="form-group">
							<label for="exampleInputname1">Last Name</label>
							<input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Last Name">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="email address">
				</div>
				<div class="form-group">
					<label for="exampleInputnumber">Conatct Number</label>
					<input type="number" class="form-control" id="exampleInputnumber" placeholder="ph number">
				</div>
				<div class="form-group">
					<label class="form-label">About Me</label>
					<textarea class="form-control" rows="6">My bio.........</textarea>
				</div>
				<div class="form-group">
					<label class="form-label">Website</label>
					<input class="form-control" placeholder="http://splink.com">
				</div>
				<div class="form-group">
					<label class="form-label">Date Of Birth</label>
					<div class="row">
						<div class="col-md-4">
							<select class="form-control">
								<option value="0">Date</option>
								<option value="1">01</option>
								<option value="2">02</option>
								<option value="3">03</option>
								<option value="4">04</option>
								<option value="5">05</option>
								<option value="6">06</option>
								<option value="7">07</option>
								<option value="8">08</option>
								<option value="9">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control">
								<option value="0">Mon</option>
								<option value="1">Jan</option>
								<option value="2">Feb</option>
								<option value="3">Mar</option>
								<option value="4">Apr</option>
								<option value="5">May</option>
								<option value="6">June</option>
								<option value="7">July</option>
								<option value="8">Aug</option>
								<option value="9">Sep</option>
								<option value="10">Oct</option>
								<option value="11">Nov</option>
								<option value="12">Dec</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control">
								<option value="0">Year</option>
								<option value="1">2018</option>
								<option value="2">2017</option>
								<option value="3">2016</option>
								<option value="4">2015</option>
								<option value="5">2014</option>
								<option value="6">2013</option>
								<option value="7">2102</option>
								<option value="8">2012</option>
								<option value="9">2011</option>
								<option value="10">2010</option>
								<option value="11">2009</option>
								<option value="12">2008</option>
								<option value="13">2007</option>
								<option value="14">2006</option>
								<option value="15">2005</option>
								<option value="16">2004</option>
								<option value="17">2003</option>
								<option value="18">2002</option>
								<option value="19">2001</option>
								<option value="20">1999</option>
								<option value="21">1998</option>
								<option value="22">1997</option>
								<option value="23">1996</option>
								<option value="24">1995</option>
								<option value="25">1994</option>
								<option value="26">1993</option>
								<option value="27">1992</option>
								<option value="28">1991</option>
								<option value="29">1990</option>
								<option value="30">1989</option>
								<option value="31">1988</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<a href="#" class="btn btn-success-light mt-1">Save</a>
				<a href="#" class="btn btn-danger-light mt-1">Cancel</a>
			</div>
		</div>
	</div>
</div>
@endsection
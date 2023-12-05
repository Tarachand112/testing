@extends('layouts.auth.app')

@section('content')
<div class="page-header">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">System</a></li>
		<li class="breadcrumb-item"><a href="#">User Management</a></li>
		<li class="breadcrumb-item active" aria-current="page">User</li>
	</ol>
</div>
<div class="row row-cards">
	<div class="col-lg-12 col-xl-12">
		<div class="input-group mb-5">
			<input type="text" class="form-control" placeholder="">
			<div class="input-group-append ">
				<button type="button" class="btn btn-primary-light">
					<i class="fa fa-search" aria-hidden="true"></i>
				</button>
			</div>
		</div>
		<div class="card">
			<div class="card-header border-bottom-0 p-4">
				<h2 class="card-title">1 - 30 of 546 users</h2>
				<div class="page-options d-flex float-right">
					<select class="form-control custom-select w-auto">
						<option value="asc">Latest</option>
						<option value="desc">Oldest</option>
					</select>
				</div>
			</div>
			<div class="e-table">
				<div class="table-responsive table-lg br-bl-10 br-br-10">
					<table class="table table-bordered mb-0">
						<colgroup>
							<col width="8%">
                    		<col width="12%">
                    		<col width="12%">
                    		<col width="10%">
							<col width="13%">
                    		<col width="10%">
							<col width="40%">
						</colgroup>
						<thead>
							<tr>
								<th  class="text-center">

								</th>
								<th class="text-center">Photo</th>
								<th>Name</th>
								<th>User Name</th>
								<th>Creation Date</th>
								<th>Last Login</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="align-middle text-center">
									<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
										<input class="custom-control-input" id="item-1" type="checkbox"> <label class="custom-control-label" for="item-1"></label>
									</div>
								</td>
								<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="../assets/images/faces/female/26.jpg"></td>
								<td class="text-nowrap align-middle" colspan="2">Adam Cotter</td>
								<td class="text-nowrap align-middle" colspan="2"><span>09 Dec 2017</span></td>
								<td class="text-center align-middle">
									<div class="btn-list">
										<a href="#" class="btn btn-outline-success">Edit</a>
										<a href="#" class="btn btn-outline-primary">Grand Access</a>
										<a href="#" class="btn btn-outline-danger">Suspend</a>
										<a href="#" class="btn btn-outline-success">Verify</a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="align-middle text-center">
									<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
										<input class="custom-control-input" id="item-2" type="checkbox"> <label class="custom-control-label" for="item-2"></label>
									</div>
								</td>
								<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="../assets/images/faces/female/25.jpg"></td>
								<td class="text-nowrap align-middle" colspan="2">Pauline Noble</td>
								<td class="text-nowrap align-middle" colspan="2"><span>26 Jan 2018</span></td>
								<td class="text-center align-middle">
									
								</td>
							</tr>
							<tr>
								<td class="align-middle text-center">
									<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
										<input class="custom-control-input" id="item-3" type="checkbox"> <label class="custom-control-label" for="item-3"></label>
									</div>
								</td>
								<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="../assets/images/faces/male/24.jpg"></td>
								<td class="text-nowrap align-middle" colspan="2">Sherilyn Metzel</td>
								<td class="text-nowrap align-middle" colspan="2"><span>27 Jan 2018</span></td>
								<td class="text-center align-middle">
									
								</td>
							</tr>
							<tr>
								<td class="align-middle text-center">
									<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
										<input class="custom-control-input" id="item-4" type="checkbox"> <label class="custom-control-label" for="item-4"></label>
									</div>
								</td>
								<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="../assets/images/faces/male/18.jpg"></td>
								<td class="text-nowrap align-middle" colspan="2">Terrie Boaler</td>
								<td class="text-nowrap align-middle" colspan="2"><span>20 Jan 2018</span></td>

								<td class="text-center align-middle">
									
								</td>
							</tr>
							<tr>
								<td class="align-middle text-center">
									<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
										<input class="custom-control-input" id="item-5" type="checkbox"> <label class="custom-control-label" for="item-5"></label>
									</div>
								</td>
								<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="../assets/images/faces/female/19.jpg"></td>
								<td class="text-nowrap align-middle" colspan="2">Rutter Pude</td>
								<td class="text-nowrap align-middle" colspan="2"><span>13 Jan 2018</span></td>

								<td class="text-center align-middle">
									
								</td>
							</tr>
							<tr>
								<td class="align-middle text-center">
									<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
										<input class="custom-control-input" id="item-6" type="checkbox"> <label class="custom-control-label" for="item-6"></label>
									</div>
								</td>
								<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="../assets/images/faces/male/28.jpg"></td>
								<td class="text-nowrap align-middle" colspan="2">Clifford Benjamin</td>
								<td class="text-nowrap align-middle" colspan="2"><span>25 Jan 2018</span></td>

								<td class="text-center align-middle">
									
								</td>
							</tr>
							<tr>
								<td class="align-middle text-center">
									<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
										<input class="custom-control-input" id="item-7" type="checkbox"> <label class="custom-control-label" for="item-7"></label>
									</div>
								</td>
								<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="../assets/images/faces/female/12.jpg"></td>
								<td class="text-nowrap align-middle" colspan="2">Thedric Romans</td>
								<td class="text-nowrap align-middle" colspan="2"><span>12 Jan 2018</span></td>

								<td class="text-center align-middle">
									
								</td>
							</tr>
							<tr>
								<td class="align-middle text-center">
									<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
										<input class="custom-control-input" id="item-8" type="checkbox"> <label class="custom-control-label" for="item-8"></label>
									</div>
								</td>
								<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="../assets/images/faces/female/1.jpg"></td>
								<td class="text-nowrap align-middle" colspan="2">Haily Carthew</td>
								<td class="text-nowrap align-middle" colspan="2"><span>27 Jan 2018</span></td>

								<td class="text-center align-middle">
									
								</td>
							</tr>
							<tr>
								<td class="align-middle text-center">
									<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
										<input class="custom-control-input" id="item-9" type="checkbox"> <label class="custom-control-label" for="item-9"></label>
									</div>
								</td>
								<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="../assets/images/faces/male/12.jpg"></td>
								<td class="text-nowrap align-middle" colspan="2">Dorothea Joicey</td>
								<td class="text-nowrap align-middle" colspan="2"><span>12 Dec 2017</span></td>

								<td class="text-center align-middle">
									
								</td>
							</tr>
							<tr>
								<td class="align-middle text-center">
									<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
										<input class="custom-control-input" id="item-10" type="checkbox"> <label class="custom-control-label" for="item-10"></label>
									</div>
								</td>
								<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="../assets/images/faces/female/15.jpg"></td>
								<td class="text-nowrap align-middle" colspan="2">Mikaela Pinel</td>
								<td class="text-nowrap align-middle" colspan="2"><span>10 Dec 2017</span></td>

								<td class="text-center align-middle">
									
								</td>
							</tr>
							<tr>
								<td class="align-middle text-center">
									<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
										<input class="custom-control-input" id="item-11" type="checkbox"> <label class="custom-control-label" for="item-11"></label>
									</div>
								</td>
								<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="../assets/images/faces/female/12.jpg"></td>
								<td class="text-nowrap align-middle" colspan="2">Donnell Farries</td>
								<td class="text-nowrap align-middle" colspan="2"><span>03 Dec 2017</span></td>

								<td class="text-center align-middle">
									
								</td>
							</tr>
							<tr>
								<td class="align-middle text-center">
									<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
										<input class="custom-control-input" id="item-12" type="checkbox"> <label class="custom-control-label" for="item-12"></label>
									</div>
								</td>
								<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="../assets/images/faces/male/4.jpg"></td>
								<td class="text-nowrap align-middle"colspan="2">Letizia Puncher</td>
								<td class="text-nowrap align-middle" colspan="2"><span>09 Dec 2017</span></td>

								<td class="text-center align-middle">
									
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="mb-5">
			<ul class="pagination float-right">
				<li class="page-item page-prev disabled">
					<a class="page-link" href="#" tabindex="-1">Prev</a>
				</li>
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><a class="page-link" href="#">4</a></li>
				<li class="page-item"><a class="page-link" href="#">5</a></li>
				<li class="page-item page-next">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</div>
	</div>
</div>
@endsection
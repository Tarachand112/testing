@extends('layouts.auth.app')
@section('content')
<div class="page-header">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
	</ol>
</div>
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
		<div class="card">
			<div class="card-header border-bottom-0">
				<h3 class="card-title font-weight-normal fs-14">Active Users</h3>
				<div class="card-options">
					<a class="text-gray" href="javascript:void(0)">
						<i class="mdi mdi-dots-vertical"></i>
					</a>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col">
						<div class="chart-circle chart-circle-sm ml-0" data-value="0.65" data-thickness="5" data-color="#30c102"><canvas width="100" height="100"></canvas>
							<div class="chart-circle-value"><div class="">65% </div></div>
						</div>
					</div>
					<div class="col col-auto">
						<h6 class="fs-13 text-muted">Active Users</h6>
						<h3 class="font-rubik mb-0">45,256</h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
		<div class="card">
			<div class="card-header border-bottom-0">
				<h3 class="card-title font-weight-normal fs-14">New Users</h3>
				<div class="card-options">
					<a class="text-gray" href="javascript:void(0)">
						<i class="mdi mdi-dots-vertical"></i>
					</a>
				</div>
			</div>
			<div class="card-body pt-0">
				<div class="row">
					<div class="col">
						<h3 class="mb-2">6542</h3>
					</div>
				</div>
				<div class="mb-0">
					<p class="mb-2 text-muted">New Users<span class="float-right badge badge-pill badge-danger">80%</span></p>
					<div class="progress h-2">
						<div class="progress-bar bg-danger w-80 " role="progressbar"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
		<div class="card">
			<div class="card-header border-bottom-0">
				<h3 class="card-title font-weight-normal fs-14">Deactive Users</h3>
				<div class="card-options">
					<a class="text-gray" href="javascript:void(0)">
						<i class="mdi mdi-dots-vertical"></i>
					</a>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col">
						<div class="chart-circle chart-circle-sm ml-0" data-value="0.65" data-thickness="5" data-color="#ead40c"><canvas width="100" height="100"></canvas>
							<div class="chart-circle-value"><div class="">75% </div></div>
						</div>
					</div>
					<div class="col col-auto">
						<h6 class="fs-13 text-muted">Deactive Users</h6>
						<h3 class="font-rubik mb-0">75,456</h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
		<div class="card">
			<div class="card-header border-bottom-0">
				<h3 class="card-title font-weight-normal fs-14">Total Users</h3>
				<div class="card-options">
					<a class="text-gray" href="javascript:void(0)">
						<i class="mdi mdi-dots-vertical"></i>
					</a>
				</div>
			</div>
			<div class="card-body pt-0">
				<div class="row">
					<div class="col">
						<h3 class="mb-2">1,84,569</h3>
					</div>
				</div>
				<div class="mb-0">
					<p class="mb-2 text-muted">New Users<span class="float-right badge badge-pill badge-secondary">90%</span></p>
					<div class="progress h-2">
						<div class="progress-bar bg-secondary w-90 " role="progressbar"></div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>
<div class="row row-deck">
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
		<div class="card overflow-hidden">
			<div class="card-header">
				<h3 class="card-title">Total Budget</h3>
			</div>
			<div class="card-body overflow-hidden pb-0">
				<h2 class="mb-0 font-rubik fs-40">$1,87,595</h2>
				<small class="text-muted">15% Higher Of Previous Month</small>
				<div class="row mt-4">
					<div class="col-sm-12">
						<div class="mb-0">
							<h4 class="mb-2 d-block">
								<span class="fs-16">Total Expences</span>
								<span class="float-right font-rubik fs-30">$1587</span>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="chart-wrapper overflow-hidden">
				<canvas id="total-budget" class="areaChart overflow-hidden chart-dropshadow overflow-hidden"></canvas>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
		<div class="card overflow-hidden">
			<div class="card-body text-center overflow-hidden">
				<div class="mb-4">
					<h5 class="card-title fs-40">Expense Trend</h5>
				</div>
				<h2 class="mb-1 font-rubik fs-40">7,423</h2>
				<div class="mb-1">
					<small class="text-primary mb-0">+15%</small>
					<small class="text-muted ml-2">From Last Month</small>
				</div>
				<div class="chart-wrapper">
					<canvas id="expense" class="chart-dropshadow2 overflow-hidden"></canvas>
				</div>
			</div>
		</div>
	</div> 
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
		<div class="card overflow-hidden">
			<div class="card-header">
				<h3 class="card-title">All Expenses By Category</h3>
			</div>
			<div class="card-body">
				<div class="">
					<p class="mb-0">Rent and Utilities</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
							<div class="progress-bar bg-primary-1 w-80"></div>
						</div>
						<p class="text-muted mt-1 mb-0">80%</p>
					</div>
				</div>
				<div class="mt-3">
					<p class="mb-0">Equipment</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
							<div class="progress-bar bg-secondary-1 w-50"></div>
						</div>
						<p class="text-muted mt-1 mb-0">50%</p>
					</div>
				</div>
				<div class="mt-3">
					<p class=" mb-0">Marketing </p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
							<div class="progress-bar bg-danger-1 w-65"></div>
						</div>
						<p class="text-muted mt-1 mb-0">65%</p>
					</div>
				</div>
				<div class="mt-3">
					<p class=" mb-0">Freelancers</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
							<div class="progress-bar bg-success w-30"></div>
						</div>
						<p class="text-muted mt-1 mb-0">30%</p>
					</div>
				</div>
				<div class="mt-3">
					<p class=" mb-0">Travel</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
							<div class="progress-bar bg-warning-1 w-40"></div>
						</div>
						<p class="text-muted mt-1 mb-0">40%</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row row-deck">
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
		<div class="card overflow-hidden">
			<div class="card-header">
				<h3 class="card-title">Expenses Vs Budget</h3>
			</div>
			<div class="card-body overflow-hidden">
				<canvas id="budget" class="chart-dropshadow overflow-hidden"></canvas>
			</div>
		</div>
	</div> 
	<div class="col-lg-12 col-md-12 col-sm-12 col-xl-7">
		<div class="card shadow">
			<div class="card-header bg-transparent">
				<h4 class="card-title mb-0">Expenses Vs Budget Table</h4>
			</div>
			<div class="card-body p-0">
				<div class="grid-margin">
					<div class="">
						<div class="table-responsive">
							<table class="table card-table border table-vcenter text-nowrap align-items-center">
								<thead class="thead-light">
									<tr>
										<th>Category</th>
										<th>Expenses</th>
										<th>Budget</th>
										<th>Variance</th>
									</tr>
								</thead>
								<tbody class="border-top-0">
									<tr>
										<td class="text-sm font-weight-600">Business Best Meals</td>
										<td>3,542</td>
										<td>5,000</td>
										<td>1,458</td>
									</tr>
									<tr>
										<td class="text-sm font-weight-600">Lodging</td>
										<td>56,368</td>
										<td>75,000</td>
										<td>18,632</td>
									</tr>
									<tr>
										<td class="text-sm font-weight-600">Meetings/Conferences</td>
										<td>0</td>
										<td>2,000</td>
										<td>2,000</td>
									</tr>
									<tr>
										<td class="text-sm font-weight-600">Association Fee</td>
										<td>0</td>
										<td>1,000</td>
										<td>1,000</td>
									</tr>
									<tr>
										<td class="text-sm font-weight-600">Personal Meals</td>
										<td>2,850</td>
										<td>5,000</td>
										<td>2,150</td>
									</tr>
									<tr>
										<td class="text-sm font-weight-600">Transportation</td>
										<td>25,000</td>
										<td>55,000</td>
										<td>30,000</td>
									</tr>
									<tr>
										<td class="text-sm font-weight-600">Vehicle Rental</td>
										<td>30,000</td>
										<td>45,000</td>
										<td>15,000</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>
<div class="row row-deck">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xl-7">
		<div class="card overflow-hidden">
			<div class="card-header">
				<h3 class="card-title">All Expenses By Category</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-sm-12 col-md-12 text-center">
						<div id="donut" class="h-220 chart-dropshadow2"></div>
						<h2 class="mb-2 font-rubik fs-40">$1,87,595</h2>
						<small class="text-muted">15% Higher Of Previous Month</small>
					</div>
					<div class="col-xl-6 col-lg-6 col-sm-12 col-md-12 mt-4 mt-sm-0">
						<div class="">
							<p class="mb-0">Rent and Utilities</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
									<div class="progress-bar bg-primary-1 w-80"></div>
								</div>
								<p class="text-muted mt-1 mb-0">80%</p>
							</div>
						</div>
						<div class="mt-3">
							<p class="mb-0">Equipment</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
									<div class="progress-bar bg-secondary-1 w-50"></div>
								</div>
								<p class="text-muted mt-1 mb-0">50%</p>
							</div>
						</div>
						<div class="mt-3">
							<p class=" mb-0">Marketing </p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
									<div class="progress-bar bg-danger-1 w-65"></div>
								</div>
								<p class="text-muted mt-1 mb-0">65%</p>
							</div>
						</div>
						<div class="mt-3">
							<p class=" mb-0">Freelancers</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
									<div class="progress-bar bg-success w-30"></div>
								</div>
								<p class="text-muted mt-1 mb-0">30%</p>
							</div>
						</div>
						<div class="mt-3">
							<p class=" mb-0">Travel</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="progress h-3 w-100 mt-1 flex-grow-1 mr-4">
									<div class="progress-bar bg-warning-1 w-40"></div>
								</div>
								<p class="text-muted mt-1 mb-0">40%</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xl-5">
		<div class="card overflow-hidden">
			<div class="card-header">
				<h3 class="card-title">Top Website Referral Channels</h3>
			</div>
			<div class="card-body overflow-hidden">
				<div id="refferal" class="h-320 overflow-hidden"></div>
			</div>
		</div>
	</div>
</div>
@endsection
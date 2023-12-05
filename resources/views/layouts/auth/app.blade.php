<!doctype html>
<html lang="en" dir="ltr">
	<head>
		@include('layouts.auth.partials.head')
	</head>
	<body class="app sidebar-mini rtl">
		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{ asset('images/loader.svg') }}" class="loader-img" alt="Loader">
		</div>

		<div class="page">
			<div class="page-main">
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
					@include('layouts.auth.partials.left_sidebar')

					<div class="app-content  my-3 my-md-5">
						@include('layouts.auth.partials.header')
							<div class="side-app">
								@yield('content')
							</div>
					</div>
				</div>
				@include('layouts.auth.partials.right_sidebar')
				
				@include('layouts.auth.partials.footer')
		</div>

		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
		@yield('scripts')

		@include('layouts.auth.partials.scripts')
	</body>
</html>
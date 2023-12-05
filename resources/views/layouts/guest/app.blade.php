<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		@include('layouts.guest.partials.head')
	</head>
	<body>
		<div class="page">
			<div class="">
				@include('layouts.guest.partials.header')

				@yield('content')
			</div>
		</div>
		@include('layouts.guest.partials.scripts')

		@yield('scripts')

		@include('layouts.guest.partials.footer')
	</body>
</html>

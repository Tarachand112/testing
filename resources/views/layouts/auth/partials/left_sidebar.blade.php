<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
	<a class="header-brand left-meu-header-brand left-meu-header-brand-desktop" href="{{ url('dashboard') }}">
		<img src="{{ asset('images/logo/logo.jpg') }}" class="header-brand-img desktop-logo" alt="Arox logo">
		<img src="{{ asset('images/logo/mobile_logo.png') }}" class="header-brand-img mobile-view-logo" alt="Arox logo">
	</a>
	<div class="input-group p-2  bg-white border-bottom">
		<input type="text" placeholder="Search..." class="form-control search">
		<div class="input-group-prepend mr-0">
			<span class="input-group-text border-right search_btn btn-primary-default"><i class="fa fa-search text-white"></i></span>
		</div>
	</div>
	<div class="side-tab-body p-0 border-0" id="parentVerticalTab">
		<div class="first-sidemenu">
			<ul class="resp-tabs-list hor_1">
				<li data-toggle="tooltip" data-placement="right" title="Vertical"><i class="side-menu__icon typcn typcn-document-text"></i><div class="slider-text">System</div></li>
				<li class="resp-tab-active active" data-toggle="tooltip" data-placement="right" title="Home"><i class="side-menu__icon typcn typcn-device-desktop"></i><div class="slider-text">Home</div></li>
			</ul>
			<div class="second-sidemenu">
				<div class="resp-tabs-container hor_1">
					<div>
						<ul class="side-menu">
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-device-desktop"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item" href="{{ url('dashboard') }}">Dashboard</a></li>
								</ul>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-chart-pie-outline"></i><span class="side-menu__label">User Management</span><i class="angle fa fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li><a href="chart-chartist.html" class="slide-item">Super Admin Users</a></li>
									<li><a href="chart-flot.html" class="slide-item">Admin Users</a></li>
									<li><a href="{{ url('system/user_management/user') }}" class="slide-item">User</a></li>
									<li><a href="{{ url('system/user_management/company') }}" class="slide-item">Companies</a></li>
								</ul>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-th-large-outline"></i><span class="side-menu__label">Translations</span><i class="angle fa fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li><a href="{{ url('system/translations/edit_translation') }}" class="slide-item">Edit Translations</a></li>
									<li><a href="{{ url('system/translations/edit_section') }}" class="slide-item">Edit Sectons</a></li>
									<li><a href="{{ url('system/translations/edit_label') }}" class="slide-item">Edit Labels</a></li>
								</ul>
							</li> 
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>	
</aside>
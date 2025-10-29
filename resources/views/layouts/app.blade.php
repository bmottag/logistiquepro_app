<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../"/>
		<title>{{ config('app.name') }}</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/keen" />
		<meta property="og:site_name" content="Keenthemes | Keen" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="canonical" href="https://preview.keenthemes.com/keen" />
		<link rel="icon" type="image/x-icon" href="./images/logo.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
        <link rel="stylesheet" href="{{ asset('template/assets/plugins/custom/datatables/datatables.bundle.css') }}">
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link rel="stylesheet" href="{{ asset('template/assets/plugins/global/plugins.bundle.css') }}">
        <link rel="stylesheet" href="{{ asset('template/assets/css/style.bundle.css') }}">
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script> document.documentElement.setAttribute("data-bs-theme", "dark"); </script>

		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header d-flex">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<!--begin::Sidebar toggle-->
						<div class="d-flex d-lg-none align-items-center ms-n2 me-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
						</div>
						<!--end::Sidebar toggle-->
						<!--begin::Logo-->
						<div class="d-flex d-lg-none align-items-center me-auto">
							<a href="{{ route('dashboard') }}">
								<img alt="Logo" src="{{ asset('template/assets/media/logos/logo.png') }}" class="h-40px" />
							</a>
						</div>
						<!--end::Logo-->
						<!--begin::Page title-->
						<div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_container'}" class="page-title d-flex flex-column justify-content-center me-3 mb-6 mb-lg-0">
							<!--begin::Title-->
                        	<img alt="Logo" src="{{ asset('images/logo.png') }}" />
							<!--end::Title-
							<!--begin::Breadcrumb-->
							@hasSection('breadcrumb')
								@yield('breadcrumb')
							@endif
							<!--end::Breadcrumb-->
						</div>
						<!--end::Page title-->
						<!--begin::Navbar-->
						<div class="app-navbar flex-stack flex-shrink-0 mt-lg-3" id="kt_app_aside_navbar">
							<!--begin:Author-->
							<div class="d-flex align-items-center me-2">
								<!--begin::User menu-->
								<div class="app-navbar-item me-1 me-lg-5" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="{{ Auth::user()->avatar }}" alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="{{ Auth::user()->avatar }}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}
													{!! Auth::user()->getRoleBadge(true) !!}
													</div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="{{ route('profile.index') }}" class="menu-link px-5">My Profile</a>
										</div>
										<!--end::Menu item-->

										@if(auth()->user()->isSuperAdmin())
											<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
												<a href="#" class="menu-link px-5">
													<span class="menu-title">Administration</span>
													<span class="menu-arrow"></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ route('users.index') }}" class="menu-link px-5">Clients</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
										@endif

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                                @csrf
                                                <a href="#" class="menu-link px-5"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ __('Sign Out') }}
                                                </a>
                                            </form>
                                        </div>
                                        <!--end::Menu item-->
									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User menu-->
                                @auth
                                    <!--begin:Info-->
                                    <div class="d-none d-lg-block m-0">
                                        <a href="{{ route('profile.edit') }}" class="text-gray-800 text-hover-primary fs-4 fw-bold">
                                            {{ Auth::user()->name }}
                                        </a>
                                        <span class="text-gray-400 fw-semibold d-block">
                                            {{ Auth::user()->job_title ?? 'Usuario' }}
                                        </span>
                                    </div>
                                    <!--end:Info-->
                                @endauth
							</div>
							<!--end:Author-->
						</div>
						<!--end::Navbar-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="100px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<!--begin::Logo-->
						<div class="app-sidebar-logo d-none d-lg-flex flex-center pt-8 mb-3" id="kt_app_sidebar_logo">
							<!--begin::Logo image-->
							<a href="{{ route('dashboard') }}">
								<img alt="Logo" src="{{ asset('./images/lp_logo.png') }}" class="h-30px" />
							</a>
							<!--end::Logo image-->
						</div>
						<!--end::Logo-->
						<!--begin::sidebar menu-->
						<div class="app-sidebar-menu d-flex flex-center overflow-hidden flex-column-fluid">
							<!--begin::Menu wrapper-->
								<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper d-flex hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu, #kt_app_sidebar" data-kt-scroll-offset="5px">
									<!--begin::Menu-->
									<div class="menu menu-column menu-rounded menu-active-bg menu-title-gray-700 menu-arrow-gray-500 menu-icon-gray-500 menu-bullet-gray-500 menu-state-primary my-auto" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
										<!--begin:Menu item-->
										@php
											$isHomeActive = request()->routeIs('dashboard');
										@endphp
										<div class="menu-item {{ $isHomeActive ? 'here show' : '' }} py-2">
											<a href="{{ route('dashboard') }}" class="menu-link menu-center">
												<span class="menu-icon me-0 d-flex flex-column align-items-center">
													<i class="bi bi-house fs-1"></i>
													<span class="menu-title">Home</span>
												</span>
											</a>
										</div>
										<!--end:Menu item-->

										<!--begin:Menu EVENTS-->
										@php
											$isEventsActive = request()->routeIs('reserve.*');
										@endphp

										<div class="menu-item {{ $isEventsActive ? 'here show' : '' }} py-2">
											<a href="{{ route('reserve.index') }}" class="menu-link menu-center">
												<span class="menu-icon me-0 d-flex flex-column align-items-center">
													<i class="bi bi-calendar-event fs-1"></i>
													<span class="menu-title">Reservations</span>
												</span>
											</a>
										</div>

										<!--end:Menu EVENTS-->
										

									</div>
									<!--end::Menu-->
								</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::sidebar menu-->
					</div>
					<!--end::Sidebar-->
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        @yield('content')
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->



		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="{{ asset('template/assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('template/assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
        <script src="{{ asset('template/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
        <script src="{{ asset('template/assets/js/custom/apps/projects/list/list.js') }}"></script>
        <script src="{{ asset('template/assets/js/widgets.bundle.js') }}"></script>
        <script src="{{ asset('template/assets/js/custom/apps/chat/chat.js') }}"></script>
        <script src="{{ asset('template/assets/js/custom/utilities/modals/users-search.js') }}"></script>
		@yield('scripts')
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
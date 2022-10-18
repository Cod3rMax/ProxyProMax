
 <x-main-header-component></x-main-header-component>



<!-- Header -->

<nav id="navigation" class="site-header site-header--status navigation navigation-justified ">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 m-auto">
				<div class="navigation-header">
					<div class="navigation-logo">
						<a href="index.html">


							<img loading="lazy" src="{{ asset('img/logo.png') }}" alt="logo">

						</a>
					</div>
					<div class="navigation-button-toggler">
						<i class="hamburger-icon"></i>
					</div>
				</div>
				<div class="navigation-body">
					<div class="navigation-body-header">
						<div class="navigation-logo">
							<a href="index.html">


								<img loading="lazy" src="{{ asset('img/logo.png') }}" alt="logo">

							</a>
						</div>
						<span class="navigation-body-close-button">&#10005;</span>
					</div>

					<div class="navigation-body-section navigation-additional-menu">
						<a href="{{ Route('MainPage') }}" type="button" class="crumina-button button--green button--l">HOME</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>

<!-- ... end Header -->


<div class="main-content-wrapper">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 m-auto">

					<div class="status-page-description mt-negative35 mb-5">
						<div class="status-page-title bg-orange-themes">
							<div class="title">You can find your info below: </div>
						</div>

						<div class="status-page-description-list">
							<div class="description-list-item">
								<h6 class="fs-16">Email:</h6>
								<p>{{ $user[0]->email }}</p>
							</div>

							<div class="description-list-item">
								<h6 class="fs-16">User Role:</h6>
								<p>{{ $user[0]->UserRole->role }}</p>
							</div>

							<div class="description-list-item">
								<h6 class="fs-16">Account Status:</h6>
								<span class="location-list">@if($user[0]->UserConfirmation->confirmed) <a href="#" class="location-list-item">VERIFIED</a> @else NOT VERIFIED @endif</span>
							</div>



                            <div class="description-list-item">
								<h6 class="fs-16">Edit Password:</h6>
								<span class="location-list"> <a href="{{ Route('ChangeUserPassword') }}" class="location-list-item">Change Password</a></span>
							</div>



						</div>
					</div>

					<a class="read-more--with-arrow read-more--with-arrow-left c-lime mb-5" href="{{ Route('MainPage') }}">
						<svg class="crumina-icon" width="14px" height="9px">
							<path fill-rule="evenodd" d="M4.573,0.139 C4.763,-0.042 5.081,-0.042 5.278,0.139 C5.469,0.313 5.469,0.602 5.278,0.776 L1.701,4.035 L13.506,4.035 C13.781,4.035 14.000,4.234 14.000,4.485 C14.000,4.736 13.781,4.942 13.506,4.942 L1.701,4.942 L5.278,8.196 C5.469,8.376 5.469,8.666 5.278,8.838 C5.081,9.019 4.763,9.019 4.573,8.838 L0.148,4.807 C-0.049,4.633 -0.049,4.344 0.148,4.171 L4.573,0.139 Z" />
						</svg>
						Back to Main Page
					</a>

				</div>
			</div>
		</div>
	</section>
</div>


<!-- Footer -->

<x-main-footer-component :message="$SocialMediaLinks"></x-main-footer-component>

<!-- ... end Footer -->


</body>
</html>


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
						<button type="button" class="crumina-button button--green button--l" data-toggle="modal" data-target="#popupSubscribe">SUBSCRIBE</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>

<!-- ... end Header -->


<!-- Popup Subscribe -->

<div class="modal fade window-popup popup-subscribe" id="popupSubscribe" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="tabs tabs--subscribe">
					<div class="nav nav-tabs" id="myTab2" role="tablist">

						<a class="nav-item nav-link active" id="email-tab" data-toggle="tab" href="#email" role="tab" aria-controls="email" aria-selected="true">
							Email
						</a>

						<a class="nav-item nav-link" id="sms-tab" data-toggle="tab" href="#sms" role="tab" aria-controls="sms" aria-selected="false">
							SMS
						</a>

						<a class="nav-item nav-link" id="webhook-tab" data-toggle="tab" href="#webhook" role="tab" aria-controls="webhook" aria-selected="false">
							Webhook
						</a>

						<a class="nav-item nav-link" id="rss-tab" data-toggle="tab" href="#rss" role="tab" aria-controls="rss" aria-selected="false">
							Rss
						</a>

						<a class="nav-item nav-link" id="twitter-tab" data-toggle="tab" href="#twitter" role="tab" aria-controls="twitter" aria-selected="false">
							Twitter
						</a>

						<a class="nav-item nav-link" id="calendar-tab" data-toggle="tab" href="#calendar" role="tab" aria-controls="calendar" aria-selected="false">
							Calendar
						</a>

					</div>
				</div>
			</div>
			<div class="modal-body">

				<div class="tab-content" id="myTabContent2">

					<div class="tab-pane fade show active" id="email" role="tabpanel" aria-labelledby="email-tab">

						<form class="form-popup-subscribe">
							<div class="form-item">
								<h5 class="fw-medium">SUBSCRIBE TO RECEIVE STATUS UPDATES BY EMAIL</h5>
							</div>
							<div class="form-item">
								<input class="input--grey input--squared" type="email" placeholder="Email Address">
							</div>
							<div class="form-item">
								<p class="fs-14 fw-medium">Please be advised, by subscribing to receive notifications, you are agreeing to share your contact information with Status io. View the
									<a href="#" class="c-lime">Privacy Policy</a>.</p>
							</div>
							<div class="form-item">
								<button type="button" class="crumina-button button--green button--l w-100">AGREE AND SUBSCRIBE</button>
							</div>
						</form>

					</div>

					<div class="tab-pane fade" id="sms" role="tabpanel" aria-labelledby="sms-tab">

						<form class="form-popup-subscribe">
							<div class="form-item">
								<h5 class="fw-medium">SUBSCRIBE TO RECEIVE STATUS UPDATES BY EMAIL</h5>
							</div>
							<div class="form-item">
								<input class="input--grey input--squared" type="email" placeholder="Email Address">
							</div>
							<div class="form-item">
								<p class="fs-14 fw-medium">Please be advised, by subscribing to receive notifications, you are agreeing to share your contact information with Status io. View the
									<a href="#" class="c-lime">Privacy Policy</a>.</p>
							</div>
							<div class="form-item">
								<button type="button" class="crumina-button button--green button--l w-100">AGREE AND SUBSCRIBE</button>
							</div>
						</form>

					</div>

					<div class="tab-pane fade" id="webhook" role="tabpanel" aria-labelledby="webhook-tab">

						<form class="form-popup-subscribe">
							<div class="form-item">
								<h5 class="fw-medium">SUBSCRIBE TO RECEIVE STATUS UPDATES BY EMAIL</h5>
							</div>
							<div class="form-item">
								<input class="input--grey input--squared" type="email" placeholder="Email Address">
							</div>
							<div class="form-item">
								<p class="fs-14 fw-medium">Please be advised, by subscribing to receive notifications, you are agreeing to share your contact information with Status io. View the
									<a href="#" class="c-lime">Privacy Policy</a>.</p>
							</div>
							<div class="form-item">
								<button type="button" class="crumina-button button--green button--l w-100">AGREE AND SUBSCRIBE</button>
							</div>
						</form>

					</div>

					<div class="tab-pane fade" id="rss" role="tabpanel" aria-labelledby="rss-tab">

						<form class="form-popup-subscribe">
							<div class="form-item">
								<h5 class="fw-medium">SUBSCRIBE TO RECEIVE STATUS UPDATES BY EMAIL</h5>
							</div>
							<div class="form-item">
								<input class="input--grey input--squared" type="email" placeholder="Email Address">
							</div>
							<div class="form-item">
								<p class="fs-14 fw-medium">Please be advised, by subscribing to receive notifications, you are agreeing to share your contact information with Status io. View the
									<a href="#" class="c-lime">Privacy Policy</a>.</p>
							</div>
							<div class="form-item">
								<button type="button" class="crumina-button button--green button--l w-100">AGREE AND SUBSCRIBE</button>
							</div>
						</form>

					</div>

					<div class="tab-pane fade" id="twitter" role="tabpanel" aria-labelledby="twitter-tab">

						<form class="form-popup-subscribe">
							<div class="form-item">
								<h5 class="fw-medium">SUBSCRIBE TO RECEIVE STATUS UPDATES BY EMAIL</h5>
							</div>
							<div class="form-item">
								<input class="input--grey input--squared" type="email" placeholder="Email Address">
							</div>
							<div class="form-item">
								<p class="fs-14 fw-medium">Please be advised, by subscribing to receive notifications, you are agreeing to share your contact information with Status io. View the
									<a href="#" class="c-lime">Privacy Policy</a>.</p>
							</div>
							<div class="form-item">
								<button type="button" class="crumina-button button--green button--l w-100">AGREE AND SUBSCRIBE</button>
							</div>
						</form>

					</div>

					<div class="tab-pane fade" id="calendar" role="tabpanel" aria-labelledby="calendar-tab">

						<form class="form-popup-subscribe">
							<div class="form-item">
								<h5 class="fw-medium">SUBSCRIBE TO RECEIVE STATUS UPDATES BY EMAIL</h5>
							</div>
							<div class="form-item">
								<input class="input--grey input--squared" type="email" placeholder="Email Address">
							</div>
							<div class="form-item">
								<p class="fs-14 fw-medium">Please be advised, by subscribing to receive notifications, you are agreeing to share your contact information with Status io. View the
									<a href="#" class="c-lime">Privacy Policy</a>.</p>
							</div>
							<div class="form-item">
								<button type="button" class="crumina-button button--green button--l w-100">AGREE AND SUBSCRIBE</button>
							</div>
						</form>

					</div>

				</div>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					CLOSE WINDOW
				</button>
			</div>
		</div>
	</div>
</div>

<!-- ... end Popup Subscribe -->


<div class="main-content-wrapper">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 m-auto">

					<div class="status-page-description mt-negative35 mb-5">
						<div class="status-page-title bg-blue-themes">
							<div class="title">Hostsight Subscription and Browsing systems maintenance</div>
							<div class="update-status">Planned Maintenance</div>
						</div>

						<div class="status-page-description-list">
							<div class="description-list-item">
								<h6 class="fs-16">Schedule:</h6>
								<p>March 30, 2019 20:00 - 20:15 UTC</p>
							</div>
							<div class="description-list-item">
								<h6 class="fs-16">Components:</h6>
								<p>Hosted Status Pages, Status Notifications, Developer API, Status API, Websites</p>
							</div>
							<div class="description-list-item">
								<h6 class="fs-16">Data Centers:</h6>
								<p>Ireland, Canada, Sydney, US-East, US-West</p>
							</div>
							<div class="description-list-item">
								<h6 class="fs-16">Description:</h6>
								<p>Viverra aliquet eget sit amet tellus cras adipiscing. Nunc lobortis mattis aliquam faucibus purus in. Sem nulla pharetra diam sit. At lectus urna duis convallis convallis tellus id interdum velit sagittis aliquam. Amet consectetur adipiscing elit pellentesque habitant morbi tristique et.</p>
							</div>
						</div>
					</div>

					<a class="read-more--with-arrow read-more--with-arrow-left c-lime mb-5" href="18_status_page.html">
						<svg class="crumina-icon" width="14px" height="9px">
							<path fill-rule="evenodd" d="M4.573,0.139 C4.763,-0.042 5.081,-0.042 5.278,0.139 C5.469,0.313 5.469,0.602 5.278,0.776 L1.701,4.035 L13.506,4.035 C13.781,4.035 14.000,4.234 14.000,4.485 C14.000,4.736 13.781,4.942 13.506,4.942 L1.701,4.942 L5.278,8.196 C5.469,8.376 5.469,8.666 5.278,8.838 C5.081,9.019 4.763,9.019 4.573,8.838 L0.148,4.807 C-0.049,4.633 -0.049,4.344 0.148,4.171 L4.573,0.139 Z" />
						</svg>
						Back to Current Status
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

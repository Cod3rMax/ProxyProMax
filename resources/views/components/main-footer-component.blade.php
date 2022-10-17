<footer id="site-footer" class="footer footer--dark footer--with-decoration">

	<div class="footer-content">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="widget widget_links">
						<h5 class="widget-title">
							ProxyProMax
						</h5>
						<ul>
							<li>
								<a href="02_wp_host.html">
									Home
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="{{ Route('AllProxies') }}">
									Free Proxy List
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="{{ Route('UKProxies') }}">
									UK Proxy List
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="{{ Route('UsaProxies') }}">
									USA Proxy List
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="{{ Route('CleanProxies') }}">
									Clean Proxy List
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="widget widget_links">
						<h5 class="widget-title">
							Tools
						</h5>
						<ul>
							<li>
								<a href="{{ Route('ProxyChecker') }}">
									Proxy Checker
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
                            <li>
								<a href="07_domains.html">
									Server Status
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>

						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="widget widget_links">
						<h5 class="widget-title">
							Support
						</h5>
						<ul>
							<li>
								<a href="{{ Route('Terms') }}">
									Terms & Conditions
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="{{ Route('PrivacyPolicy') }}">
									Privacy Policy
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="15_blog.html">
									FAQ
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="17_contacts.html">
									Contacts US
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-0 mb-lg-0">
					<div class="widget w-info">
						<a href="{{ Route('MainPage') }}" class="site-logo">


							<img loading="lazy" src="{{ asset('img/logo.png') }}" alt="logo" width="185">

						</a>
						<p>ProxyProMax offers the best checked proxies, for free & real human support.</p>
						<ul class="socials">
							<li>
								<a href="{{ $message[0]->Discord }}" target="SocialMedia">

									<img class="crumina-icon " loading="lazy" src="{{ asset('img/theme-content/social-icons/discord.png') }}" alt="discord">

								</a>
							</li>
							<li>
								<a href="{{ $message[0]->Twitter }}" target="SocialMedia">

									<img class="crumina-icon " loading="lazy" src="{{ asset('img/theme-content/social-icons/twitter.png') }}" alt="twitter">

								</a>
							</li>
							<li>
								<a href="{{ $message[0]->Instagram }}" target="SocialMedia">

									<img class="crumina-icon " loading="lazy" src="{{ asset('img/theme-content/social-icons/instagram.png') }}" alt="instagram">

								</a>
							</li>
							<li>
								<a href="{{ $message[0]->Youtube }}" target="SocialMedia">

									<img class="crumina-icon " loading="lazy" src="{{ asset('img/theme-content/social-icons/youtube.png') }}" alt="youtube">

								</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

<x-main-newsletter-component></x-main-newsletter-component>

	<div class="sub-footer bg-black">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mb-0 mb-lg-0">
					<div class="copyright">
						<span>Copyright © 2020-2022 <a href="#">ProxyProMax</a> Developed by <a href="https://Cod3rMax.com">Cod3rMax</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a class="back-to-top" href="#">
		<svg class="crumina-icon">
			<use xlink:href="#icon-to-top"></use>
		</svg>
	</a>

</footer>

@vite(["resources/js/app.js"])
<script src="{{ asset('js/jquery.min.js') }}"></script>

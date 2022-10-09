<nav id="navigation" class="site-header navigation navigation-justified header--sticky">
	<div class="container">
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
			<ul class="navigation-menu">


				<li class="navigation-item is-active">
                    <a class="navigation-link" href="{{ Route('MainPage') }}">Home</a>
				</li>




				<li class="navigation-item">
					<a class="navigation-link" href="#">Proxy Servers</a>
					<ul class="navigation-dropdown">


						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="07_domains.html">Free Proxy List</a>
						</li>


						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="08_domain_checking.html">UK Proxy List</a>
                        </li>

                        <li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="08_domain_checking.html">USA Proxy List</a>
                        </li>

                        <li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="08_domain_checking.html">Clean Proxies</a>
                        </li>

					</ul>
				</li>






				<li class="navigation-item">
                    <a class="navigation-link" href="17_contacts.html">Proxy Checker</a>
				</li>


				<li class="navigation-item">
					<a class="navigation-link" href="#">
						Support
					</a>
					<ul class="navigation-dropdown">

						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="14_submit_a_request.html">Contact US</a>
						</li>
                        <li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="14_submit_a_request.html">FAQ</a>
						</li>

					</ul>
				</li>



				<li class="navigation-item">
					<a class="navigation-link" href="#">
						Proxy Blog
					</a>
					<ul class="navigation-dropdown">

						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="14_submit_a_request.html">Title number one</a>
						</li>
                        <li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="14_submit_a_request.html">Title number two</a>
						</li>

					</ul>
				</li>



			</ul>
			<div class="navigation-body-section navigation-additional-menu">

                @if(Auth::check() && Auth::user()->UserConfirmation->confirmed)
				<a href="{{ Route('UserLogout') }}" class="crumina-button button--uppercase button--yellow button--xs">Logout</a>
                @elseif (Auth::check() && !Auth::user()->UserConfirmation->confirmed)
                <a href="{{ Route('UserConfirmation') }}" class="crumina-button button--uppercase button--orange button--xs">Verify</a>
                @else
                <a href="{{ Route('UserLogin') }}" class="crumina-button button--uppercase button--green button--xs">Login</a>
                @endif

			</div>
		</div>
	</div>
</nav>

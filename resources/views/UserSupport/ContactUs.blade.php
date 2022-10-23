<x-main-header-component></x-main-header-component>


    <!-- Main Header -->

    <x-main-navbar-component></x-main-navbar-component>

    <!-- ... end Main Header -->





<div class="main-content-wrapper">

    <section class="crumina-stunning-header stunning-header-bg1 pb60">
        <div class="container">
            <div class="row justify-content-center align-center">
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
                    <h1 class="page-title text-white">User Support</h1>
                    <p class="page-text text-white">We take our terms & conditions seriously.</p>
                </div>
            </div>
        </div>
    </section>

	<div id="our-story" class="crumina-breadcrumbs breadcrumbs--dark-themes">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ul class="breadcrumbs">
						<li class="breadcrumbs-item">
							<a href="{{ Route('MainPage') }}">Home</a>
						</li>
						<li class="breadcrumbs-item active">
							<span>Terms & Conditions</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

    <section class="small-section-padding section-bg7">
        <div class="container">



            <div id="app" class="align-center">
                <contactus-component></contactus-component>
            </div>


        </div>
    </section>







    <div class="crumina-breadcrumbs breadcrumbs--red">&nbsp;</div>

    <x-main-faq-component></x-main-faq-component>


    <div class="crumina-breadcrumbs breadcrumbs--red">&nbsp;</div>
</div>


<!-- Footer -->

<x-main-footer-component :message="$SocialMediaLinks"></x-main-footer-component>

<!-- ... end Footer -->

</body>
</html>

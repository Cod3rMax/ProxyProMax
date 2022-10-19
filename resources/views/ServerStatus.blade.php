
 <x-main-header-component></x-main-header-component>


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
	<section class="pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 m-auto">
					<div class="status-page-title bg-green-themes mt-negative35 mb-5">
						<div class="title">{{ $ServerActiveOperations >= 2 ? 'Systems Are Operational' : 'Some Operations Are Down' }}</div>
						<div class="update-status">Updated a few seconds ago</div>
					</div>
					<h3>Server Status</h3>
					<p>What server status do</p>
					<div class="row my-5">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
							<div class="statistic-item">
								<div class="statistic-item-value">{{ $ServerActiveOperations }}</div>
								<div class="statistic-item-descr">Active Operations</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
							<div class="statistic-item">
								<div class="statistic-item-value">{{ $ServerStoppedOperations }}</div>
								<div class="statistic-item-descr">Stopped Operations</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="statistic-item">
								<div class="statistic-item-value">{{ $ServerMaintenanceOperations }}</div>
								<div class="statistic-item-descr">Active Maintenances</div>
							</div>
						</div>
					</div>



					<table class="table--style3">
						<thead>
						<tr>
							<th></th>
							<th></th>
						</tr>
						</thead>
						<tbody>

                            @foreach ($ServerStatus as $Operation)


                            <tr>
                                <td>
                                    <span>{{ $Operation->operation_name }}</span>
                                    <span class="info-icon info-icon--lime" data-toggle="tooltip" data-placement="top" title="here some shit about the operation">?</span>
                                </td>

                                @if ($Operation->is_active == 1)

                                <td><span class="font-weight-bold c-lime">Operational</span></td>

                                @elseif($Operation->is_active == 2)

                                <td><span class="font-weight-bold c-orange">Under Maintenance</span></td>

                                @else

                                <td><span class="font-weight-bold c-red">Down</span></td>

                                @endif



                            </tr>


                            @endforeach
						</tbody>
					</table>



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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HOSTSight - Home</title>

    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/Bootstrap/bootstrap.min.css') }}">

</head>

<body>
    <!-- Main Header -->

    <x-main-navbar-component></x-main-navbar-component>

    <!-- ... end Main Header -->




    <div class="main-content-wrapper">

        <section class="crumina-module crumina-module-slider crumina-main-slider">
            <!--Prev next buttons-->

            <div class="swiper-btn-prev">
                <svg class="crumina-icon">
                    <use xlink:href="#icon-prev"></use>
                </svg>
            </div>

            <div class="swiper-btn-next">
                <svg class="crumina-icon">
                    <use xlink:href="#icon-next"></use>
                </svg>
            </div>


            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->


                <div class="swiper-slide stunning-header-bg5">

                    <div class="container">
                        <div class="row">

                            <div class="slider-content">

                                <h2 class="slider-content-title" data-swiper-parallax="-100">Get Your Daily Proxies List
                                    For Free With Our Big Network.</h2>

                                <p class="slider-content-text" data-swiper-parallax="-200">Surf the internet safely
                                    without concerns about getting your identity exposed.</p>

                                <div class="universal-btn-wrapper">
                                    <a href="27_pricing_tables.html" class="crumina-button button--yellow button--l">Get
                                        Proxies</a>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>



                <!--Pagination tabs-->

                <x-pagination-tabs-component></x-pagination-tabs-component>

                <!--Pagination tabs ends-->

            </div>

        </section>

        <section class="medium-section-padding bg-grey">
            <div class="container">
                <table class="table table-responsive-lg table--style3 align-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Proxy</th>
                            <th scope="col">Country</th>
                            <th scope="col">Protocol</th>
                            <th scope="col">Status</th>
                            <th scope="col">Last Checked</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Proxies as $key=>$Proxy)
                            <tr class="font-weight-bold">
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $Proxy->ProxyIP }}</td>
                                <td>{{ $Proxy->Country }}</td>
                                <td>{{ $Proxy->Protocol }}</td>
                                <td><span class="label-category @if($Proxy->Blacklisted == 1) label--red @else label--green @endif">{{ $Proxy->Blacklisted == 1 ? "BLACKLISTED" : "CLEAN" }}</span></td>
                                <td>{{ $Proxy->updated_at != NULL ? $Proxy->updated_at->diffForHumans() : $Proxy->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>


                <div class="universal-btn-wrapper d-flex justify-content-center">
                    <a href="ergerg" class="crumina-button button--dark button--l">FREE PROXY LIST</a>
                </div>
            </div>
        </section>

        <section class="large-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 align-center mr-auto ml-auto mb-5">
                        <h2>FREE PROXY LIST</h2>
                        <p class="fs-18 fw-medium">We always try to provide the high-quality proxies list, even if it's
                            a free proxy list.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                        <div class="crumina-module crumina-info-box info-box--icon-scaled">

                            <h5 class="info-box-title">Hide your ip</h5>

                            <div class="info-box-thumb">


                                <img loading="lazy" src="img/demo-content/icons/info-icon23.png" alt="icon">

                            </div>

                            <div class="info-box-content">
                                <p class="info-box-text">Surf the internet safely without concerns about getting your
                                    identity exposed.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                        <div class="crumina-module crumina-info-box info-box--icon-scaled">

                            <h5 class="info-box-title">100% Uptime</h5>

                            <div class="info-box-thumb">


                                <img loading="lazy" src="img/demo-content/icons/info-icon37.png" alt="icon">

                            </div>

                            <div class="info-box-content">
                                <p class="info-box-text">Our proxy site list update proxy list automatically every 10-30
                                    minutes to get you new fresh proxies.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                        <div class="crumina-module crumina-info-box info-box--icon-scaled">

                            <h5 class="info-box-title">Great Support</h5>

                            <div class="info-box-thumb">


                                <img loading="lazy" src="img/demo-content/icons/info-icon19.png" style="height: 10.5em;"
                                    alt="icon">

                            </div>

                            <div class="info-box-content">
                                <p class="info-box-text">We treat all our users equally, and we do provide 24/h support
                                    to serve you better.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="large-section-padding bg-yellow-themes">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4 mb-md-0">
                        <h4 class="align-center">WHY CHOOSE PROXYPROMAX?</h4>
                        <p class="fs-18 fw-medium align-center">You're wondering now why should i use your network?</p>
                        <div class="accordion crumina-module crumina-accordion accordion--style1 mt-5" id="accordion1">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Free Daily proxies
                                            <span class="icons">
                                                <svg class="crumina-icon icon-plus">
                                                    <use xlink:href="#icon-plus"></use>
                                                </svg>
                                                <svg class="crumina-icon active icon-minus">
                                                    <use xlink:href="#icon-minus"></use>
                                                </svg>
                                            </span>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        Always Free Daily proxies updated every 30mn with great support.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Highly Anonymous Proxies
                                            <span class="icons">
                                                <svg class="crumina-icon icon-plus">
                                                    <use xlink:href="#icon-plus"></use>
                                                </svg>
                                                <svg class="crumina-icon active icon-minus">
                                                    <use xlink:href="#icon-minus"></use>
                                                </svg>
                                            </span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        We provide Elite Proxy / Highly Anonymous Proxy
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Undetectable Proxies
                                            <span class="icons">
                                                <svg class="crumina-icon icon-plus">
                                                    <use xlink:href="#icon-plus"></use>
                                                </svg>
                                                <svg class="crumina-icon active icon-minus">
                                                    <use xlink:href="#icon-minus"></use>
                                                </svg>
                                            </span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        The websites can't detect that you are using a proxy.
                                    </div>
                                </div>
                            </div>



                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            High Quality Proxies
                                            <span class="icons">
                                                <svg class="crumina-icon icon-plus">
                                                    <use xlink:href="#icon-plus"></use>
                                                </svg>
                                                <svg class="crumina-icon active icon-minus">
                                                    <use xlink:href="#icon-minus"></use>
                                                </svg>
                                            </span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        We always try to provide the high-quality list, even if it's a free proxy list.
                                    </div>
                                </div>
                            </div>



                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Fresh Proxies List
                                            <span class="icons">
                                                <svg class="crumina-icon icon-plus">
                                                    <use xlink:href="#icon-plus"></use>
                                                </svg>
                                                <svg class="crumina-icon active icon-minus">
                                                    <use xlink:href="#icon-minus"></use>
                                                </svg>
                                            </span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        Our proxy site list update proxy list automatically every 10-30 minutes to get
                                        you new fresh proxies.
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="large-section-padding stunning-header-bg13">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 align-center mb-5">
                        <h2 class="text-white">Most Proxies Locations</h2>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5">
                        <div class="crumina-module crumina-location-servers">
                            <div class="location-servers-map">


                                <img loading="lazy" src="img/theme-content/images/map-dark.png" alt="map">

                                <span class="location-server-item location-server-item-border-dark bg-accent-primary"
                                    style="top: 19%; left: 50%;" data-toggle="tooltip" data-placement="left"
                                    data-html="true"
                                    title="<span class='font-weight-bold'>GERMAN SERVER</span>"></span>
                                <span class="location-server-item location-server-item-border-dark bg-yellow-themes"
                                    style="top: 13%; left: 15%;" data-toggle="tooltip" data-placement="left"
                                    data-html="true"
                                    title="<span class='font-weight-bold'>CANADA SERVER</span>"></span>
                                <span class="location-server-item location-server-item-border-dark bg-orange-themes"
                                    style="top: 24%; left: 18%;" data-toggle="tooltip" data-placement="left"
                                    data-html="true" title="<span class='font-weight-bold'>USA SERVER</span>"></span>
                                <span class="location-server-item location-server-item-border-dark bg-red-themes"
                                    style="top: 28%; left: 11%;" data-toggle="tooltip" data-placement="left"
                                    data-html="true" title="<span class='font-weight-bold'>USA SERVER</span>"></span>
                                <span class="location-server-item location-server-item-border-dark bg-accent-primary"
                                    style="top: 60%; left: 22%;" data-toggle="tooltip" data-placement="left"
                                    data-html="true"
                                    title="<span class='font-weight-bold'>ARGENTINA SERVER</span>"></span>
                                <span class="location-server-item location-server-item-border-dark bg-blue-themes"
                                    style="top: 74%; left: 27%;" data-toggle="tooltip" data-placement="left"
                                    data-html="true"
                                    title="<span class='font-weight-bold'>BRAZIL SERVER</span>"></span>
                                <span class="location-server-item location-server-item-border-dark bg-red-themes"
                                    style="top: 41%; left: 46%;" data-toggle="tooltip" data-placement="left"
                                    data-html="true"
                                    title="<span class='font-weight-bold'>UGANDA SERVER</span>"></span>
                                <span class="location-server-item location-server-item-border-dark bg-orange-themes"
                                    style="top: 61%; left: 54%;" data-toggle="tooltip" data-placement="left"
                                    data-html="true"
                                    title="<span class='font-weight-bold'>ZAMBIA SERVER</span>"></span>
                                <span class="location-server-item location-server-item-border-dark bg-yellow-themes"
                                    style="top: 10%; left: 69%;" data-toggle="tooltip" data-placement="left"
                                    data-html="true"
                                    title="<span class='font-weight-bold'>IRKUTSK SERVER</span>"></span>
                                <span class="location-server-item location-server-item-border-dark bg-blue-themes"
                                    style="top: 25%; left: 63%;" data-toggle="tooltip" data-placement="left"
                                    data-html="true"
                                    title="<span class='font-weight-bold'>PALESTINE SERVER</span>"></span>
                                <span class="location-server-item location-server-item-border-dark bg-red-themes"
                                    style="top: 14%; left: 79%;" data-toggle="tooltip" data-placement="left"
                                    data-html="true"
                                    title="<span class='font-weight-bold'>ARCHANGELSK SERVER</span>"></span>
                                <span class="location-server-item location-server-item-border-dark bg-yellow-themes"
                                    style="top: 76%; left: 87%;" data-toggle="tooltip" data-placement="left"
                                    data-html="true"
                                    title="<span class='font-weight-bold'>AUSTRALIA SERVER</span>"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="large-section-padding section-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 m-auto align-center">
                        <h2>WHAT OUR USERS SAY ABOUT US</h2>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
                        <div
                            class="crumina-module crumina-module-slider crumina-slider--testimonial navigation-bottom-center pagination-bottom-center">

                            <div class="swiper-btn-prev swiper-btn-white">
                                <svg class="crumina-icon icon-line-arrow-left">
                                    <use xlink:href="#icon-arrow-left"></use>
                                </svg>
                            </div>

                            <div class="swiper-btn-next swiper-btn-white">
                                <svg class="crumina-icon icon-line-arrow-right">
                                    <use xlink:href="#icon-arrow-right"></use>
                                </svg>
                            </div>

                            <div class="swiper-container" data-show-items="2" data-prev-next="1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div
                                            class="crumina-module crumina-testimonial-item testimonial--author-bottom">
                                            <div class="testimonial-content">
                                                <h6 class="testimonial-text">
                                                    Their product is simple, straight forward and free. I would
                                                    definitely recommend them for your proxy needs.
                                                </h6>
                                            </div>
                                            <div class="author-content-wrap">
                                                <div class="avatar">
                                                    <img loading="lazy" src="img/demo-content/avatars/author2.png"
                                                        alt="avatar">
                                                </div>
                                                <div class="author-content">
                                                    <a href="#" class="author-name h6">Frolic Simpson</a>
                                                    <div class="author-company">USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div
                                            class="crumina-module crumina-testimonial-item testimonial--author-bottom">
                                            <div class="testimonial-content">
                                                <h6 class="testimonial-text">
                                                    Well, I want to express my gratitude to the support team. We have
                                                    been using the corporate solution for more than a year, of course
                                                    there were problems, but support is always on our side, all issues
                                                    are resolved quickly.
                                                </h6>
                                            </div>
                                            <div class="author-content-wrap">
                                                <div class="avatar">
                                                    <img loading="lazy" src="img/demo-content/avatars/author1.png"
                                                        alt="avatar">
                                                </div>
                                                <div class="author-content">
                                                    <a href="#" class="author-name h6">Jonathan Alex</a>
                                                    <div class="author-company">Canada</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div
                                            class="crumina-module crumina-testimonial-item testimonial--author-bottom">
                                            <div class="testimonial-content">
                                                <h6 class="testimonial-text">
                                                    I have been renting a proxy on this service for 2 months already. I
                                                    use it to work with social networks. There were no problems. Good
                                                    service
                                                </h6>
                                            </div>
                                            <div class="author-content-wrap">
                                                <div class="avatar">
                                                    <img loading="lazy" src="img/demo-content/avatars/author2.png"
                                                        alt="avatar">
                                                </div>
                                                <div class="author-content">
                                                    <a href="#" class="author-name h6">Nikolay Gubbe</a>
                                                    <div class="author-company">Russia</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination swiper-pagination-white"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="small-section-padding bg-accent-primary">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 mb-4 mb-md-0">
                        <h5 class="mb-0 text-white">Ready to try our proxies?
                        </h5>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <a href="02_wp_host.html" class="crumina-button button--blue button--m">GET FREE PROXY
                            LIST</a>
                    </div>
                </div>
            </div>
        </section>

    </div>




    <!-- Footer -->

    <x-main-footer-component :message="$SocialMediaLinks"></x-main-footer-component>

    <!-- ... end Footer -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>



</body>

</html>

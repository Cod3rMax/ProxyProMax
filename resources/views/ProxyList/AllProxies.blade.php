<x-main-header-component></x-main-header-component>


<!-- Main Header -->

<x-main-navbar-component></x-main-navbar-component>

<!-- ... end Main Header -->





<div class="main-content-wrapper">

<x-main-proxieslist-top-title :title1="'Free Proxy List'" :title2="'All our checked free proxy list in one page.'"></x-main-proxieslist-top-title>

    <div id="our-story" class="crumina-breadcrumbs breadcrumbs--dark-themes">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs-item">
                            <a href="{{ Route('MainPage') }}">Home</a>
                        </li>
                        <li class="breadcrumbs-item active">
                            <span>Free Proxy List</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


         <div id="app">
            <allproxies-component :allproxies-route="'{{ Route('AllProxiesAPI') }}'" :is-user-logged="'{{ Auth::check() }}'"></allproxies-component>
         </div>








    <div class="crumina-breadcrumbs breadcrumbs--red">&nbsp;</div>

    <x-main-faq-component></x-main-faq-component>


    <div class="crumina-breadcrumbs breadcrumbs--red">&nbsp;</div>
</div>


<!-- Footer -->

<x-main-footer-component :message="$SocialMediaLinks"></x-main-footer-component>

<!-- ... end Footer -->


</body>

</html>

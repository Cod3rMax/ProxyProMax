<x-main-header-component></x-main-header-component>


<div id="app">
    <login-component :login-route="'{{ Route('UserLoginAPI') }}'"></login-component>
</div>



<x-main-footer-component :message="$SocialMediaLinks"></x-main-footer-component>


</body>

</html>
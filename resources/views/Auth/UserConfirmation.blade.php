<x-main-header-component></x-main-header-component>


<div id="app">
    <userconfirmation-component :confirmation-route="'{{ route('UserConfirmationAPI') }}'"></user-confirmation-component>
</div>



<x-main-footer-component :message="$SocialMediaLinks"></x-main-footer-component>


</body>

</html>

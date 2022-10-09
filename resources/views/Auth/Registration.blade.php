<x-main-header-component></x-main-header-component>


<div id="app">
    <registration-component :registration-route="'{{ route('UserRegistrationAPI') }}'" :confirmation-route="'{{ Route('UserConfirmation') }}'"></registration-component>
</div>



<x-main-footer-component :message="$SocialMediaLinks"></x-main-footer-component>


</body>

</html>

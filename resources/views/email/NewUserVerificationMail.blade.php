@component('mail::message')

<center><img loading="lazy" src="{{ asset('img/logo.png') }}" alt="logo"></center>

# ProxyProMax Account Verification

Please use the code below to verify your account.

@component('mail::panel')
{{ $code }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

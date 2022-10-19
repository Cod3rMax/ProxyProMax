@component('mail::message')
# ProxyProMax Email Verification

Please use the code below to verify your account.

@component('mail::panel')
Code will be here {{ $code }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

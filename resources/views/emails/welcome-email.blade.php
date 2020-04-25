@component('mail::message')
# Welcome Our Website

Thaks for you registered to our website
@component('mail::button', ['url' => 'http://www.mohs.org'])
Click Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

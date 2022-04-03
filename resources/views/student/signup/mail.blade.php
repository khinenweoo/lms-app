@component('mail::message')
# Email Verification

Dear {{ $user->name }}, your account is sucessfully created!

@component('mail::button', ['url' => '' ])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

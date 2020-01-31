@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text go on
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

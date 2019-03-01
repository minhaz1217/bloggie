@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'minhaz1217.github.io'])
Button Text
@endcomponent
Thank you so much for registering.

@component('mail::panel', ['url' => ''])
Lorem ipsum dolar sit amet. 
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent

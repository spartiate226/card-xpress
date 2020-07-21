@component('mail::message')
# Introduction

<h1>Sujet:{{$mail['objet']}}</h1>
<p>
    {{$mail['message']}}
</p>
@component('mail::button', ['url' => ''])
Button
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent

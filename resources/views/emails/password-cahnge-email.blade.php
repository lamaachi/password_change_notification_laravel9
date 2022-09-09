@component('mail::message')
# Introduction

Votre Mot de passe a ete changer

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

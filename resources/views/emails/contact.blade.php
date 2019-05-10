@component('mail::message')
# FORMULÁRIO DE CONTATO

Olá!

Este é um e-mail enviado pelo sistema de contato do site Wolney Araújo Dias. Os dados enviados foram:

@component('mail::panel')
**Nome**: {{ $contactFormRequest->get('completeName') }}

**E-mail**: {{ $contactFormRequest->get('email') }}

**Telefone**: {{ $contactFormRequest->get('phone') }}

**Cidade**: {{ $contactFormRequest->get('city') }}
@endcomponent

## Mensagem enviada por {{ $contactFormRequest->get('completeName') }}:

@component('mail::panel')
{{ $contactFormRequest->get('message') }}
@endcomponent

Att,

[waadvogados.com](https://waadvogados.com)

@endcomponent
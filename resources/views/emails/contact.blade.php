@component('mail::message')
# Formulário de contato - Site Wolney Araújo Dias Advogados

Olá!

Este é um e-mail enviado pelo sistema de contato do site Wolney Araújo Dias. Os dados enviados foram:

@component('mail::panel')
**Nome**: {{ $contactFormRequest->get('completeName')}}

**E-mail**: {{ $contactFormRequest->get('email')}}

**Telefone**: {{ $contactFormRequest->get('phone')}}

**Cidade**: {{ $contactFormRequest->get('city')}}
@endcomponent

## Mensagem enviada por {{ $contactFormRequest->get('completeName')}}:

{{ $contactFormRequest->get('message')}}


@endcomponent
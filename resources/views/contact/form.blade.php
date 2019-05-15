@extends('layouts.master')

@section('title', 'Institucional')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-grey-lighter my-8 py-3 border-t border-b">
    <div class="container mx-auto">
        <a class="no-underline text-inherit"
           href="{{ route('home') }}">Home</a>
        <i class="fa fa-caret-right mx-2"></i>
        <span class="text-grey">Contato</span>
    </div>
</div>

<section class="container p-4 mx-auto">

    <h1 class="font-serif text-blue-darker">ENTRE EM CONTATO CONOSCO</h1>
    <div class="border-2 border-blue-darker my-1"></div>
    <div class="border-2 border-blue-darker my-1"></div>

    <div class="my-10 leading-tight">
        <p class="my-3">
            Entre em contato com o escritório através deste formulário de contato. Retornaremos em breve.
        </p>

        <div id="app">
            <contact-form action="/contato"
                          site-key="{{ env('NOCAPTCHA_SITEKEY') }}"></contact-form>
        </div>

    </div>
</section>
@endsection
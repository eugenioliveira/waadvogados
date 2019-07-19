@extends('layouts.master')

@section('title', 'Início')

@section('content')

<div id="app">

    {{--Carrossel--}}
    <wa-carousel></wa-carousel>
    {{--Fim do Carrossel--}}


    {{--Destaques--}}
    <div class="container lg:mx-auto lg:flex">
        <div class="bg-grey-light rounded-lg p-4 shadow-md m-4 lg:mr-4 lg:w-1/3">
            <h1 class="font-serif text-center text-blue-darker"><i class="fa fa-users fa-2x"></i><br>PROFISSIONAIS
            </h1>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="border-2 border-blue-darker my-1"></div>
            <p class="text-center mt-4">
                <a class="text-inherit no-underline hover:underline"
                   href="{{ route('ourpeople') }}">
                    Nossa equipe conta com vasta experiência, com advogados e
                    profissionais de outras áreas, que possibiita uma prestação
                    de serviços qualificada.
                </a>
            </p>
        </div>
        <div class="bg-grey-light rounded-lg p-4 shadow-md m-4 lg:mr-4 lg:w-1/3">
            <h1 class="font-serif text-center text-blue-darker"><i class="fa fa-handshake fa-2x"></i><br>ÁREAS DE
                ATUAÇÃO
            </h1>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="border-2 border-blue-darker my-1"></div>
            <p class="text-center mt-4">
                <a class="text-inherit no-underline hover:underline"
                   href="{{ route('areas') }}">
                    Prestamos serviços nas mais
                    variadas áreas do direito. Clique e saiba mais.
                </a>
            </p>
        </div>
        <div class="bg-grey-light rounded-lg p-4 shadow-md m-4 lg:w-1/3">
            <h1 class="font-serif text-center text-blue-darker"><i class="fa fa-envelope fa-2x"></i><br>WEBMAIL</h1>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="border-2 border-blue-darker my-1"></div>
            <a class="text-inherit no-underline hover:underline"
               href="https://webmail.waadvogados.com"
               target="_blank"
               rel="noopener noreferrer">
                Clique aqui para acessar o WEBMAIL.
            </a>
        </div>
    </div>
    {{--Fim dos destaques--}}

    {{--Notícias --}}
    <div class="container lg:mx-auto p-4 lg:mt-10">

        <h1 class="font-serif text-blue-darker">NOTÍCIAS</h1>
        <div class="border-2 border-blue-darker my-1"></div>
        <div class="border-2 border-blue-darker my-1"></div>

        <div class="mt-6">

            <news>
                <news-tab title="STF"
                          name="stf"
                          provider="stf"
                          :count="10"
                          :selected="true"></news-tab>
                <news-tab title="STJ"
                          name="stj"
                          provider="stj"
                          :count="10"></news-tab>
                <news-tab title="TST"
                          name="tst"
                          provider="tst"
                          :count="10"></news-tab>
                <news-tab title="TJMG"
                          name="tjmg"
                          provider="tjmg"
                          :count="10"></news-tab>
            </news>

            <div class="my-10">
                <a href="/noticias"
                   class="bg-blue hover:bg-blue-light text-white font-bold my-8 py-2 px-4 rounded no-underline">
                    <i class="fa fa-plus"></i> Veja mais notícias
                </a>
            </div>

        </div>

    </div>
    {{--Fim das Notícias --}}

    <div class="container p-4 lg:mx-auto lg:flex">

        {{-- Área do cliente --}}
        <div class="m-4 lg:w-1/2">
            <h1 class="font-serif text-blue-darker">ÁREA DO CLIENTE</h1>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="mt-4 flex items-center justify-center">
                <div class="w-1/2 bg-blue-lighter p-8 rounded shadow">
                    Em desenvolvimento
                </div>
            </div>
        </div>
        {{-- Fim da área do cliente --}}

        {{--Localização--}}
        <div class="m-4 lg:w-1/2">
            <h1 class="font-serif text-blue-darker">LOCALIZAÇÃO</h1>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="mt-4">
                <office-map></office-map>
            </div>
        </div>
        {{--Fim da localização--}}

    </div>
</div>

@endsection
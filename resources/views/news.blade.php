@extends('layouts.master')

@section('title', 'Profissionais')

@section('content')


{{-- Breadcrumb --}}
<div class="bg-grey-lighter my-8 py-3 border-t border-b">
    <div class="container mx-auto">
        <a class="no-underline text-inherit"
           href="{{ route('home') }}">Home</a>
        <i class="fa fa-caret-right mx-2"></i>
        <span class="text-grey">Notícias</span>
    </div>
</div>

<section class="container p-4 mx-auto">

    <h1 class="font-serif text-blue-darker">NOTÍCIAS</h1>
    <div class="border-2 border-blue-darker my-1"></div>
    <div class="border-2 border-blue-darker my-1"></div>

    <div class="mt-10 leading-tight">

        <p class="my-3">
            As notícias exibidas aqui são provenientes dos portais dos tribunais superiores e regionais. Notícias
            atualizadas de hora em hora.
        </p>

        <div id="app">
            <news>
                <news-tab title="STF"
                          name="stf"
                          provider="stf"
                          :selected="true"></news-tab>
                <news-tab title="STJ"
                          name="stj"
                          provider="stj"></news-tab>
                <news-tab title="TST"
                          name="tst"
                          provider="tst"></news-tab>
                <news-tab title="TJMG"
                          name="tjmg"
                          provider="tjmg"></news-tab>
            </news>
        </div>

    </div>

</section>

@endsection
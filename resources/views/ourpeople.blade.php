@extends('layouts.master')

@section('title', 'Profissionais')

@section('content')


    {{-- Breadcrumb --}}
    <div class="bg-grey-lighter my-8 py-3 border-t border-b">
        <div class="container mx-auto">
            <a class="no-underline text-inherit" href="{{ route('home') }}">Home</a>
            <i class="fa fa-caret-right mx-2"></i>
            <span class="text-grey">Profissionais</span>
        </div>
    </div>

    <section class="container mx-auto">

        <h1 class="font-serif text-blue-darker">PROFISSIONAIS</h1>
        <div class="border-2 border-blue-darker my-1"></div>
        <div class="border-2 border-blue-darker my-1"></div>

    </section>

@endsection
@extends('layouts.master')

@section('title', 'Início')

@section('content')

    {{--Carrossel--}}
    <div id="app">
        <wa-carousel></wa-carousel>
    </div>
    {{--Fim do Carrossel--}}

    {{--Destaques--}}
    <div class="container lg:mx-auto lg:flex">
        <div class="bg-grey-light rounded-lg p-4 shadow-md m-4 lg:mr-4 lg:w-1/3">
            <h1 class="font-serif text-center text-blue-darker"><i class="fa fa-users fa-2x"></i><br>PROFISSIONAIS</h1>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="border-2 border-blue-darker my-1"></div>
            <p class="text-center mt-4">
                Nossa equipe conta com vasta experiência, com advogados e
                profissionais de outras áreas, que possibiita uma prestação
                de serviços qualificada.
            </p>
        </div>
        <div class="bg-grey-light rounded-lg p-4 shadow-md m-4 lg:mr-4 lg:w-1/3">
            <h1 class="font-serif text-center text-blue-darker"><i class="fa fa-handshake fa-2x"></i><br>ÁREAS DE
                ATUAÇÃO
            </h1>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="border-2 border-blue-darker my-1"></div>
            <p class="text-center mt-4">
                Prestamos serviços nas mais
                variadas áreas do direito. Clique e saiba mais.
            </p>
        </div>
        <div class="bg-grey-light rounded-lg p-4 shadow-md m-4 lg:w-1/3">
            <h1 class="font-serif text-center text-blue-darker"><i class="fa fa-envelope fa-2x"></i><br>WEBMAIL</h1>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="border-2 border-blue-darker my-1"></div>
            <p class="text-center mt-4">
                Acessar o webmail do escritório.
            </p>
        </div>
    </div>
    {{--Fim dos destaques--}}

    {{--Notícias e artigos --}}
    <div class="container lg:mx-auto lg:flex p-4 lg:mt-10">
        <div class="m-4 lg:w-1/2">
            <h1 class="font-serif text-blue-darker">NOTÍCIAS</h1>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="m-4">
                <p class="my-4">
                    <span class="text-xs text-white inline-block px-2 py-1 rounded bg-blue-light"><strong>23 out</strong></span>
                    <a href="" class="no-underline text-inherit hover:underline">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Morbi nec lacus scelerisque, egestas nisl sit amet, faucibus odio.</a>
                </p>
                <p class="my-4">
                    <span class="text-xs text-white inline-block px-2 py-1 rounded bg-blue-light"><strong>23 out</strong></span>
                    <a href="" class="no-underline text-inherit hover:underline">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Morbi nec lacus scelerisque, egestas nisl sit amet, faucibus odio.</a>
                </p>
                <p class="my-4">
                    <span class="text-xs text-white inline-block px-2 py-1 rounded bg-blue-light"><strong>23 out</strong></span>
                    <a href="" class="no-underline text-inherit hover:underline">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Morbi nec lacus scelerisque, egestas nisl sit amet, faucibus odio.</a>
                </p>
                <p class="my-4">
                    <span class="text-xs text-white inline-block px-2 py-1 rounded bg-blue-light"><strong>23 out</strong></span>
                    <a href="" class="no-underline text-inherit hover:underline">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Morbi nec lacus scelerisque, egestas nisl sit amet, faucibus odio.</a>
                </p>
                <p class="my-4">
                    <span class="text-xs text-white inline-block px-2 py-1 rounded bg-blue-light"><strong>23 out</strong></span>
                    <a href="" class="no-underline text-inherit hover:underline">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Morbi nec lacus scelerisque, egestas nisl sit amet, faucibus odio.</a>
                </p>
            </div>
        </div>
        <div class="m-4 lg:w-1/2">
            <h1 class="font-serif text-blue-darker">ARTIGOS</h1>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="m-4">
                <div class="flex items-center my-4">
                    <img src="https://via.placeholder.com/64x64" class="rounded-full">
                    <p class="ml-2">
                        <a href="" class="no-underline text-inherit hover:underline">Lorem ipsum dolor sit amet,
                            consectetur
                            adipiscing elit. Morbi nec lacus scelerisque, egestas nisl sit amet, faucibus odio.</a>
                    </p>
                </div>
                <div class="flex items-center my-4">
                    <img src="https://via.placeholder.com/64x64" class="rounded-full">
                    <p class="ml-2">
                        <a href="" class="no-underline text-inherit hover:underline">Lorem ipsum dolor sit amet,
                            consectetur
                            adipiscing elit. Morbi nec lacus scelerisque, egestas nisl sit amet, faucibus odio.</a>
                    </p>
                </div>
                <div class="flex items-center my-4">
                    <img src="https://via.placeholder.com/64x64" class="rounded-full">
                    <p class="ml-2">
                        <a href="" class="no-underline text-inherit hover:underline">Lorem ipsum dolor sit amet,
                            consectetur
                            adipiscing elit. Morbi nec lacus scelerisque, egestas nisl sit amet, faucibus odio.</a>
                    </p>
                </div>
                <div class="flex items-center my-4">
                    <img src="https://via.placeholder.com/64x64" class="rounded-full">
                    <p class="ml-2">
                        <a href="" class="no-underline text-inherit hover:underline">Lorem ipsum dolor sit amet,
                            consectetur
                            adipiscing elit. Morbi nec lacus scelerisque, egestas nisl sit amet, faucibus odio.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{--Fim das Notícias e Artigos--}}

    <div class="container lg:mx-auto lg:flex">

        {{-- Área do cliente --}}
        <div class="m-4 lg:w-1/2">
            <h1 class="font-serif text-blue-darker">ÁREA DO CLIENTE</h1>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="border-2 border-blue-darker my-1"></div>
            <div class="mt-4 flex items-center justify-center">
                <div class="w-1/2 bg-blue-lighter p-8 rounded shadow">
                    Login
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
                <iframe width="600" height="450" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?q=Wolney+Advogados&key=AIzaSyBU43mm8xIyPW0-4JcY5uc0OIIXBikxeJ8"
                        allowfullscreen></iframe>
            </div>
        </div>
        {{--Fim da localização--}}

    </div>

@endsection
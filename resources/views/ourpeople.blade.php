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

        <div class="mt-10">

            <p class="my-3">
                Nossa equipe conta com vasta experiência, com advogados e profissionais de outras áreas, que possibiita
                uma prestação de serviços qualificada.
            </p>

            <div class="w-full items-center flex bg-blue-lightest border border-blue-darker rounded-lg p-4 my-4">
                <div>
                    <img class="rounded-lg w-32 h-32 shadow-outline m-2" src="/img/WOLNEY.jpeg">
                </div>
                <div class="ml-4 flex-1">
                    <h1 class="font-serif text-blue-darker">WOLNEY ARAÚJO DIAS JÚNIOR</h1>
                    <p><strong>OAB/MG 25.660</strong></p>
                    <p>wolneyjunior@wolneyadvogados.com.br</p>
                    <hr class="my-2 border border-blue-darker">
                    <p><strong>Formação:</strong></p>
                    <ul>
                        <li>Bacharelado em Direito pela Faculdade de Direito de Varginha, no ano de 1976.</li>
                    </ul>
                </div>
            </div>

            <div class="w-full items-center flex bg-blue-lightest border border-blue-darker rounded-lg p-4 my-4">
                <div>
                    <img class="rounded-lg w-32 h-32 shadow-outline m-2" src="/img/DAVI.jpeg">
                </div>
                <div class="ml-4 flex-1">
                    <h1 class="font-serif text-blue-darker">DAVI BRANQUINHO DA COSTA DIAS</h1>
                    <p><strong>OAB/MG 108.817</strong></p>
                    <p>wolneyjunior@wolneyadvogados.com.br</p>
                    <hr class="my-2 border border-blue-darker">
                    <p><strong>Formação:</strong></p>
                    <ul>
                        <li>Bacharelado em Direito pela Faculdade de Direito de José do Rosário Vellano, no ano de
                            2007.
                        </li>
                        <li>Pós graduado em Direito Tributário</li>
                    </ul>
                </div>
            </div>

            <div class="w-full items-center flex bg-blue-lightest border border-blue-darker rounded-lg p-4 my-4">
                <div>
                    <img class="rounded-lg w-32 h-32 shadow-outline m-2" src="/img/JOAO.jpeg">
                </div>
                <div class="ml-4 flex-1">
                    <h1 class="font-serif text-blue-darker">JOÃO PAULO SALLES PINTO</h1>
                    <p><strong>OAB/MG 168.280</strong></p>
                    <p>wolneyjunior@wolneyadvogados.com.br</p>
                    <hr class="my-2 border border-blue-darker">
                    <p><strong>Formação:</strong></p>
                    <ul>
                        <li>Bacharelado em Direito pela Faculdade de Direito da Fundação Machadense de Ensino Superior e
                            Comunicação, no ano de 2010.
                        </li>
                        <li>Mestre em Direito pela Faculdade de Direito do Sul de Minas</li>
                    </ul>
                </div>
            </div>

            <div class="w-full items-center flex bg-blue-lightest border border-blue-darker rounded-lg p-4 my-4">
                <div>
                    <img class="rounded-lg w-32 h-32 shadow-outline m-2" src="/img/PALOMA.jpeg">
                </div>
                <div class="ml-4 flex-1">
                    <h1 class="font-serif text-blue-darker">PALOMA BERNARDES LAGO DE SOUSA</h1>
                    <p><strong>OAB/MG 179.353</strong></p>
                    <p>wolneyjunior@wolneyadvogados.com.br</p>
                    <hr class="my-2 border border-blue-darker">
                    <p><strong>Formação:</strong></p>
                    <ul>
                        <li>Bacharelado em Direito pela Faculdade de Direito da Fundação Machadense de Ensino Superior e
                            Comunicação, no ano de 2015.
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </section>

@endsection
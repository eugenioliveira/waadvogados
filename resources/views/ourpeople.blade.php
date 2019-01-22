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

            <div class="w-full justify-center flex bg-blue-lightest border-2 border-blue-darker rounded-lg p-4 my-4">
                <div class="w-1/4 flex flex-col items-center">
                    <img class="rounded-full w-32 h-32 shadow-outline m-2" src="/img/WOLNEY.jpeg">
                    <h2 class="text-center font-serif text-blue-darker">WOLNEY ARAÚJO DIAS JÚNIOR</h2>
                    <p>wolneyjunior@wolneyadvogados.com.br</p>
                </div>
                <div class="border-2 border-blue-darker mx-4">&nbsp;</div>
                <div>
                    <p>
                        <strong>Formação:</strong>
                    </p>
                    <ul class="my-2">
                        <li>
                            Bacharelado em Direito pela Faculdade de Direito de Varginha, no ano de 1976.
                        </li>
                    </ul>
                    <p>
                        <strong>Experiência:</strong>
                    </p>
                    <ul class="my-2">
                        <li>
                            Estágio no Escritório Wolney Araújo Dias - Advogados - Período: de fevereiro de 1973 a
                            dezembro de 1976;
                        </li>
                        <li>
                            Advogado do Escritório Wolney Araújo Dias - Advogados - Período: desde dezembro de 1976.
                        </li>
                        <li>
                            Procurador e Assessor Jurídico do Município de Machado, MG. Período: janeiro de 1989 a abril
                            de 1991;
                        </li>
                        <li>
                            Assessor Jurídico do Município de Machado, MG. Período: janeiro de 1993 a dezembro de 2004;
                        </li>
                        <li>
                            Assessor Jurídico da Cooperativa Agrária de Machado Ltda.. Período: desde abril de 1990.
                        </li>
                        <li>
                            Assessor Jurídico da Fundação Educacional de Machado. Período: outubro de 1993 a março de
                            1996.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-full justify-center flex bg-blue-lightest border-2 border-blue-darker rounded-lg p-4">
                <div class="w-1/4 flex flex-col items-center">
                    <img class="rounded-full w-32 h-32 shadow-outline m-2" src="/img/DAVI.jpeg">
                    <h2 class="text-center font-serif text-blue-darker">DAVI BRANQUINHO DA COSTA DIAS</h2>
                    <p>davidias@wolneyadvogados.com.br</p>
                </div>
                <div class="border-2 border-blue-darker mx-4">&nbsp;</div>
                <div>
                    <p>
                        <strong>Formação:</strong>
                    </p>
                    <ul class="my-2">
                        <li>
                            Bacharelado em Direito pela Faculdade de Direito de Varginha, no ano de 1976.
                        </li>
                    </ul>
                    <p>
                        <strong>Experiência:</strong>
                    </p>
                    <ul class="my-2">
                        <li>
                            Estágio no Escritório Wolney Araújo Dias - Advogados - Período: de fevereiro de 1973 a
                            dezembro de 1976;
                        </li>
                        <li>
                            Advogado do Escritório Wolney Araújo Dias - Advogados - Período: desde dezembro de 1976.
                        </li>
                        <li>
                            Procurador e Assessor Jurídico do Município de Machado, MG. Período: janeiro de 1989 a abril
                            de 1991;
                        </li>
                        <li>
                            Assessor Jurídico do Município de Machado, MG. Período: janeiro de 1993 a dezembro de 2004;
                        </li>
                        <li>
                            Assessor Jurídico da Cooperativa Agrária de Machado Ltda.. Período: desde abril de 1990.
                        </li>
                        <li>
                            Assessor Jurídico da Fundação Educacional de Machado. Período: outubro de 1993 a março de
                            1996.
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </section>

@endsection
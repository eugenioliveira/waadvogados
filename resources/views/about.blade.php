@extends('layouts.master')

@section('title', 'Institucional')

@section('content')

    {{-- Breadcrumb --}}
    <div class="bg-grey-lighter my-8 py-3 border-t border-b">
        <div class="container mx-auto">
            <a class="no-underline text-inherit" href="{{ route('home') }}">Home</a>
            <i class="fa fa-caret-right mx-2"></i>
            <span class="text-grey">Institucional</span>
        </div>
    </div>

    <section class="container mx-auto">

        <h1 class="font-serif text-blue-darker">O ESCRITÓRIO</h1>
        <div class="border-2 border-blue-darker my-1"></div>
        <div class="border-2 border-blue-darker my-1"></div>

        <div class="my-10 leading-tight">
            <p class="my-3">
                <strong>WOLNEY ARAÚJO DIAS - ADVOGADOS</strong> é um Escritório de Advocacia e Consultoria Empresarial,
                situado no Sul de
                Minas Gerais, na cidade de Machado, com vasta experiência no contencioso e consultivo de diversas áreas
                do direito.
            </p>
            <p class="my-3">
                Sua história remonta ao início da década de 1940, quando seu fundador, o saudoso Dr. Wolney Araújo Dias,
                recém formado na Universidade Federal de Minas Gerais, resolveu retornar à sua cidade natal, abrindo um
                Escritório que, em pouco tempo, se tornaria um dos mais conhecidos e conceituados do Sul de Minas
                Gerais.
            </p>
            <p class="my-3">
                Ao longo de mais de meio século, o Escritório vem procurando trabalhar sempre com a mesma seriedade e
                profissionalismo que marcaram o início de sua história. Administrado hoje pela 2ª e 3ª gerações do seu
                Fundador, <strong>WOLNEY ARAÚJO DIAS - ADVOGADOS</strong> busca manter a tradição de seus serviços, sem
                perder de vista a
                evolução e as mudanças do Direito.
            </p>
            <p class="my-3">
                Devido a uma política sempre presente de aperfeiçoamento profissional e transferência mútua de
                experiência, <strong>WOLNEY ARAÚJO DIAS - ADVOGADOS</strong> reestrutura-se para ampliar suas áreas de
                atuação e para
                tornar-se, cada vez mais, uma referência regional não só para as Empresas e Indústrias em geral, como,
                também, para os advogados e as Sociedades de Advogados de todas as regiões do Brasil.
            </p>
            <p class="my-3">
                Outro aspecto importante do Escritório está traduzido na sua localização privilegiada. Situado na cidade
                de Machado, Minas Gerais, <strong>WOLNEY ARAÚJO DIAS - ADVOGADOS</strong> tem condições de prestar seus
                serviços nos mais
                importantes pólos comerciais e industriais da região, inclusive no eixo Varginha - Poços de Caldas -
                Pouso Alegre, cidades que distam a menos de 90 quilômetros da sede do Escritório, assim como no interior
                de São Paulo.
            </p>
            <p class="my-3">
                Dentre as cidades mineiras que o Escritório pode atuar diretamente, podemos destacar as seguintes:
                Alfenas, Alpinópolis, Alterosa, Andradas, Areado, Boa Esperança, Borda da Mata, Botelhos, Bueno Brandão,
                Cabo Verde, Caldas, Cambuí, Cambuquira, Campanha, Campestre, Campos Gerais, Carmo da Cachoeira, Carmo do
                Rio Claro, Elói Mendes, Guaxupé, Itajubá, Jacutinga, Lambari, Machado, Monte Belo, Monte Sião,
                Nepomuceno, Ouro Fino, Paraguaçu, Poço Fundo, Poços de Caldas, Pouso Alegre, Santa Rita de Caldas, Santa
                Rita do Sapucaí, São Gonçalo do Sapucaí, Três Corações, Três Pontas e Varginha.
            </p>
            <p class="my-3">
                Assim, por sua história, sempre pautada pela ética, lealdade, honestidade, dedicação, seriedade e
                competência, <strong>WOLNEY ARAÚJO DIAS - ADVOGADOS</strong> se apresenta como um Escritório consolidado
                e como uma
                alternativa de prestação de serviços jurídicos no nível de profissionalismo e competência que o mercado
                consumidor mais exigente busca.
            </p>
        </div>
    </section>

    <section class="container mx-auto">

        <div class="flex">
            <div class="flex-1 mr-6">
                <h2 class="font-serif text-blue-darker">MISSÃO</h2>
                <div class="border-2 border-blue-darker my-1"></div>
                <div class="border-2 border-blue-darker my-1"></div>
                <p class="my-4">Buscar o resultado mais eficaz para o cliente.</p>
            </div>

            <div class="flex-1 mr-6">
                <h2 class="font-serif text-blue-darker">VISÃO</h2>
                <div class="border-2 border-blue-darker my-1"></div>
                <div class="border-2 border-blue-darker my-1"></div>
                <p class="my-4">Aperfeiçoar-se cada vez mais como Escritório paradigma na prestação de serviços
                    jurídicos.</p>
            </div>

            <div class="flex-1">
                <h2 class="font-serif text-blue-darker">VALORES</h2>
                <div class="border-2 border-blue-darker my-1"></div>
                <div class="border-2 border-blue-darker my-1"></div>
                <p class="my-4">
                    <i class="fa fa-check text-blue-darker"></i> Ética <br>
                    <i class="fa fa-check text-blue-darker"></i> Qualidade <br>
                    <i class="fa fa-check text-blue-darker"></i> Simplicidade <br>
                    <i class="fa fa-check text-blue-darker"></i> Agilidade <br>
                    <i class="fa fa-check text-blue-darker"></i> Espírito de equipe <br>
                </p>
            </div>
        </div>

    </section>

@endsection
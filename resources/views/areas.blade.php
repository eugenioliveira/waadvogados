@extends('layouts.master')

@section('title', 'Áreas de atuação')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-grey-lighter my-8 py-3 border-t border-b">
    <div class="container mx-auto">
        <a class="no-underline text-inherit"
           href="{{ route('home') }}">Home</a>
        <i class="fa fa-caret-right mx-2"></i>
        <span class="text-grey">Áreas de atuação</span>
    </div>
</div>

<section class="container p-4 mx-auto">

    <h1 class="font-serif text-blue-darker">ÁREAS DE ATUAÇÃO</h1>
    <div class="border-2 border-blue-darker my-1"></div>
    <div class="border-2 border-blue-darker my-1"></div>

    <div class="mt-10 leading-tight">
        <p class="my-3">
            Atualmente, pela atuação de seus profissionais e pelo trabalho em conjunto desenvolvido com outras
            Sociedades de Advogados, <strong>WOLNEY ARAÚJO DIAS - ADVOGADOS</strong> está apto a prestar aos seus
            clientes assessoria
            jurídica nas mais diversas áreas do direito.
        </p>
        <p class="my-3">
            Atuando contenciosa e preventivamente, <strong>WOLNEY ARAÚJO DIAS - ADVOGADOS</strong> busca transmitir
            aos seus clientes
            a segurança jurídica determinante e fundamental para a tomada de decisões e elaboração de estratégias
            direcionadas à estruturação e desenvolvimento das atividades das pessoas físicas e jurídicas usuárias
            dos serviços.
        </p>
        <p class="my-3">
            Visando, sempre, a necessidade do cliente, <strong>WOLNEY ARAÚJO DIAS - ADVOGADOS</strong> tem atuação
            nas seguintes
            áreas do direito: Direito Civil, Direito Tributário, Direito Comercial e Societário, Direito do
            Trabalho, Direito Bancário, Direito Imobiliário, Direito Administrativo, Direito Ambiental, Direito
            Securitário, Direto Econômico, Terceiro Setor, Cooperativas, Direito da Informática, Propriedade
            Intelectual, Arbitragem e Mediação, Saúde e Acompanhamento Processual.
        </p>
        <p class="mt-6 mb-2">
            Clique nas áreas de atuação abaixo para expandir e conhecer os nossos serviços.
        </p>
    </div>

    {{-- Áreas de atuação accordions --}}
    <div id="app"
         class="lg:flex">

        <div class="lg:w-1/3 px-1">

            <accordion title="Direito Civil">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Assessoria e Consultoria em todas as áreas</li>
                        <li>Contencioso geral</li>
                    </ul>
                </div>
            </accordion>

            <accordion title="Direito do Trabalho">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Assessoria e Consultoria na área rural e urbana</li>
                        <li>Contencioso Judicial e Administrativo</li>
                        <li>Auditoria Trabalhista</li>
                        <li>Elaboração de contratos de trabalho, inclusive de safra</li>
                        <li>Representação em negociações trabalhistas</li>
                    </ul>
                </div>
            </accordion>

            <accordion title="Direito Administrativo">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Assessoria e Consultoria às pessoas físicas e jurídicas que contratam com a
                            Administração Pública
                        </li>
                        <li>Assessoria e Consultoria a Municípios</li>
                        <li>Licitações e Contratos Administrativos</li>
                        <li>Concessões de Serviços Público</li>
                        <li>Contencioso judicial e administrativo</li>
                    </ul>

                </div>
            </accordion>

            <accordion title="Direito econômico">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Direito da Concorrência - Conselho Administrativo de Defesa Econômica (CADE) e Agências
                            Reguladoras
                        </li>
                        <li>Direito do Consumidor</li>
                        <li>Penal Econômico</li>
                    </ul>

                </div>
            </accordion>

            <accordion title="Direito da Informática">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Assessoria e Consultoria</li>
                        <li>Contratos eletrônicos</li>
                        <li>Registros de domínios</li>
                        <li>Internet - Aspectos legais</li>
                    </ul>
                </div>
            </accordion>

            <accordion title="Saúde">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Planos de Saúde - Aspectos Legais</li>
                        <li>Responsabilidade Médica</li>
                    </ul>
                </div>
            </accordion>

        </div>

        <div class="lg:w-1/3 px-1">

            <accordion title="Direito Tributário">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Assessoria e Consultoria às pessoas físicas e jurídicas</li>
                        <li>Planejamento Tributário com a análise da legislação visando a economia de Tributos</li>
                        <li>Contencioso Judicial e Contencioso Administrativo (defesas contra autos de infração,
                            formulação de consultas, requerimentos de regime especial, dentre outros procedimentos)
                        </li>
                        <li>Auditoria Tributária</li>
                        <li>Penal Tributário</li>
                    </ul>
                </div>
            </accordion>

            <accordion title="Direito Bancário">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Assessoria e Consultoria</li>
                        <li>Operações financeiras</li>
                        <li>Securitização</li>
                        <li>Leasing e Alienação Fiduciária</li>
                        <li>Contratos e Financiamentos de Safras</li>
                        <li>Renovação de Contratos de financiamentos</li>
                        <li>Contencioso Administrativo</li>
                        <li>Contencioso Judicial</li>
                    </ul>
                </div>
            </accordion>

            <accordion title="Direito Ambiental">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Assessoria e Consultoria</li>
                        <li>Aspectos legais relativos a estudos de impacto ambiental</li>
                        <li>Licenças Ambientais</li>
                        <li>Interdição de Atividades Industriais</li>
                        <li>Negociação com Organizações Governamentais e não Governamentais</li>
                        <li>Situação ambiental da empresa</li>
                        <li>Contencioso judicial e administrativo</li>
                        <li>Auditoria Ambiental</li>
                    </ul>
                </div>
            </accordion>

            <accordion title="Terceiro setor">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Fundações</li>
                        <li>Associações</li>
                        <li>Organizações não governamentais</li>
                    </ul>
                </div>
            </accordion>

            <accordion title="Propriedade Intelectual">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Registro de marcas e patentes</li>
                        <li>Proteção de direitos autorais</li>
                        <li>Nomes comerciais, direitos do autor, publicidade indevida, propaganda enganosa e nome de
                            domínio
                        </li>
                        <li>Contencioso judicial e administrativo</li>
                    </ul>
                </div>
            </accordion>

            <accordion title="Acompanhamento processual">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <p>
                        Em razão de sua localização, estrutura pessoal e física, WOLNEY ARAÚJO DIAS - ADVOGADOS é
                        uma importante referência para os advogados e as Sociedades de Advogados, assim como para as
                        Empresas que necessitam de acompanhamento processual e realização de diligências, tais como
                        distribuição de ações, protocolo, audiências de conciliação e de instrução e julgamento,
                        elaboração de peças processuais e quaisquer outros atos indispensáveis para o pronto
                        atendimento das necessidades do cliente.
                    </p>
                </div>
            </accordion>

        </div>

        <div class="lg:w-1/3 px-1">

            <accordion title="Direito Comercial e Societário">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Assessoria e Consultoria</li>
                        <li>Constituição de Sociedades</li>
                        <li>Reestruturação de empresa</li>
                        <li>Consórcios e parcerias</li>
                        <li>Fusão, aquisição, transformação, cisão e liquidação</li>
                        <li>Planejamento Sucessório</li>
                        <li>Elaboração de documentos societários</li>
                        <li>Títulos de Crédito</li>
                        <li>Falência e Concordata</li>
                    </ul>
                </div>
            </accordion>

            <accordion title="Direito Imobiliário">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Assessoria e Consultoria</li>
                        <li>Empreendimentos Imobiliários</li>
                        <li>Instituição de Garantias Reais</li>
                        <li>Assessoria em implantação de loteamentos, shopping centers, apart-hotéis e parques
                            temáticos
                        </li>
                        <li>Locações</li>
                        <li>Ações possessórias</li>
                        <li>Financiamentos imobiliários</li>
                    </ul>
                </div>
            </accordion>

            <accordion title="Direito Securitário">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Assessoria e Consultoria em regulação de sinistros, seguros e resseguros</li>
                        <li>Negociação</li>
                        <li>Contencioso</li>
                    </ul>
                </div>
            </accordion>

            <accordion title="Cooperativas">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Assessoria e Consultoria</li>
                        <li>Constituição de cooperativas</li>
                        <li>Tributação específica</li>
                        <li>Recuperação de valores referentes a tributos indevidamente recolhidos</li>
                    </ul>
                </div>
            </accordion>

            <accordion title="Arbitragem">
                <div class="py-6 px-2 -mt-2 border-2 border-blue-darkest border-t-0 rounded-b">
                    <ul>
                        <li>Assessoria e Consultoria</li>
                        <li>Atuação como árbitros</li>
                        <li>Elaboração de Convenção de Arbitragem</li>
                    </ul>
                </div>
            </accordion>

        </div>


    </div>

</section>

@endsection
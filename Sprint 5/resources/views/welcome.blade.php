@extends('layouts.app')

@section('content')
    <!-- SECTION 1: BANNER -->
    <section id="homeBanner" class="banner-container full-banner my-2">
        <article>
            <div class="bd-example">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active icons-banner">
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="icons-banner"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/banner2.png" class="img-fluid img-responsive" alt="Imagem Banner 1">
                            <div class="carousel-caption d-flex">
                                <p class="text-center texto-banner-um"><span>SolidarieVAGAS</span><br>Para você,
                                    preços mais acessíveis <br>e para a sociedade, uma nova chance!
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner3.png" class="img-fluid img-responsive" alt="Imagem Banner 2">
                            <div class="carousel-caption d-flex">
                                <p class="text-center texto-banner-dois">Seu novo projeto,<br> projeta também um
                                    novo
                                    <strong>Brasil</strong>.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </article>
    </section>
    <!-- setinhas para proximo item da pagina -->
    <section class="d-flex justify-content-center double-down">
        <a href="#homeSolidarieVagas">
            <i class="fa fa-angle-double-down"></i>
        </a>
    </section>

    <!-- SECTION 2: SOLIDARIEVAGAS - Cards + Busca + Principais grupos -->
    <section id="homeSolidarieVagas" class="m-auto p-0 vagas">
        <article class="container">
            <h1 class="display-4 text-center my-4 vagas">SolidarieVAGAS</h1>
            <div class="row d-flex justify-content-around">
                <div class="card-frase col-sm-12 col-lg-6 p-2 my-4">
                    <img src="img/Ativo 2.png" class="card-img-top mx-auto d-block" alt="Card SolidarieVagas 1">
                    <div class="card-body">
                        <p class="card-text text-justify">O <strong>SolidarieVAGAS</strong> nasceu para fazer a
                            junção de dois pilares muito importante para um país como o Brasil: a geração empregos e
                            reintegração social daqueles que por qualquer motivo, foram obrigados a procurar um novo
                            rumo para suas vidas.</p>
                    </div>
                </div>
                <div class="card-frase col-sm-12 col-lg-6 p-2 my-4">
                    <img src="img/Ativo 3.png" class="card-img-top mx-auto d-block" alt="Card SolidarieVagas 3">
                    <div class="card-body">
                        <p class="card-text text-justify">O diferencial do <strong>SolidarieVAGAS</strong>: aqui,
                            todos os profissionais cadastrados, são integrantes de Organizações não Governamentais
                            (ONGs), as quais os ajudam na dura batalha da reintegração à sociedade e na reintegração
                            ao mercado de trabalho.</p>
                    </div>
                </div>
            </div>
        </article>
        <article class="container">
            <p class="lead text-center vagas pt-3">Encontre um profissional para realizar o serviço que você
                procura:</p>
            <div class="input-group my-3 d-flex">
                <input type="text" class="form-control busca" name="servico"
                    placeholder="Escreva aqui o que você está procurando..." aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn busca" type="button" id="button-addon2">
                        <a href="{{ route('busca.pesquisar') }}" class="btn busca">BUSCAR</a></button>
                </div>
            </div>
        </article>
        <article class="container mt-5 px-0">
            <p class="lead text-center vagas pt-3">Conheça aqui algumas áreas de atuação dos profissionais inscritos
                no SolidarieVAGAS:</p>
            <div class="d-flex flex-row justify-content-around">
                <div class="card col-md-12 col-lg-6 grupos-servicos mx-1 my-1">
                    <div class="card-body text-center">
                        <h5 class="card-title card-vagas"><i class="fab fa-black-tie mr-3"></i>COSTURA</h5>
                        <hr>
                        <p class="card-text card-vagas">Está cada dia mais difícil achar costureiras(os)
                            caprichosa(os) como antes, por um preço acessível, não é verdade? Aqui, você achará
                            profissionais liberais tanto para ajustar a barra de uma calça e arrumar uma camisa
                            descosturada, quanto para fazer peças exclusivas.</p>
                    </div>
                </div>
                <div class="card col-md-12 col-lg-6 grupos-servicos mx-1 my-1">
                    <div class="card-body text-center">
                        <h5 class="card-title card-vagas"><i class="fas fa-tools mr-3"></i>CONSTRUÇÃO E REFORMA</h5>
                        <hr>
                        <p class="card-text card-vagas">Mãos à obra! Aqui você poderá achar pedreiros, mestres de
                            obra, eletricistas, encanadores e muitos outros profissionais. Profissionais aptos a
                            trabalhar em construções e também para fazerem pequenos reparos em sua própria casa.
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around">
                <div class="card col-md-12 col-lg-6 grupos-servicos mx-1 my-1">
                    <div class="card-body text-center">
                        <h5 class="card-title card-vagas"><i class="fas fa-hands mr-3"></i>ARTESANATO</h5>
                        <hr>
                        <p class="card-text card-vagas">Criatividade para dar e vender. Você encontrará aqui,
                            artesanatos para decorar a sua casa, ou mesmo para produzir brindes para eventos, etc.
                            Aliás, você sabia que as mães de crianças com deficiência, aprendem este ofício com o
                            apoio das ONGs?</p>
                    </div>
                </div>
                <div class="card col-md-12 col-lg-6 grupos-servicos mx-1 my-1">
                    <div class="card-body text-center ">
                        <h5 class="card-title card-vagas"><i class="fas fa-utensils mr-3"></i>COZINHA</h5>
                        <hr>
                        <p class="card-text card-vagas">Está difícil hoje em dia para conseguir uma comidinha
                            saudável e ao mesmo tempo com aquele gostinho de comida caseira, não é? Tanto para seu
                            restaurante, quanto para encomendar marmitas e doces exatamente como você precisa, você
                            poderá achar um profissional.</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center veja-mais my-4">
                <button class="btn veja-mais" type="button">
                    <a href="{{ route('servicos') }}" class="btn veja-mais">VEJA MAIS GRUPOS DE SERVIÇOS</a></button>
            </div>
        </article>
    </section>
    <!-- setinhas para proximo item da pagina -->
    <section class="d-flex justify-content-center double-down">
        <a href="#homeOngs">
            <i class="fa fa-angle-double-down"></i>
        </a>
    </section>

    <!-- SECTION 3: ONGs, com explicação, e opção para as ONGs se cadastrarem -->
    <section id="homeOngs" class="p-0 m-0">
        <article class="container py-2 my-2">
            <h1 class="display-4 text-center my-4 ongs">ONG's</h1>
            <div class="d-flex justify-content-between col-lg-12 col-xs-6 my-3 py-3">
                <p class="text-justify ongs">O objetivo da <strong>SolidarieVAGAS</strong> é divulgar neste website,
                    o trabalho de pessoas que estejam cadastradas em ONGs e querem se reintegrar no mercado de
                    trabalho. Através do formulário online, você já pode cadastrar sua ONG. Uma vez aprovado o
                    cadastro, mãos a obra: você já poderá começar a cadastrar pessoas afiliadas à sua instituição.
                    Com uma foto, texto e algumas informações pessoais, as pessoas vinculadas à sua ONG, já estarão
                    aptas a oferecerem seus trabalhos, para o Brasil todo, através da nossa plataforma.<br>
                    <a class="btn d-flex justify-content-center ongs" href="{{ route('cadastro') }}" role="button">CADASTRE
                        SUA ONG</a>
                </p>
            </div>
        </article>
    </section>
@endsection
@extends('layouts.app')

@section('content')
<section class="my-3 py-5" id="gruposServicos">
    <article class="container mt-5 px-0">
      <p class="lead text-center vagas pt-3">Veja aqui todos os serviços disponíveis:</p>
      <div class="d-flex flex-row justify-content-around">
        <div class="card col-sm-12 col-lg-6 grupos-servicos mx-1 my-1">
          <div class="card-body text-center">
            <h5 class="card-title card-vagas"><i class="fab fa-black-tie mr-3"></i>COSTURA</h5>
            <hr>
            <ul>
              <li>Pequenos ajustes</li>
              <li>Barra de calças</li>
              <li>Vestidos para casamento</li>
              <li>Bordado, crochê e tricô</li>
              <li>Roupas novas</li>
            </ul>
          </div>
        </div>
        <div class="card col-sm-12 col-lg-6 grupos-servicos mx-1 my-1">
          <div class="card-body text-center">
            <h5 class="card-title card-vagas"><i class="fas fa-tools mr-3"></i>CONSTRUÇÃO E REFORMA</h5>
            <hr>
            <ul>
              <li>Reparos elétricos</li>
              <li>Reparos hidráulicos</li>
              <li>Interior de imóveis</li>
              <li>Pinturas</li>
              <li>Marcenaria</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="d-flex flex-row justify-content-around">
        <div class="card col-md-12 col-lg-6 grupos-servicos mx-1 my-1">
          <div class="card-body text-center">
            <h5 class="card-title card-vagas"><i class="fas fa-hands mr-3"></i>ARTESANATO</h5>
            <hr>
            <ul>
              <li>Presentes artesanais</li>
              <li>Artigos personalizados</li>

              <li>Brindes para eventos</li>
             
            </ul>
          </div>
        </div>
        <div class="card col-md-12 col-lg-6 grupos-servicos mx-1 my-1">
          <div class="card-body text-center ">
            <h5 class="card-title card-vagas"><i class="fas fa-utensils mr-3"></i>COZINHA</h5>
            <hr>
            <ul>
              <li>Pizzas</li>
              <li>Pão de Queijo artesanal</li>
              <li>Doces para festas</li>
              <li>Marmitas</li>
              <li>Salgadinhos para festas</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="d-flex flex-row justify-content-around">
        <div class="card col-md-12 col-lg-6 grupos-servicos mx-1 my-1">
          <div class="card-body text-center">
            <h5 class="card-title card-vagas"><i class="fas fa-laptop-code mr-3"></i>INFORMÁTICA</h5>
            <hr>
            <ul>
              <li>Hardware</li>
              <li>Sistemas (software)</li>
              <li>Manutençao de Sistema</li>
              <li>Websites e Aplicativos</li>
              <li>Instalação de Sistemas</li>
            </ul>
          </div>
        </div>
        <div class="card col-md-12 col-lg-6 grupos-servicos mx-1 my-1">
          <div class="card-body text-center">
            <h5 class="card-title card-vagas"><i class="fab fa-envira mr-3"></i>SERVIÇOS EXTERNOS</h5>
            <hr>
            <ul>
              <li>Jardinagem</li>
              <li>Manutenção de piscinas</li>
              <li>Limpeza de áreas externas</li>
              <li>Serviço de Mudança</li>
            </ul>
          </div>
        </div>
      </div>
    </article>
  </section>
@endsection
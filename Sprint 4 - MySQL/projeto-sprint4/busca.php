<?php include_once('inc/head.php'); ?>

<body>
  <!-- HEADER -->
  <?php include_once('inc/header.php'); ?>

  <main class="container-fluid p-0">

    <!-- Section 1 - BUSCA -->
    <section class="container mx-auto my-5 pt-5" id="busca">
      <article>
        <p class="lead text-center vagas pt-3">Encontre um profissional para realizar o serviço que você
          procura:</p>
        <div class="input-group my-3 d-flex">
          <input type="text" class="form-control busca" placeholder="Escreva aqui o que você está procurando..." aria-label="Recipient's username" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn busca" type="button" id="button-addon2">
              <a href="busca.php" class="btn busca">BUSCAR</a></button>
          </div>
        </div>
      </article>
    </section>

    <!-- Section 2 - RESULTADO DAS BUSCAS (não devem aparecer enquanto não houver uma busca, depois veremos como fazer-->
    <section class="container mx-auto" id="resultadoBusca">
      <article class="row mt-2 mb-5 p-0 text-center">
        <div class="col-12 col-md-6 resultado-busca d-flex row mr-4">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <button type="button" class="btn btn-sm mb-2 text-white" data-toggle="modal" id="modalSolicitarOrcamento" data-target="#exampleModalLabel">Solicitar Orçamento
            </button>
          </div>
        </div>
        <div class="col-12 col-md-6 resultado-busca d-flex row mr-0">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <button type="button" class="btn btn-sm mb-2 text-white" data-toggle="modal" id="modalSolicitarOrcamento" data-target="#exampleModalLabel">Solicitar Orçamento
            </button>
          </div>
        </div>
        <div class="col-12 col-md-6 resultado-busca d-flex row mr-4">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <button type="button" class="btn btn-sm mb-2 text-white" data-toggle="modal" id="modalSolicitarOrcamento" data-target="#exampleModalLabel">Solicitar Orçamento
            </button>
          </div>
        </div>
        <div class="col-12 col-md-6 resultado-busca d-flex row mr-0">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <button type="button" class="btn btn-sm mb-2 text-white" data-toggle="modal" id="modalSolicitarOrcamento" data-target="#exampleModalLabel">Solicitar Orçamento
            </button>
          </div>
        </div>
        <div class="col-12 col-md-6 resultado-busca d-flex row mr-4">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <button type="button" class="btn btn-sm mb-2 text-white" data-toggle="modal" id="modalSolicitarOrcamento" data-target="#exampleModalLabel">Solicitar Orçamento
            </button>
          </div>
        </div>
        <div class="col-12 col-md-6 resultado-busca d-flex row mr-0">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <button type="button" class="btn btn-sm mb-2 text-white" data-toggle="modal" id="modalSolicitarOrcamento" data-target="#exampleModalLabel">Solicitar Orçamento
            </button>
          </div>
        </div>
        <div class="col-12 col-md-6 resultado-busca d-flex row mr-4">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <button type="button" class="btn btn-sm mb-2 text-white" data-toggle="modal" id="modalSolicitarOrcamento" data-target="#exampleModalLabel">Solicitar Orçamento
            </button>
          </div>
        </div>
        <div class="col-12 col-md-6 resultado-busca d-flex row mr-0">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <button type="button" class="btn btn-sm mb-2 text-white" data-toggle="modal" id="modalSolicitarOrcamento" data-target="#exampleModalLabel">Solicitar Orçamento
            </button>
          </div>
        </div>
      </article>
    </section>

    <!-- Modal Solicitar Orçamento -->
    <div class="modal fade aling-intens-center" id="exampleModalLabel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="login">Solicitar Orçamento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div id="texto-login-cadastro" class="form-group col-md-12">
                <label for="id_profissional">Nome do Profissional</label>
                <input type="text" name="id_profissional" class="form-control login-cadastro-input" id="id_profissional" placeholder="Nome de profissional selecionado (automático)">
              </div>
              <div id="texto-login-cadastro" class="form-group col-md-12">
                <label for="id_servico">Serviço</label>
                <input type="text" name="id_servico" class="form-control login-cadastro-input" id="id_servico" placeholder="Serviço selecionado (automático)">
              </div>
              <div id="texto-login-cadastro" class="form-group col-md-12">
                <label for="id_ong">ONG</label>
                <input type="text" name="id_ong" class="form-control login-cadastro-input" id="id_ong" placeholder="ONG selecionada (automático)">
              </div>
              <div id="texto-login-cadastro" class="form-group col-md-12">
                <label for="descricao_servico">Descreva o serviço a ser realizado</label>
                <input type="text" name="descricao_servico" class="form-control login-cadastro-input" id="descricao_servico" placeholder="Descrição do serviço a ser realizado, com o máximo de detalhes">
              </div>
              <div id="texto-login-cadastro" class="form-group col-md-12">
                <label for="quantidade">Quantidade (aproximada)</label>
                <input type="text" name="quantidade" class="form-control login-cadastro-input" id="quantidade" placeholder="Descrição da quantidade deste serviço, aproximadamente">
              </div>
              <div id="texto-login-cadastro" class="form-group col-md-12">
                <label for="id_contratante">Contratante</label>
                <input type="text" name="id_contratante" class="form-control login-cadastro-input" id="id_contratante" placeholder="CONTRATANTE (automático)">
              </div>
              <div id="texto-login-cadastro" class="form-group col-md-12">
                <label for="data_criacao">Data de envio do orçamento</label>
                <input type="date" name="data_criacao" class="form-control login-cadastro-input" id="data_criacao" placeholder="Data de HOJE (automático)">
              </div>
              <button type="submit" class="btn btn-primary ml-3" id="botao-login">Enviar</button>
            </form>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

  </main>

  <!-- FOOTER -->
  <?php include_once('inc/footer.php'); ?>
</body>

</html>
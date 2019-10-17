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
        <div class="col-12 col-md-6 resultado-busca d-flex row">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <a href="login.php" class="btn btn-sm text-white mb-2">Solicitar Serviço</a>
          </div>
        </div>
        <div class="col-12 col-md-6 resultado-busca d-flex row">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <a href="#" class="btn btn-sm text-white mb-2">Solicitar Serviço</a>
          </div>
        </div>
        <div class="col-12 col-md-6 resultado-busca d-flex row">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <a href="#" class="btn btn-sm text-white mb-2">Solicitar Serviço</a>
          </div>
        </div>
        <div class="col-12 col-md-6 resultado-busca d-flex row">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <a href="#" class="btn btn-sm text-white mb-2">Solicitar Serviço</a>
          </div>
        </div>
        <div class="col-12 col-md-6 resultado-busca d-flex row">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <a href="#" class="btn btn-sm text-white mb-2">Solicitar Serviço</a>
          </div>
        </div>
        <div class="col-12 col-md-6 resultado-busca d-flex row">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <a href="#" class="btn btn-sm text-white mb-2">Solicitar Serviço</a>
          </div>
        </div>
        <div class="col-12 col-md-6 resultado-busca d-flex row">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <a href="#" class="btn btn-sm text-white mb-2">Solicitar Serviço</a>
          </div>
        </div>
        <div class="col-12 col-md-6 resultado-busca d-flex row">
          <div class="col-12 col-md-6">
            <img src="img/profissional1.jpg" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
          </div>
          <div class="col-12 col-md-6">
            <h5 class="text-justify resultado-busca pt-1 mt-1">NOME DO PROFISSIONAL</h5>
            <h6 class="text-justify resultado-busca py-1 my-0">Serviço prestado</h6>
            <p class="text-justify resultado-busca py-1 my-0">Idade</p>
            <p class="text-justify resultado-busca py-1 my-0">Texto sobre o profissional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis aperiam mollitia est tempore!</p>
            <a href="#" class="btn btn-sm text-white mb-2">Solicitar Serviço</a>
          </div>
        </div>
      </article>
    </section>

  </main>

  <!-- FOOTER -->
  <?php include_once('inc/footer.php'); ?>
</body>

</html>
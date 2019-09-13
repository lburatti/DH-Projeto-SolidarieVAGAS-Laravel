<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CDN BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Cadastro</title>
</head>
<body>
    <main class="container display-blok ">
         <section>
             <div class=" d-flex justify-content-center ">
            <form class="col-6">
                <div class="form-row ">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-.6">
                        <label for="inputPassword4">senha </label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group col-md-.6">
                        <label for="inputPassword4">Nome da ong</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="nome ">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">CNPJ</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="00.000.000/0000-00">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity"placeholder="Cabo Frio ">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                        <option selected> estado </option> 
                    <option> São Paulo</option>
                        <option>Rio de Janeiro</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                        Check me out
                        </label>
                    </div>
                    <!-- <div class="form-check"> -->
                    <button type="submit" class="btn btn-primary">emviar</button>
                    </div>
                </div>
                
            </form>
            </div>
            <article class=" ">
                 <div class=" col-4 ">
                    <article class=" conteiner-fluid ">
                        <h2>dados das pessoas</h2>
                        <div class="form-group ">
                            <label for="detalhes" class="com-sombra"><b>Habilidades</b></label>
                            <textarea class="form-control" id="detalhes" name="detalhes" rows="4"></textarea>
                        </div>
                        <H2>habilidades</H2>
                    </article>
                </div>
                <div class="col-4">
                     <article >
                         <h2>dados das pessoas</h2>
                         <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quidem fugiat saepe architecto necessitatibus quas atque totam ut, autem dolores sint, doloremque quos odit? Deserunt, suscipit enim. Ipsa, officiis inventore.</h5>
                     </article>
                </div>
            </article>      
        </section>
    </main>

    
<!-- CDN JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
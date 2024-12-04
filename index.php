<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilo/style.css">
    <title>Projeto 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="center">
            <div class="logo left"><!--Logo marca-->
                Studio Refart
            </div>
            <nav class="desktop right ">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div><!--Clear-->
        </div><!--Center-->
    </header>

    <section class="banner-principal">
        <div class="overlay"></div>
        <div class="center">
            <form action="#">
                <h2>Qual o seu melhor e-mail</h2>
                <input type="email" name="email" required>
                <input type="submit" name="acao" value="Cadastrar">
            </form>
        </div><!--Center-->
        <div class="clear"></div>
    </section> <!--Banner principal-->

    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Joao Vitor</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eum fuga facilis voluptates quod excepturi quas vel odio velit illo, sunt magni perferendis laboriosam hic eius minima suscipit ipsum recusandae.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eum fuga facilis voluptates quod excepturi quas vel odio velit illo, sunt magni perferendis laboriosam hic eius minima suscipit ipsum recusandae.</p>
            </div><!--W50-->
            <div class="w50 left">
                <!--Pegar imagem depois-->
                <img src="images/foto.jpg" alt="">
            </div><!--W50-->
            <div class="clear"></div>
        </div><!--Center-->
    </section><!--Descricao autor-->

    <div class="container-fluid">
        <div class="row">
            <section class="especialidades">
              
                    <div class="row">
                        <h2 class="title">Especialidades</h2>
                    </div>
                  <!--Box-especialidade-->
                    <div class="col-md-3 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Html 5</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Html 5</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Html 5</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <!--Box-especialidade-->
                    <!--Box-especialidade-->
            
            </section>
        </div>
    </div><!--Especialidades-->

    <section class="extras">
        <div class="center">
            <div class="w50 left">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia autem repellendus, iste incidunt commodi ullam tempore, reiciendis officiis nostrum, expedita maxime labore magnam sint voluptates blanditiis eveniet inventore ab dolores.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia autem repellendus, iste incidunt commodi ullam tempore, reiciendis officiis nostrum, expedita maxime labore magnam sint voluptates blanditiis eveniet inventore ab dolores.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia autem repellendus, iste incidunt commodi ullam tempore, reiciendis officiis nostrum, expedita maxime labore magnam sint voluptates blanditiis eveniet inventore ab dolores.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
            </div><!--W50-->
            <div class="w50 left">
                <h2 class="title">Serviços</h2>
                <div class="serivocs">
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam qui commodi odio aperiam non sequi. Fuga ea est, mollitia atque temporibus, deserunt animi accusantium quasi eligendi, cum impedit provident esse!</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam qui commodi odio aperiam non sequi. Fuga ea est, mollitia atque temporibus, deserunt animi accusantium quasi eligendi, cum impedit provident esse!</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam qui commodi odio aperiam non sequi. Fuga ea est, mollitia atque temporibus, deserunt animi accusantium quasi eligendi, cum impedit provident esse!</li>
                    </ul>
                </div>
            </div><!--W50-->
            <div class="clear"></div>
        </div><!--Center-->
    </section><!--Extras-->

    <footer>
        <div class="center">
            <p>todos os direitos reservados</p>
        </div><!--Center-->
    </footer>
    <script src="https://kit.fontawesome.com/9aff4d7fb2.js" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
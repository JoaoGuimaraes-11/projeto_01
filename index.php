<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="estilo/style.css">
    <title>Projeto 01</title>
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
                <div class="botao-menu-mobile">
                <i class="fa-solid fa-bars"></i>
                </div>
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
         <h2 class="teste">Joao Vitor</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eum fuga facilis voluptates quod excepturi quas vel odio velit illo, sunt magni perferendis laboriosam hic eius minima suscipit ipsum recusandae.</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eum fuga facilis voluptates quod excepturi quas vel odio velit illo, sunt magni perferendis laboriosam hic eius minima suscipit ipsum recusandae.</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eum fuga facilis voluptates quod excepturi quas vel odio velit illo, sunt magni perferendis laboriosam hic eius minima suscipit ipsum recusandae.</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eum fuga facilis voluptates quod excepturi quas vel odio velit illo, sunt magni perferendis laboriosam hic eius minima suscipit ipsum recusandae.</p>
        </div><!--W50-->
        <div class="w50 left responsive">
            <!--Pegar imagem depois-->
            <img class="autor" src="images/foto.jpg" alt="">
        </div><!--W50-->
        <div class="clear"></div>
        </div><!--Center-->
    </section><!--Descricao autor-->

    <section class="especialidades">
        <div class="center">
        <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidade">
                <h3><i class="fa-brands fa-css3"></i></h3>
                <h4>CSS3</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic saepe, itaque eum, architecto ab perspiciatis earum beatae a, quia numquam officiis eaque doloremque aliquid aliquam. Vel culpa numquam mollitia voluptas.</p>
            </div><!--Box-especialidade-->
            <div class="w33 left box-especialidade">
                <h3><i class="fa-brands fa-html5"></i></h3>
                <h4>HTML5</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic saepe, itaque eum, architecto ab perspiciatis earum beatae a, quia numquam officiis eaque doloremque aliquid aliquam. Vel culpa numquam mollitia voluptas.</p>
            </div><!--Box-especialidade-->
            <div class="w33 left box-especialidade">
                <h3><i class="fa-brands fa-js"></i></h3>
                <h4>JAVASCRIPT</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic saepe, itaque eum, architecto ab perspiciatis earum beatae a, quia numquam officiis eaque doloremque aliquid aliquam. Vel culpa numquam mollitia voluptas.</p>
            </div><!--Box-especialidade-->
            <div class="clear"></div>
        </div><!--Center-->
    </section><!--Especialidades-->

    <section class="extras">
        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos Dos Nossos Clientes</h2>
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
            <div class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
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
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
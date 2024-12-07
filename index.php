<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link <?php echo INCLUDE_PATH; ?>  rel="stylesheet" href="estilo/style.css">
    <title>Projeto 01</title>
</head>
<body>
   
    <header>
        <div class="center">
            <div class="logo left"><!--Logo marca-->
                <a href="/">Marcelo</a>
            </div>
            <nav class="desktop right ">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                <li><a href="#">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?> servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
                </ul>
            </nav>
            <div class="clear"></div><!--Clear-->
        </div><!--Center-->
    </header>

    <?php 
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }
        else{
            //podemos fazer o que quiser pois a pagina nao existe
            $pagina404 = true;
            include('pages/404.php');
        }
    ?>
     

    <footer <?php if(isset($pagina404) && $pagina404 == true ) echo 'class="fixed";' ?>>
        <div class="center">
            <p>todos os direitos reservados</p>
        </div><!--Center-->
    </footer>
    <script <?php echo INCLUDE_PATH; ?>  src="https://kit.fontawesome.com/9aff4d7fb2.js" crossorigin="anonymous"></script>
    <script <?php echo INCLUDE_PATH; ?> src="js/jquery-3.7.1.js"></script>
    <script <?php echo INCLUDE_PATH; ?> src="js/scripts.js"></script>
</body>
</html>
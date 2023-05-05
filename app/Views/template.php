<!DOCTYPE html>
<html lang="pt-br">
<?php 


?> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="../img/logo.jpeg">
    <link rel="stylesheet" href="./styles/styles.css">
    <script src="./js/menuMobile.js" defer></script>
    <?= $this->renderSection('css') ?>
    <title>Jr Construções</title>
</head>

<body>
<header>
    <nav id="nav">
        <figure class="logo-area">
            <img src="../img/logo-sem-fundo.png" class="logo">
        </figure>
        <div class="mobile-menu">
            <div class="linha1"></div>
            <div class="linha2"></div>
            <div class="linha3"></div>
        </div>
        <ul class="nav-list">
            <li><a href="./">Home</a></li>
            <li><a href="./portifolio">Portifolio</a></li>
            <li><a href="./produtos">Produtos</a></li>
            <li><a href="./empresa">Empresa</a></li>
            <li><a href="./contato">Contato</a></li>
        </ul>
    </nav>
</header>
<main>
    <?= $this->renderSection('conteudo') ?>
</main>
<footer>
    <p class="footer-text">
        2023 Jr Construções / Todos os direitos reservados &copy;
    </p>
</footer>
</body>

</html>
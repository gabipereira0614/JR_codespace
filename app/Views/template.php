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
    <?= $this->renderSection('css') ?>

    <title>Jr Construções</title>
</head>

<body>
<header>
    <nav id="logo-area">
        <img src="../img/logo-sem-fundo.png" class="logo">
    </nav>
    <nav id="navegacao">
        <div class="links">
            <a href="./">Home</a>
            <a href="./portifolio">Portifolio</a>
            <a href="./produtos">Produtos</a>
            <a href="./empresa">Empresa</a>
            <a href="./contato">Contato</a>
            
            
        </div>
    </nav>
</header>
<main>
    <?= $this->renderSection('conteudo') ?>
</main>
<footer>
    <p id="footer-text">
        2023 Jr Construções / Todos os direitos reservados &copy;
    </p>
</footer>
</body>

</html>
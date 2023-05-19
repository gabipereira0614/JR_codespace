<!DOCTYPE html>
<html lang="pt-br">
<?php 

?> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="../img/logo.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="./js/navbar.js" defer></script>
    <?= $this->renderSection('css') ?>
    <title>Jr Construções</title>
</head>
<body>
<header>
    <nav id="nav">
        <figure class="logo-area">
            <img src="/img/logo-sem-fundo.png" class="logo">
        </figure>
        <div class="mobile-menu">
            <div class="linha1"></div>
            <div class="linha2"></div>
            <div class="linha3"></div>
        </div>
        <ul class="nav-list">
            <li><a href="./novidades">Novidades</a></li>
            <li><a href="./portifolio">Portifolio</a></li>
            <li><a href="./produto">Produtos</a></li>
            <li><a href="<?= base_url("admin/sair") ?>" class="sair">Sair</a></li>
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
<script>
    function remover(id) {
        const link = document.getElementById("link-exclusao");
        const modalExclusao =
            new bootstrap.Modal(document.getElementById("confirmacao"), {});

        link.setAttribute("href", `/admin/produto/deletar/${id_produto}`);

        modalExclusao.show();
    }
</script>
</html>
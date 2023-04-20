<?= $this->extend('template') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="./styles/portifolio.css">
<link rel="stylesheet" href="./styles/template.css">
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>
<div id="conteudo-portifolio">
    <div class="titulo-portifolio">
        <h2>Nossos Destaques</h2>
    </div>
    <div id="imagens-portifolio">
        <img src="../img/deck1.jpeg" alt="" class="imagem">
        <img src="../img/pergolado_reduzido.jpeg" alt="" class="imagem">
        <img src="../img/piscina.jpeg" alt="" class="imagem">
        <img src="../img/telhado.jpeg" alt="" class="imagem">
        <img src="../img/deck2.jpeg" alt="" class="imagem">
        <img src="../img/carpintaria1.jpeg" alt="" class="imagem">
        <img src="../img/logo-sem-fundo.png" alt="" class="imagem">
        <img src="../img/logo-sem-fundo.png" alt="" class="imagem">
        <img src="../img/logo-sem-fundo.png" alt="" class="imagem">
    </div>
</div>

<?= $this->endSection() ?>
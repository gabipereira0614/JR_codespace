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
<<<<<<< HEAD
    <div class="container-portifolio">
            <?php foreach ($portifolios as $portifolio) : ?>
                <img src="/uploads/portifolio/<?= $portifolio["imagem"] ?>" alt="Imagem de Portifolio" class="imagem">
            <?php endforeach; ?>
=======
    <div class="container text-center">
        <?php foreach ($portifolios as $portifolio) : ?>
            <div class="imagens-portifolio" class="col">
                <img src="/uploads/portifolio/<?= $portifolio["imagem"] ?>" alt="Imagem de Portifolio" class="imagem">
            </div>
        <?php endforeach; ?>
>>>>>>> 1ec5787e19fa3e4750a702a290c375a525d3e1f0
    </div>
</div>

<?= $this->endSection() ?>
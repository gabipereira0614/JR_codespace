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
    <?php foreach ($portifolios as $portifolio) : ?>
        <div id="imagens-portifolio">
            <img src="/uploads/portifolio/<?= $portifolio["imagem"] ?>" alt="Imagem de Portifolio" class="imagem">
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection() ?>
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
    <div class="container text-center">
        <div class="row">
            <?php foreach ($portifolios as $portifolio) : ?>
            <div id="imagens-portifolio" class="col">
                <img src="/uploads/portifolio/<?= $portifolio["imagem"] ?>" alt="Imagem de Portifolio" class="imagem">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
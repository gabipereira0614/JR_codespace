<?= $this->extend('template') ?>
<?= $this->section('css') ?>
<link rel="stylesheet" href="./styles/produto.css">
<link rel="stylesheet" href="./styles/template.css">
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>
<div class="row">
    <?php foreach ($produtos as $produto): ?>    
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="<?= $produto["imagem"] ?>"
                    alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title"><?= $produto["nome_produto"] ?></h5>
                    <p class="card-text"><strong>Preço:</strong> R$ <?= $produto["preco"] ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a type="button" class="btn btn-sm btn-outline-secondary">Fale Conosco</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
<?= $this->endSection() ?>
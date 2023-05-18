<?= $this->extend('templates') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="../styles/admin/templates.css">
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>
<style>
    .btn-warning {
        --bs-btn-bg: #F25D07 !important;
        --bs-btn-hover-bg: #F25D07 !important;
        --bs-btn-border-color: #F25D07 !important;
        --bs-btn-hover-border-color: #F25D07
    }
</style>
<div class="container">
    <div class="mb-3">
        <label for="nome" class="form-label label-titulo" row="30" column="30">Imagem Portifolio:</label>
        <input type="text" class="form-control" id="imagem_portifolio" name="imagem_portifolio" value="">
    </div>

    <div>
        <button class="btn btn-primary" type="submit">Salvar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<?= $this->endSection() ?>
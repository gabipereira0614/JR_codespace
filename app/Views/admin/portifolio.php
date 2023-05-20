<?= $this->extend('templates') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="../styles/admin/templates.css">
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>
<?php
$idportifolio = '';
$imagem = '';

if (isset($portifolio)) {
    $idportifolio  =  $portifolio["idportifolio"];
    $imagem = $portifolio["imagem"];
}

?>
<style>
    .btn-warning {
        --bs-btn-bg: #F25D07 !important;
        --bs-btn-hover-bg: #F25D07 !important;
        --bs-btn-border-color: #F25D07 !important;
        --bs-btn-hover-border-color: #F25D07
    }
</style>
<div class="container">
    <?= form_open_multipart(base_url("admin/portifolio/salvar")) ?>
    <div class="mb-3">
        <label for="idportifolio" class="form-label label-titulo">Código Imagem</label>
        <input type="text" class="form-control" id="idportifolio" name="idportifolio" value="<?= $idportifolio ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="imagem" class="form-label label-titulo">Imagem Portifolio:</label>
        <input type="file" class="form-control" id="imagem" name="imagem" accept=".png, .jpg, .jpeg">
    </div>

    <div>
        <button class="btn btn-primary" type="submit">Salvar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </div>
    <?= form_close() ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>

                <th scope="col">imagem</th>
            </tr>
        </thead>
        <?php foreach ($portifolios as $portifolio) : ?>
            <tr>
                <th scope="row"><?= $portifolio["idportifolio"] ?></th>
                <td><img src="/uploads/portifolio/<?= $portifolio["imagem"] ?>" width="100px"><?= esc($portifolio["imagem"]) ?>
                </td>
                <a class="btn btn-danger" href="/admin/portifolio/deletar/<?= $portifolio["idportifolio"] ?>)">Excluir</a>
                <?= anchor(base_url("/admin/portifolio/" . $portifolio['idportifolio']), "Alterar", array('class' => 'btn btn-warning')) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<?= $this->endSection() ?>
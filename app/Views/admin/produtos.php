<?= $this->extend('templates') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="../styles/admin/templates.css">
<link rel="stylesheet" href="../styles/admin/produtos.css">
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>

<?php
$id_produto = '';
$nome_produto = '';
$preco = '';
$imagem = '';

if (isset($produto)) {
    $id_produto =  $produto["id_produto"];
    $nome_produto = $produto["nome_produto"];
    $preco = $produto["preco"];
    $imagem = $produto["imagem"];
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
        <?php if (session()->has("tipo")) : ?>
            <div class="alert alert-<?= session("tipo") ?> mt-2" role="alert">
                <?= session("mensagem") ?>
            </div>
        <?php endif; ?>
        <?= form_open_multipart(base_url("admin/produto/salvar")) ?>
        <div class="mb-3">
            <label for="idproduto" class="form-label label-titulo" >Código Poduto</label>
            <input type="text" class="form-control" id="id_produto" name="id_produto" value="<?= $id_produto ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label label-titulo">Nome produto:</label>
            <input type="text" class="form-control" id="nome_produto" name="nome_produto" value="<?= $nome_produto ?>">
        </div>
    <div class="mb-3">
        <label for="preco" class="form-label label-titulo">Preco produto</label>
        <input type="text" class="form-control" id="preco" name="preco" value="<?= $preco ?>">
    </div>
    <?php
    if ($imagem != "") : ?>
        <div class="mb-3">
            <label for="imagem" class="form-label">imagem atual </label><br />
            <img src="<?= base_url("uploads/produtos/$imagem") ?>">
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="imagem" class="form-label label-titulo">Selecione a Imagem</label>
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
                <th scope="col">Nome</th>
                <th scope="col">Preco</th>
                <th scope="col">imagem</th>
                <th scope="col">Botoes</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto) : ?>
                <tr>
                    <th scope="row"><?= $produto["id_produto"] ?></th>
                    <td><?= $produto["nome_produto"] ?></td>
                    <td><?= $produto["preco"] ?></td>
                    <td><img src="/uploads/produtos/<?= $produto["imagem"] ?>" width="100px"><?= esc($produto["imagem"]) ?>
                    </td>
                    <td>
                    <a class="btn btn-danger" href="/admin/produto/deletar/<?= $produto["id_produto"] ?>)">Excluir</a>
                    <?= anchor(base_url("/admin/produto/" . $produto['id_produto']), "Alterar", array('class' => 'btn btn-warning')) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<?= $this->endSection() ?>
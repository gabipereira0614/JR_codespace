<?= $this->extend('templates') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="../styles/template.css">
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>
<div class="mb-3">
    <label for="nome" class="form-label">Campo de Texto da novidade:</label>
    <textarea class="form-control" id="texto_novidades" rows="3"></textarea>
</div>
<div class="mb-3">
    <label for="nome" class="form-label" row="30" column="30">Imagem novidade:</label>
    <input type="text" class="form-control" id="imagem_novidades" name="imagem_novidades" value="">
</div>
<div>
    <button class="btn btn-primary" type="submit">Salvar</button>
    <button type="reset" class="btn btn-warning">Limpar</button>
</div>
<?= $this->endSection() ?>
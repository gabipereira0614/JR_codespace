<?= $this->extend('template') ?>
<?= $this->section('css') ?>
<link rel="stylesheet" href="./styles/login.css">
<?= $this->endSection() ?>
<?= $this->section('conteudo') ?>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
<div class="conteudo-login">
    <?= form_open(base_url("admin/logar")) ?>
        <fieldset>
            <legend>
                <img class="imagem-logo" src="./img/perfil-de-usuario.png" alt="">
            </legend>
                
            <div class="formulario-login">
                <?php if (session()->has("tipo")) : ?>
                <div class="alert alert-<?= session("tipo") ?> mt-2" role="alert">
                <?= session("aviso") ?>
            </div>
                <?php endif; ?>
                <div class="aviso">
                    O login é de uso exclusivo de administradores.
                </div>
                <input type="email" class="inputs" placeholder="Email" name="email">
                <input type="password" class="inputs" placeholder="Senha" name="senha">
                <button type="submit" class="botao-entrar">ENTRAR</button>
            </div>
        </fieldset>
    <?= form_close() ?>
</div>
<?= $this->endSection() ?>
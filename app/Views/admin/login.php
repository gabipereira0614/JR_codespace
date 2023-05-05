<?= $this->extend('template') ?>
<?= $this->section('css') ?>
<link rel="stylesheet" href="./styles/login.css">
<?= $this->endSection() ?>
<?= $this->section('conteudo') ?> 
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Administrador</title>
</head>

<body> -->

    <?php if (session()->has("aviso-login")) : ?>
        <h2><?= session("aviso-login") ?></h2>
    <?php endif; ?>

    <?= form_open(base_url("admin/logar")) ?>
    
        <div class="centralizar-login">
            <fieldset>
                <legend>
                    <img class="imagem-logo" src="./img/perfil-de-usuario.png" alt="">
                </legend>

                <div class="formulario-login">
                    <label for="email"></label>
                    <input type="email" class="inputs" placeholder="Email" name="email">
                    <label for="senha"></label>
                    <input type="password" class="inputs" placeholder="Senha" name="senha">
                    <button type="submit" class="botao-contato">ENTRAR</button>
                </div>
            </fieldset>
        </div>
    
    <!-- <div>
        <label for="email">Email</label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="senha">Senha</label>
        <input type="password" name="senha">
    </div>
    <div>
        <button type="submit">Entrar</button>
    </div> -->
    <?= form_close() ?>

    <hr>

    <?php if (session()->has("aviso")) : ?>
        <h2><?= session("aviso") ?></h2>
    <?php endif; ?>

    <?= form_open("admin/novo") ?>
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
    </div>

    <div>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">
    </div>

    <div>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
    </div>

    <div>
        <button type="submit">OK</button>
    </div>
    <?= form_close() ?>
<!-- </body>

</html> -->
<?= $this->endSection() ?>
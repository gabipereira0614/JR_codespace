<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Administrador</title>
</head>

<body>

    <?php if (session()->has("aviso-login")) : ?>
        <h2><?= session("aviso-login") ?></h2>
    <?php endif; ?>

    <?= form_open(base_url("admin/logar")) ?>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="senha">Senha</label>
        <input type="password" name="senha">
    </div>
    <div>
        <button type="submit">Entrar</button>
    </div>
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
</body>

</html>
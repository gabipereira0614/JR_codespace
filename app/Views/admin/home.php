<?= $this->extend('template') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="./styles/login.css">
<link rel="stylesheet" href="./styles/template.css">
<?= $this->endSection() ?>
<?= $this->section('conteudo') ?>

<div class="conteudo-login">
    <form action="">
        <div class="centralizar-login">
            <fieldset>
                <legend>
                    <img class="imagem-logo" src="./img/perfil-de-usuario.png" alt="">
                </legend>

                <div class="formulario-login">
                    <label for="nome-contato"></label>
                    <input type="text" class="inputs" placeholder="Nome">
                    <label for="email-contato"></label>
                    <input type="email" class="inputs" placeholder="Email">
                    <label for="senha-contato"></label>
                    <input type="password" class="inputs" placeholder="Senha">
                    <button type="submit" class="botao-contato">Login</button>
                </div>
            </fieldset>
        </div>
    </form>
</div>

    <!-- <div class="formulario-login">
                <label for="nome-contato"></label>
                <input type="text" placeholder="Nome">
                <label for="email-contato"></label>
                <input type="email" placeholder="Email">
                <label for="senha-contato"></label>
                <input type="password" placeholder="Senha">
                <button type="submit">Login</button>
            </div> -->






<?= $this->endSection() ?>
<?= $this->extend('template') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="./styles/empresa.css">
<link rel="stylesheet" href="./styles/template.css">
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>
<div class="conteudo-empresa">
    <div class="superior-empresa">
        <div class="titulo-empresa">Quem somos nós</div>
        <img class="imagem-empresa" src="../img/logo.jpeg">
    </div>
    <div class="central-empresa">
        <div class="texto-empresa">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p>Aliquid excepturi consectetur iure non at. Asperiores nostrum,</p>
            <p>perspiciatis reprehenderit fugiat adipisci voluptates pariatur</p>
            <p>repellendus error tempora saepe aspernatur animi esse molestiae!</p>
        </div>
        <img class="imagem-empresa2" src="../img/logo.jpeg">
        </div>
        <div class="inferior-empresa">
        <img class="imagem-empresa2" src="../img/logo.jpeg">
        <div class="texto-empresa">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p>Aliquid excepturi consectetur iure non at. Asperiores nostrum,</p>
            <p>perspiciatis reprehenderit fugiat adipisci voluptates pariatur</p>
            <p>repellendus error tempora saepe aspernatur animi esse molestiae!</p>
        </div>
    </div>


</div>
<?= $this->endSection() ?>
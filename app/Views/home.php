<?= $this->extend('template') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="./styles/home.css">
<link rel="stylesheet" href="./styles/template.css">
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>

<div class="container">
    <div class="conteudo-superior">
        <div class="container-texto-superior">
            <h1 class="titulo-superior">Jr<br>Construções</h1><br>
            <p class="texto-superior">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem distinctio ipsam dolores
                aspernatur eligendi est odit incidunt nostrum obcaecati eos animi cumque repudiandae,
                laudantium reprehenderit molestias assumenda laboriosam recusandae quisquam?</p>
            <p class="texto-superior">Molestias magnam labore ratione nobis quod? Commodi vitae, minus quod vero cumque earum,
                voluptatum exercitationem voluptates eos molestiae omnis placeat consequuntur voluptas
                itaque excepturi! Minima soluta quod atque voluptatem id?</p>
            <p class="texto-superior">Cumque recusandae, rem, debitis saepe maiores ipsa distinctio quos enim itaque ullam corporis
                culpa. Rem iste natus sapiente asperiores consequuntur consequatur harum voluptates
                quibusdam magnam. Perspiciatis molestias beatae nostrum. Totam?</p>
        </div>
    </div>
    <div class="conteudo-central">
        <h2 class="titulo-central">Serviços Jr</h2>
        <div class="cards-home">
            <div class="card-servico">
                <img src="../img/construcao.jpeg" alt="" class="imagem-card">
                <div class="conteudo">
                    <h3>Construção Civil</h3>
                    <p class="texto-descricao">
                        Cumque recusandae, rem, debitis saepe maiores ipsa distinctio quos enim
                        itaque ullam corporis culpa. Rem iste natus sapiente asperiores consequuntur
                        consequatur
                    </p>
                </div>
            </div>
            <div class="card-servico">
                <img src="../img/pergolado_reduzido.jpeg" alt="" class="imagem-card">
                <div class="conteudo">
                    <h3>Carpintaria</h3>
                    <p class="texto-descricao">
                        Cumque recusandae, rem, debitis saepe maiores ipsa distinctio quos enim
                        itaque ullam corporis culpa. Rem iste natus sapiente asperiores consequuntur
                        consequatur
                    </p>
                </div>
            </div>
            <div class="card-servico">
                <img src="../img/maridoAluguel.jpg" alt="" class="imagem-card">
                <div class="conteudo">
                    <h3>Marido de Aluguel</h3>
                    <p class="texto-descricao">
                        Cumque recusandae, rem, debitis saepe maiores ipsa distinctio quos enim
                        itaque ullam corporis culpa. Rem iste natus sapiente asperiores consequuntur
                        consequatur
                    </p>
                </div>
            </div>
        </div>
        <div class="container-carrossel">
            <img src="../img/deck2.jpeg" alt="logo" class="imagem-carrossel">
        </div>
    </div>
    <div class="conteudo-inferior">
        <h2 class="titulo-inferior">Novidades</h2>
        <div class="conteudo-novidades">
            <img src="../img/logo.jpeg" alt="logo" class="imagem-novidade">
            <div class="container-texto-inferior">
                <p> ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Culpa perspiciatis fuga possimus nulla est maiores consequatur ut. Aut, amet </p>
                <p>, deserunt eveniet id iste rem, vel aspernatur neque consectetur ullam!</p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
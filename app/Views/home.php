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
            <p class="texto-superior">
                Bem-vindo(a) à JrConstruções, uma empresa comprometida em transformar sonhos em realidade por meio da construção civil. 
                Com uma história de determinação e paixão pelo que fazemos, temos o prazer de oferecer soluções construtivas de 
                qualidade para atender às suas necessidades.
            </p>
            <p class="texto-superior">
                Desde a nossa fundação em 2010, a JrConstruções tem se destacado no mercado por sua abordagem humilde, porém dedicada, 
                e por seu compromisso com a excelência. Independentemente do tamanho ou da complexidade do projeto, nossa equipe 
                talentosa de engenheiros, arquitetos e profissionais especializados está pronta para entregar resultados superiores.
            </p>
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
                        A nossa empresa de construção civil é especializada em projetar, construir e renovar estruturas físicas.
                        Desde o planejamento inicial até a conclusão da obra, garantimos qualidade e segurança em todas as etapas do processo.
                    </p>
                </div>
            </div>
            <div class="card-servico">
                <img src="../img/pergolado_reduzido.jpeg" alt="" class="imagem-card">
                <div class="conteudo">
                    <h3>Carpintaria</h3>
                    <p class="texto-descricao">
                        A nossa empresa é especializada em trabalhos em madeira,
                        oferecendo serviços de alta qualidade para atender às necessidades dos clientes.
                        Nós projetamos, fabricamos e instalamos uma variedade de produtos de madeira, como móveis, portas, janelas, armários, escadas
                        e muito mais.
                    </p>
                </div>
            </div>
            <div class="card-servico">
                <img src="../img/maridoAluguel.jpg" alt="" class="imagem-card">
                <div class="conteudo">
                    <h3>Marido de Aluguel</h3>
                    <p class="texto-descricao">
                        Nossa empresa oferece serviços versáteis e práticos para resolver problemas domésticos.
                        Nossos profissionais especializados estão prontos para ajudar em uma variedade de tarefas,
                        desde pequenos reparos até instalações e manutenção residencial.
                    </p>
                </div>
            </div>
        </div>
        <section class="container-carrossel">
            <div class="imagem-carrossel">
                <img src="../img/deck2.jpeg" alt="foto1" height="100%" width="100%">
                <img src="../img/construcao.jpeg" alt="foto2" height="100%" width="100%">
                <img src="../img/carpintaria1.jpeg" alt="foto2" height="100%" width="100%">
                <img src="../img/carpintaria1.jpeg" alt="foto2" height="100%" width="100%">
            </div>
        </section>
    </div>
    <div class="conteudo-inferior">
        <h2 class="titulo-inferior">Novidades</h2>
        <div class="conteudo-novidades">
       
            <img src="/uploads/novidades/<?= $novidade[0]["imagem"] ?>" class="imagem-novidade">
            <div class="container-texto-inferior">
                <?= $novidade[0]["texto"]; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
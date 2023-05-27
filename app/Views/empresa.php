<?= $this->extend('template') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="./styles/empresa.css">
<link rel="stylesheet" href="./styles/template.css">
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>

<div class="conteudo-superior">
    <div class="container-superior">
        <h2 class="titulo-superior">A Empresa<h2>
    </div>
</div>
<hr>
<div class="conteudo-central">
    <div class="campo-texto">
        <p>
            A empresa oferece uma variedade de serviços relacionados à construção civil, incluindo projetos arquitetônicos, planejamento
            de obras, execução de reformas e construção de pequenas estruturas. Seu objetivo principal é atender às necessidades de seus 
            clientes, garantindo a qualidade e a satisfação do cliente em todas as etapas do processo.
        </p>
        <p>
        A JrConstruções de Cesário trabalha de forma colaborativa, envolvendo todos os membros da equipe em cada projeto. Eles têm 
        uma abordagem consultiva, buscando entender as demandas específicas de cada cliente e oferecendo soluções personalizadas. 
        Além disso, eles valorizam a transparência, mantendo uma comunicação clara e constante com seus clientes ao longo do projeto.
        </p>
    </div>
    <div class="imagem-conteudo">
        <img src="../img/deck1.jpeg" class="imagem-empresa">
    </div>
</div>
<div class="conteudo-central">
    <div class="imagem-conteudo">
        <img src="../img/deck1.jpeg" class="imagem-empresa">
    </div>
    <div class="campo-texto">
    <p>
            Não concordo nem discordo, muito pelo contrário.. A vida é uma vai e vem que não tem volta.. Como se escreve o número 
            0 em algarismos romanos? I have a moral code, but I haven't figured out how to read it yet. Antes tarde do que mais 
            tarde.. Pobre só enche a barriga quando morre afogado.. Em rio de piranhas, jacaré nada de costas.. Por que 'tudo junto' 
            se escreve separado e 'separado' se escreve tudo junto?.
        </p>
        <p>
            Não concordo nem discordo, muito pelo contrário.. A vida é uma vai e vem que não tem volta.. Como se escreve o número 
            0 em algarismos romanos? I have a moral code, but I haven't figured out how to read it yet. Antes tarde do que mais 
            tarde.. Pobre só enche a barriga quando morre afogado.. Em rio de piranhas, jacaré nada de costas.. Por que 'tudo junto' 
            se escreve separado e 'separado' se escreve tudo junto?.
        </p>
    </div>
    
</div>
<div class="conteudo-inferior"></div>

<?= $this->endSection() ?>
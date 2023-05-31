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
        <div class="sub-titulo">
            <h3>Introdução</h3>
            <div class="divisoria"></div>
        </div>
        <p>
            A JrConstruções situada em Cesário Lange, se especializa em serviços relacionados à construção civil. Com uma equipe 
            colaborativa, eles oferecem uma variedade de serviços, desde projetos arquitetônicos até a execução de reformas e 
            construção de pequenas estruturas. Seu objetivo principal é atender às necessidades específicas de cada cliente, buscando 
            garantir a qualidade e a satisfação do cliente em todas as etapas do processo.
        </p>
        <p>
            Com sua equipe altamente qualificada e engajada, a JrConstruções se destaca no mercado por sua capacidade de entregar 
            resultados de alta qualidade, aliados a um atendimento personalizado. Eles estão comprometidos em proporcionar aos 
            clientes uma experiência positiva e construir soluções duradouras, sempre buscando a excelência em cada empreendimento.
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
        <div class="sub-titulo">
            <h3>Transparência e Colaboração</h3>
            <div class="divisoria"></div>
        </div>
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
    <div class="campo-texto">
        <p>
            A colaboração é um elemento fundamental para o sucesso da JrConstruções de Cesário. A empresa valoriza a participação 
            de todos os membros da equipe em cada projeto, reconhecendo que cada um traz habilidades e perspectivas únicas para a 
            mesa. Ao promover um ambiente colaborativo, a JrConstruções busca aproveitar ao máximo o potencial de sua equipe e 
            alcançar resultados excepcionais.
        </p>
        <div class="separacao">
            <div class="icones">
                <img src="../img/icones/comunicacao.png">
                <br>
                <b>Comunicação eficaz</b>
            </div>
            <div class="icones">
                <img src="../img/icones/consulta.png">
                <br>
                <b>Abordagem consultiva</b>
            </div>
            <div class="icones">
                <img src="../img/icones/aprendendo.png">
                <br>
                <b>Aprendizado contínuo</b>
            </div>
        </div>
    </div>   
</div>
<div class="conteudo-central">
    <p>
        Em resumo, a JrConstruções de Cesário valoriza a colaboração como um pilar central de sua cultura empresarial. Através da 
        comunicação eficaz, trabalho em equipe, abordagem consultiva, sinergia entre departamentos e aprendizado contínuo, eles 
        constroem um ambiente propício para o sucesso de cada projeto e a satisfação dos clientes.
    </p>
</div>

<div class="conteudo-inferior"></div>

<?= $this->endSection() ?>
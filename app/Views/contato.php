<?= $this->extend('template') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="./styles/contato.css">
<link rel="stylesheet" href="./styles/template.css">
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>
<div class="container-contato">
    <div class="conteudo-contato">
        <div class="superior-contato">
            <div class="titulo-contato">Contato</div>
        </div>
        <div class="central-contato">
            <div class="texto-central">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Voluptatem vitae alias, placeat porro totam cumque sint </p>
                <p>assumenda adipisci. Adipisci natus consequuntur harum voluptates
                <p>asperiores voluptas quo ea minus iusto. Distinctio!</p>
            </div>
            <form action="">
                <div class="informacoes-contato">
                    <label for="nome">Nome:</label><br>
                    <input type="text"><br>
                    <label for="email">Email:</label><br>
                    <input type="email"><br>
                    <label for="mensagem">Mensagem</label><br>
                    <textarea name="mensagem" id="txtArea" cols="30" rows="10"></textarea><br>
                    <button type="submit">Enviar</button>
                </div>
            </form>

        </div>
    </div> 
        <div class="inferior-contato">
            <div class="text-inferior">Onde Nos Encontrar?</div>
            <div class="centralizar-contato">
                <div class="text-local">Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>
                    Et unde autem itaque inventore error hic! Quo, laboriosam nesciunt accusamus,
                    mollitia dolor placeat libero omnis alias impedit, laborum natus officiis eum!</div>
                <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229.14421757623634!2d-47.96154184720041!3d-23.23189543468878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c67a534d5ae9f7%3A0xbb5c6d97c346edc2!2sR.%20L%C3%A1zaro%20Antunes%20de%20Miranda%2C%20443%20-%20Don%20L%C3%A1zaro%2C%20Ces%C3%A1rio%20Lange%20-%20SP%2C%2018285-000!5e0!3m2!1spt-BR!2sbr!4v1679615314418!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        



    </div>
</div>

<?= $this->endSection() ?>
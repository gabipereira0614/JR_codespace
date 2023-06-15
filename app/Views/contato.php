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
                <br><br>
                <p>Contato apenas por via email, ou diretamente por via whatsapp, tratar diretamente com <b>Luiz</b>.</p>
                <br><br>
                <p>Email da empresa: jr.construcoes@gmail.com</p>
                <p>Telefone: 4002-8922</p>
                <p>Instagram: @jr_construcoes_cl</p>
            </div>
            <form action="<?php echo url_to('contato.store')?>" method="post">
                <div class="informacoes-contato">
                    <br><input type="text" name="name" id="name" class="name campo-digitar" placeholder="Seu Nome"><br>
                    <input type="email" name="email" id="email" class="email campo-digitar" placeholder="Seu E-mail"><br><br>
                    <label for="mensagem">Mensagem</label><br>
                    <textarea name="message" class="message" placeholder="Sua mensagem..." id="txtArea" cols="30" rows="5"></textarea><br>
                    <button type="submit" name="send" value="Enviar Mensagem" id="submit" class="button" role="button">Enviar</button>
                </div>
            </form>

        </div>
    </div> 
        <div class="inferior-contato">
            <div class="text-inferior">Onde Nos Encontrar?</div>
            <div class="centralizar-contato">
                <div class="text-local">Cidade: Cesario,<br>
                    Bairro: Dom Lázaro, <br>
                    Rua: Lázaro Antunes de Miranda, <br>
                    Nº: 443, <br>
                    CEP: 18285-000
                </div>
                <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229.14421757623634!2d-47.96154184720041!3d-23.23189543468878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c67a534d5ae9f7%3A0xbb5c6d97c346edc2!2sR.%20L%C3%A1zaro%20Antunes%20de%20Miranda%2C%20443%20-%20Don%20L%C3%A1zaro%2C%20Ces%C3%A1rio%20Lange%20-%20SP%2C%2018285-000!5e0!3m2!1spt-BR!2sbr!4v1679615314418!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </div>
</div>

<?= $this->endSection() ?>
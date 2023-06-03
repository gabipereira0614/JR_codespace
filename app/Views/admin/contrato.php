<?= $this->extend('template') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="./styles/admin/contrato.css">
<link rel="stylesheet" href="./styles/template.css">
<?= $this->endSection() ?>
<?= $this->section('conteudo') ?>
<style>
@media print{
    .gerarpdf,footer{
        display:none
    }
    .contrato{
        border-top: 1px solid black;
    }
}

</style>



<fieldset>

    <div class="formulario-contrato">

        <h2>Contrato de Empreitada</h2><br>

        <span>Este contrato é celebrado entre as partes a seguir:</span><br>

        <div class="dados-contratante">
            <input type="nome-contratante" class="inputs" placeholder="nome contratante" name="nome-contratante" id="nome-contratante"><br>
            <p>Endereço:</p>
            <input type="endereco-contratante" class="inputs" placeholder="endereço contratante" name="endereco-contratante" id="endereco-contratante"><br>
            <p>Cidade:</p>
            <input type="cidade-contratante" class="inputs" placeholder="Cidade contratante" name="cidade-contratante" id="cidade-contratante"><br>
            <p>Estado:
            <p>
                <input type="estado-contratante" class="inputs" placeholder="estado contratante" name="estado-contratante" id="estado-contratante"><br>
            <p>CEP:
            <p>
                <input type="CEP-contratante" class="inputs" placeholder="CEP contratante" name="CEP-contratante" id="CEP-contratante"><br>

            <p>Doravante denominado "Contratante " e
            <p>
        </div>

        

        <div class="dados-contratado">
            <input type="nome-contratado" class="inputs" placeholder="nome contratado" name="nome-contratado"><br>
            <p>Endereço:</p>
            <input type="text" class="inputs" placeholder="endereço contratado" name="endereco-contratado"><br>
            <p>Cidade:</p>
            <input type="text" class="inputs" placeholder="Cidade contratado" name="cidade-contratado"><br>
            <p>Estado:</p>
            <input type="text" class="inputs" placeholder="estado contratado" name="estado-contratado"><br>
            <p>CEP:</p>
            <input type="text" class="inputs" placeholder="CEP contratado" name="CEP-contratado"><br>

            <p>doravante denominado "Contratado"</p><br>
        </div>

        <h2> Descrição do Projeto</h2><br>

        1.1 O Contratante deseja contratar o Contratado para realizar serviços de construção conforme descrito abaixo:<br>
        <textarea type="text" class="inputs" placeholder="Descrição do Serviço" name="descricao"></textarea><br>

        <h3> Condições Financeiras</h2><br>

            O valor total acordado para a realização dos serviços de construção é de
            <textarea type="number" class="inputs" placeholder="Valor Pagamento" name="valor"></textarea>.<br>

            <h3> Forma de Pagamento </h3><br>
            <textarea type="text" class="inputs" placeholder="Descrição de como sera o pagamento" name="pagamento"></textarea><br>

            <h3>Prazo de Execução</h3><br>

            O Contratado se compromete a concluir os serviços de construção dentro do prazo estabelecido de
            <textarea type="text" class="inputs" placeholder="Prazo de Execução" name="prazo"></textarea>.<br>

            Em caso de violação significativa de qualquer uma das partes, o contrato poderá ser rescindido mediante aviso
            prévio por escrito, fornecendo uma oportunidade razoável para a parte infratora corrigir a violação.


            <div class="assinaturas">
                <div class="contrato">Assinatura Contratado</div>
                <div class="contrato">Assinatura Contratante</div>
            </div>


    </div>

</fieldset>

<center><button  class="gerarpdf " onclick="window.print()">gerar pdf</button></center>


<?= $this->endSection() ?>
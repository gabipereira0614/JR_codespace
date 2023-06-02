<?= $this->extend('template') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="./styles/admin/contrato.css">
<link rel="stylesheet" href="./styles/template.css">
<?= $this->endSection() ?>
<?= $this->section('conteudo') ?>



<fieldset>
    
    <div class="formulario-contrato">

    
<h3>Este contrato de construção  é celebrado entre as partes a seguir:</h3><br>
    <input type="nome-contratante" class="inputs" placeholder="nome contratante" name="nome-contratante" id="nome-contratante"><br>
<p>Endereço:</p> 
    <input type="endereco-contratante" class="inputs" placeholder="endereço contratante" name="endereco-contratante" id="endereco-contratante"><br>
<p>Cidade:</p> 
    <input type="cidade-contratante" class="inputs" placeholder="Cidade contratante" name="cidade-contratante" id="cidade-contratante"><br>
<p>Estado:<p> 
    <input type="estado-contratante" class="inputs" placeholder="estado contratante" name="estado-contratante" id="estado-contratante"><br>
<p>CEP:<p>
    <input type="CEP-contratante" class="inputs" placeholder="CEP contratante" name="CEP-contratante" id="CEP-contratante"><br>

<p>doravante denominado "Contratante"<p><br>

<p>e</p> <br>

    <input type="nome-contratado" class="inputs" placeholder="nome contratado" name="nome-contratado"><br>
<p>Endereço:</p> 
    <input type="text" class="inputs" placeholder="endereço contratado" name="endereco-contratado"><br>
<p>Cidade:</p>
    <input type="text" class="inputs" placeholder="Cidade contratado" name="cidade-contratado"><br>
<p>Estado:</p> 
    <input type="text" class="inputs" placeholder="estado contratado" name="estado-contratado"><br>
CEP:
    <input type="text" class="inputs" placeholder="CEP contratado" name="CEP-contratado"><br>

doravante denominado "Contratado"<br>

<span> Descrição do Projeto</span><br>

1.1 O Contratante deseja contratar o Contratado para realizar serviços de construção conforme descrito abaixo:<br>
<textarea type="text" class="inputs" placeholder="Descrição do Serviço" name="descricao"></textarea><br>

<span> Condições Financeiras</span><br>

 O valor total acordado para a realização dos serviços de construção é de  
<input type="number" class="inputs" placeholder="Valor Pagamento" name="valor">.<br>

<span> O pagamento será feito da seguinte forma:</span><br>
    <input type="text" class="inputs" placeholder="Descrição de como sera o pagamento" name="pagamento"><br>

 <span>Prazo de Execução</span><br>

 O Contratado se compromete a concluir os serviços de construção dentro do prazo estabelecido de 
  <input type="text" class="inputs" placeholder="Prazo de Execução" name="prazo">.<br>

   Em caso de violação significativa de qualquer uma das partes, o contrato poderá ser rescindido mediante aviso 
  prévio por escrito, fornecendo uma oportunidade razoável para a parte infratora corrigir a violação.


  <div class="assinaturas">
    <div class="contratado"></div>
    <div class="contratante"></div>
  </div>


    </div>
    
</fieldset>


<?= $this->endSection() ?>
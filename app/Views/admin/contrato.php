<?= $this->extend('template') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="./styles/admin/contrato.css">
<link rel="stylesheet" href="./styles/template.css">
<?= $this->endSection() ?>
<?= $this->section('conteudo') ?>



<fieldset>
    
    <div class="formulario-contrato">
    
Este contrato de construção ("Contrato") é celebrado entre as partes a seguir:

[Nome do Contratante]
Endereço: [Endereço do Contratante]
Cidade: [Cidade do Contratante]
Estado: [Estado do Contratante]
CEP: [CEP do Contratante]

doravante denominado "Contratante"

e

[Nome do Contratado]
Endereço: [Endereço do Contratado]
Cidade: [Cidade do Contratado]
Estado: [Estado do Contratado]
CEP: [CEP do Contratado]

doravante denominado "Contratado"



    </div>
    
</fieldset>


<?= $this->endSection() ?>
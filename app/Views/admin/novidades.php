<?= $this->extend('templates') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="../styles/admin/templates.css">
<?= $this->endSection() ?>



<?= $this->section('conteudo') ?>


<?php
$idnovidade = '';
$texto = '';
$imagem = '';

if (isset($novidades)) {
    $idnovidade =  $novidades["idnovidade"];
    $texto = $novidades["texto"];
    $imagem = $novidades["imagem"];
}

?>

<style>
    .btn-warning {
        --bs-btn-bg: #F25D07 !important;
        --bs-btn-hover-bg: #F25D07 !important;
        --bs-btn-border-color: #F25D07 !important;
        --bs-btn-hover-border-color: #F25D07
    }

    #img-preview {
        width: 400px;
        height: 300px;
        border-radius: 20px;
    }

    .conteudo {
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 35px 0 125px 0;
        gap: 3rem;
        text-align: center;
        align-items: center;
    }

    .conteudo-novidade {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 3rem;
    }

    .conteiner-texto {
        text-indent: 30px;
        width: 500px;
        text-align: justify;
        font-family: 'Lora', 'Arial';
        font-size: large;
        max-width: 500px;
    }
</style>


<div class="container">
    <?= form_open_multipart(base_url("/admin/novidades/salvar")) ?>
    <div class="mb-3">
        <label for="idnovidade" class="form-label label-titulo">Código Poduto</label>
        <input type="text" class="form-control" id="idnovidade" name="idnovidade" value="<?= $idnovidade ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="nome" class="form-label label-titulo">Campo de Texto da novidade:</label>
        <textarea class="form-control" id="input-texto" rows="3" name="texto" value="oh ma gad"></textarea>
    </div>
    <div class="mb-3">
        <label for="imagem" class="form-label label-titulo">Selecione a Imagem</label>
        <input type="file" onchange="onLoad(event)" class="form-control" id="imagem" name="imagem" accept=".png, .jpg, .jpeg">
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Salvar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </div>
    <div class="conteudo">
        <div class="conteudo-novidade">
            <img id="img-preview" />
            <div class="conteiner-texto">
                <p id="text-preview"></p>
            </div>
        </div>
    </div>
    <?= form_close() ?>
</div>

<script>
    const textArea = document.getElementById('input-texto');
    const imgPreview = document.getElementById('img-preview');
    const textPreview = document.getElementById('text-preview');

    textArea.addEventListener('keyup', (event) => {
        console.log(event);
        textPreview.innerText = textArea.value;
    });

    var onLoad = (event) => {
        imgPreview.src = URL.createObjectURL(event.target.files[0]);
        imgPreview.onload = function() {
            URL.revokeObjectURL(imgPreview.src)
        }
    };
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<?= $this->endSection() ?>
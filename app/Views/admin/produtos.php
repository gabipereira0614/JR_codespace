<?php
$id_produto = '';
$nome_produto = '';


if(isset($produto)){
    $id_produto =  $produto["id_produto"];
    $nome_produto = $produto["nome_produto"];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <main class="container">
    <?php if (session()->has("tipo")) : ?>
    <div class="alert alert-<?= session("tipo") ?> mt-2" role="alert">
        <?= session("mensagem") ?>
    </div>
<?php endif; ?>
        <?= form_open_multipart(base_url("admin/produto/salvar"))?>
        <div class="mb-3">
            <label for="idmarca" class="form-label">Código Poduto</label>
            <input type="text" class="form-control" id="$id_produto" name="$id_produto" value="<?= $id_produto ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome produto:</label>
            <input type="text" class="form-control" id="nome_produto" name="nome_produto" value="<?= $nome_produto ?>">
        </div>  
        <div class="mb-3">
            <label for="nome" class="form-label">Preco produto</label>
            <input type="text" class="form-control" id="nome_produto" name="nome_produto" value="<?= $nome_produto ?>">
        </div> 
        <div>
        <button class="btn btn-primary" type="submit">Submit form</button>
        </div>

        <?= form_close() ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Url-Imagem</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto) : ?>
                    <tr>
                        <th scope="row"><?= $produto["id_produto"] ?></th>
                        <td><?= $produto["nome_produto"] ?></td>
                        <td><?= $produto["preco"] ?></td>
                        <td>EXCLUIR</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</body>

</html>
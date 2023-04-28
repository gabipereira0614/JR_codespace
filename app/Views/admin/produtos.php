<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <main class="container-produto">
        <h1>gerenciar produtos</h1>
        <?= form_open(base_url("/admin/Produto/cadastrar")) ?>
        <div class="mb-3">
            <label for="idproduto" class="form-label">Código do produto</label>
            <input type="text" class="form-control" id="idproduto" name="idproduto" readonly>
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do produto</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="text" class="form-control" id="preco" name="preco">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
        <?= form_close() ?>
        <h1>Produtos cadastrados</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto) : ?>
                    <tr>
                        <th scope="row"><?= $produto["idproduto"] ?></th>
                        <td><?= $produto["nome"] ?></td>
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
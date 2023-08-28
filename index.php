<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Projeto Web</title>
</head>
<body class="text-bg-light">
    <div class="container text-center">
        <div class="row bg-primary">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-primary">
                    <div class="container-fluid">
                        <a class="navbar-brand link-light" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active link-light" aria-current="page" href="index.php">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-secondary" href="consultar.php">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row bg-white">
            <div class="col">
                &nbsp;
            </div>
        </div>
        <div class="row bg-white">
            <div class="col text-start">
                <form name="cadastro" method="POST" action="cadastrarClientes.php">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o seu nome completo">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone:</label>
                        <input type="number" class="form-control" id="telefone" name="telefone" placeholder="(XX) 00000-0000">
                    </div>
                    <div class="mb-3">
                        <label for="origem" class="form-label">Origem:</label>
                        <select id="origem" name="origem" class="form-select" aria-label="Default select example">
                            <option value="Celular" selected>Celular</option>
                            <option value="Fixo">Fixo</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Google Meu Negócio">Google Meu Negócio</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="dataContato" class="form-label">Data do Contato:</label>
                        <input type="date" class="form-control" id="dataContato" name="dataContato" placeholder="Digite o seu nome completo">
                    </div>
                    <div class="mb-3">
                        <label for="observacao" class="form-label">Observação:</label>
                        <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    require_once('conexao.php');
?>

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
                        <a class="navbar-brand link-light" href="index.php  ">SISTEMA WEB</a>
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
            <p class="fs-2">CONSULTA - CLIENTE</p>
            </div>
        </div>
        <div class="row bg-white">
            <div class="col text-start">
                <div class="table-responsive">
                    <table class="table">
                    <thead>
                        <tr class="headerTable">
                            <th scope="col titleTable">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Origem</th>
                            <th scope="col">Data de Contato</th>
                            <th scope="col">Observação</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM clientes";
                            $result = $pdo->query($sql);
                            $rows = $result->fetchAll();

                            for($i=0; $i < count($rows); $i++){
                                
                                //atribuição dos valores das variáveis com as linhas dos registros 
                                $id = $rows[$i]['id'];
                                $nome = $rows[$i]['Nome'];
                                $telefone = $rows[$i]['Telefone'];
                                $origem = $rows[$i]['Origem']; 
                                $dataContato = $rows[$i]['Data de Contato']; 
                                $observacao = $rows[$i]['Observação']; 
                                
                                //imprime a tabela na tela
                                echo '<tr>
                                            <td>'.$id.'</td>
                                            <td>'.$nome.'</td>
                                            <td>'.$telefone.'</td>
                                            <td>'.$origem.'</td>
                                            <td>'.$dataContato.'</td>
                                            <td>'.$observacao.'</td>
                                            <td>
                                            <button class="btn btn-primary"><a class="text-light" href="editar.php?id='.$id.'">Editar</a></button>
                                            <button class="btn btn-danger"><a class="text-light" href="excluir.php?id='.$id.'">Excluir</a></button>
                                        </td>
                                        </tr>';
                            }
                        ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
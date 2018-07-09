<?php
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $resumo = $_POST['resumo'];
    
$foto = "img/avatar-1.png";

echo "nome";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currículo </title>
    <link rel="stylesheet" href="css/modelo1.css">
</head>
<body>
    <main>
        <section class="lateral">
            <img src="<?= $dados['foto']; ?>" alt="Foto" class="foto">
            <h2>Nome</h2>
            <h1><?= printf($nome) ; ?></h1>
            <h3><?= $dados['cargo']; ?></h3>
        </section>
        <section class="principal">
            <h2>Resumo</h2>
            
            <p><?= $dados['resumo']; ?></p>
            
            <?php if($dados['formacoes']) { ?>
                <h2>Formação</h2>

                <ul class="lista-topicos">
                    <?php for($i = 0; $i < sizeof($dados['formacoes']['cursos']); $i++) { ?>
                        <li>
                            <div>
                                <h4><?= $dados['formacoes']['cursos'][$i] ?></h4>
                                <p><?= $dados['formacoes']['instituicoes'][$i] ?></p>
                                <p><?= $dados['formacoes']['conclusoes'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            
            <?php if($dados['experiencias']) { ?>
                <h2>Experiência</h2>

                <ul class="lista-topicos">
                    <?php for($i = 0; $i < sizeof($dados['experiencias']['cargos']); $i++) { ?>
                        <li>
                            <div>
                                <h4><?= $dados['experiencias']['cargos'][$i] ?></h4>
                                <p><?= $dados['experiencias']['empresas'][$i] ?></p>
                                <p><?= $dados['experiencias']['inicios'][$i] ?> a <?= $dados['experiencias']['fins'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>

            <h2>Contato</h2>

            <ul class="lista-topicos">
                <li>
                    <div>
                        <h4>Endereço:</h4>
                        <p><?= $dados['endereco']; ?></p>
                    </div>
                </li>
                <li>
                    <div>
                        <div>
                            <h4>Telefone:</h4>
                            <p><?= $dados['telefone']; ?></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div>
                            <h4>Email:</h4>
                            <p><?= $dados['email']; ?></p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </main>
    <script>
        window.print();
    </script>
</body>
</html>
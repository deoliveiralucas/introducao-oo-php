<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Unisal\Cliente\Fabrica\ClienteServicoFabrica;

// Verifica se existe uma requisição POST
// caso exista, pega os dados e grava

$dadosGravados = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dadosFormulario = $_POST;
    $clienteServico = ClienteServicoFabrica::create();
    $clienteServico->gravar($dadosFormulario);
    $dadosGravados = true;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cliente</title>
    <meta charset="utf-8">
</head>
<body>

<form action="view-cadastro.php" method="post">
    <fieldset>
        <legend>Cadastro de Cliente</legend>

        <!-- Mensagem exibida se o cliente for cadastrado -->
        <?php if ($dadosGravados): ?>
            <ul>
                <li>Cliente cadastrado com sucesso!</li>
            </ul>
        <?php endif ?>

        <input type="text" name="nome" placeholder="Nome" required />
        <input type="text" name="email" placeholder="Email" required />
        <input type="submit" name="btn-cadastro" value="Cadastrar" />
        <a href="view-consulta.php">Consultar</a>
    </fieldset>
</form>

</body>
</html>
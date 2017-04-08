<?php

require_once 'Cliente.php';
require_once 'ClienteRepositorioInterface.php';
require_once 'ClienteRepositorioTexto.php';
require_once 'ClienteRepositorioSessao.php';
require_once 'ClienteServico.php';
require_once 'ClienteServicoFabrica.php';

$clienteServico = ClienteServicoFabrica::create();
$clientes = $clienteServico->consultar();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cliente</title>
    <meta charset="utf-8">
</head>
<body>

<h1>Consultar Clientes</h1>
<a href="view-cadastro.php">Novo Cliente</a>

<hr />
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
    </tr>


    <?php foreach ($clientes as $cliente): ?>
    <tr>
        <td><?=$cliente->obterNome()?></td>
        <td><?=$cliente->obterEmail()?></td>
    </tr>
    <?php endforeach ?>
</table>

</body>
</html>
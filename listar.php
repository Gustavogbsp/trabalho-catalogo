<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Jogo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<?php
require "/conectar.php";
require "/jogo.php";
require "/repositoriojogo.php";

$valores = (new RepositorioJogo())->exibirTudo($banco);
?>
<table class="table is-striped">
    <tr>
        <td>Código</td>
        <td>Nome Jogo</td>
        <td>Valor Jogo</td>
        <td>Memoria Jogo</td>
        <td>Tipo Jogo</td>
    </tr>
    <?php foreach ($valores as $valor): ?>
        <tr>
            <td>
                <?= $valor['codigo'] ?>
            </td>
            <td>
                <?= $valor['nomejogo'] ?>
            </td>
            <td>
                <?= $valor['valorjogo'] ?>
            </td>
            <td>
                <?= $valor['memoriajogo'] ?>
            </td>
            <td>
                <?= $valor['tipojogo'] ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</html>

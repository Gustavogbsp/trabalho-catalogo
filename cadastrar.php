<?php
require "/conectar.php";
require "/jogo.php";
require "/repositoriojogo.php";

$codigo = $_POST['txtCodigo'];
$nomejogo =  $_POST['txtNomeJogo'];
$valorjogo = $_POST['txtValorJogo'];
$memoriajogo = $_POST['txtMemoriaJogo'];
$tipojogo = $_POST['txtTipoJogo'];

$NovoJogo = new Jogo($codigo,$nomejogo,$valorjogo,$memoriajogo,$tipojogo);

(new RepositorioJogo())->cadastrar($banco,$NovoJogo);

header("location: listar.php"); 

?>

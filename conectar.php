<?php

try{ 
    $banco = new PDO("sqlite:./banco.sqlite");
    echo "Banco conectado!";

}catch(PDOException $e){ 
    echo "Deu erro na conexão! ";
    echo $e->getMessage();
}

$tabela = "CREATE TABLE IF NOT EXISTS JOGO(
    codigo TEXT,
    nomejogo TEXT,
    valorjogo TEXT,
    memoriajogo TEXT,
    tipojogo TEXT,
    primary key (codigo))";

$banco->query($tabela);

?>

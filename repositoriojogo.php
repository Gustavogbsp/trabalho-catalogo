<?php

class RepositorioJogo
{
    public function cadastrar(PDO $banco, Jogo $jogo)
    {
        $sqlInsert = "INSERT INTO JOGO(codigo,nomejogo,valorjogo,memoriajogo,tipojogo) VALUES (:c,:n,:v,:m,:t)";

        $insert = $banco->prepare($sqlInsert);

        $codigo = $jogo->exibirCodigo();
        $nomejogo = $jogo->exibirNomeJogo();
        $valorjogo = $jogo->exibirValorJogo();
        $memoriajogo = $jogo->exibirMemoriaJogo();
        $tipojogo = $jogo->exibirTipoJogo();

        $insert->bindParam(":c", $codigo);
        $insert->bindParam(":n", $nomejogo);
        $insert->bindParam(":v", $valorjogo);
        $insert->bindParam(":m", $memoriajogo);
        $insert->bindParam(":t", $tipojogo);

        $insert->execute();
    }

    public function exibirTudo(PDO $banco){
        $sql = "SELECT * FROM JOGO";
        $dado = $banco->query($sql); 
      
        return $dado->fetchAll(PDO::FETCH_ASSOC); 
    }
}

?>

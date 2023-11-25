<?php

class Jogo{
    private string $Codigo;
    private string $NomeJogo;
    private string $ValorJogo;
    private string $MemoriaJogo;
    private string $TipoJogo;

    public function __construct(string $c,string $n,string $v, string $m, string $t){
        $this->definirCodigo($c);
        $this->definirNomeJogo($n);
        $this->definirValorJogo($v);
        $this->definirMemoriaJogo($m);
        $this->definirTipoJogo($t);
    }

    public function definirCodigo(string $c){
        $this->Codigo = $c;
    }
    public function definirNomeJogo(string $n){
        $this->NomeJogo = $n;
    }
    public function definirValorJogo(string $v){
        $this->ValorJogo = $v;
    }

    public function definirMemoriaJogo(string $m){
        $this->MemoriaJogo = $m;
    }

    public function definirTipoJogo(string $t){
        $this->TipoJogo = $t;
    }
    public function exibirCodigo(){
        return $this->Codigo;
    }
    public function exibirNomeJogo(){
        return $this->NomeJogo;
    }
    public function exibirValorJogo(){
        return $this->ValorJogo;
    }

    public function exibirMemoriaJogo(){
        return $this->MemoriaJogo;
    }

    public function exibirTipoJogo(){
        return $this->TipoJogo;
    }
}

?>

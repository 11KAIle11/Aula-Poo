<?php

class Tenis{
    public $NikeID;
    public $Tamanho;
    public $Cor;
    public $Cano;
    public $preço;
    public $quantidade;

        public function comprar(){
            $this -> quantidade = -- $quantidade ;
        }
        public function adicionaraocarrinho(){
        $this -> carrinho = ++ $carrinho ;
        }
}
class Chinelos{
    public $Modelos;
    public $Tamanho;
    public $Cor;
    public $material;
    public $preço;
    public $quantidade;
        public function comprar(){
        $this -> quantidade = -- $quantidade ;
    }
    public function adicionaraocarrinho(){
    $this -> carrinho = ++ $carrinho ;
    }
}
class Mochilas{
    public $Modelo;
    public $Tamanho;
    public $Cor;
    public $função;
    public $preço;
    public $quantidade;
        public function comprar(){
        $this -> quantidade = -- $quantidade ;
    }
    public function adicionaraocarrinho(){
    $this -> carrinho = ++ $carrinho ;
    }
}
class Decoração{
    public $Tipo;
    public $Tamanho;
    public $Cor;
    public $paradecorar;
    public $preço;
    public $quantidade;
        public function comprar(){
        $this -> quantidade = -- $quantidade ;
    }
    public function adicionaraocarrinho(){
    $this -> carrinho = ++ $carrinho ;
    }
}
class RoupaseAcessorios{
    public $Tipo;
    public $Tamanho;
    public $Cor;
    public $estilo;
    public $preço;
    public $quantidade;
        public function comprar(){
        $this -> quantidade = -- $quantidade ;
    }
    public function adicionaraocarrinho(){
    $this -> carrinho = ++ $carrinho ;
    }
}

?>

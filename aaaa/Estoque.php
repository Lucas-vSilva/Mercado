<?php
    class Estoque{
        private string $nomeProduto;
        private string $qnt;
        private float $precoProd;

        function __construct(string $nomeProduto, string $qnt, float $precoProd){
            $this->nomeProduto = $nomeProduto;
            $this->qnt = $qnt;
            $this->precoProd = $precoProd;
        }//fim do construtor

        public function __get(string $variavel)
        {
            return $this->$variavel;
        }//fim do get

        public function __set(string $nomeVar, string $preco1) : void
        {
            $this->nomeVar = $preco1;
        }//fim do set

        public function __toString()  : string
        {  
            return "<br>Nome do Produto: ".$this->nomeProduto."<br> Quantidade: ".$this->qnt."<br> Preço: ".$this->precoProd;
        }

    }//fim da class
?>
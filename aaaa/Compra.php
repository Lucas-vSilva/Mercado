<?php
    require_once('Estoque.php');
    class Compra{
        private string $nome;
        private string $cpf;
        private string $dataCompra;
        private Estoque $informacoes;
        private float $precoTotal;

        function __construct(string $nome, string $cpf, string $dataCompra, Estoque $informacoes, float $precoTotal){
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->dataCompra = $dataCompra;
            $this->informacoes = $informacoes;
            $this->precoTotal = $precoTotal;
        }//fim do construtor

        public function __get(string $nomeVar) : string
        {
            return $this->$nomeVar;
        }//fim do get

        public function __set(string $compraVar, string $preco) : void
        {
            $this->compraVar = $preco;
        }//fim do set



        public function __toString() : string
        {
            return "<br> Compra feito pelo(a): ".$this->nome."<br>No CPF: ".$this->cpf."<br> Data da Compra: ".$this->dataCompra."".$this->informacoes."<br> Com o preço gasto de: ".$this->precoTotal;
        }//fim do ToString
    }
    


?>
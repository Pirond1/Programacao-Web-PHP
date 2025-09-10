<?php
    class Produto {
        private string $nome;
        private float $preco;

        public function __construct(string $nome, float $preco){
            $this->nome = $nome;
            $this->preco = $preco;
        }

        public function salvar(){
            echo "Produto {$this->nome} Salvo com Sucesso!<br/>";
            echo "Preço: R$". number_format($this->preco,2,",","."). "<br/><br/>";
        }
    }
?>
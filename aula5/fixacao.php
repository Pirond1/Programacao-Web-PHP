<?php
    class Categoria {
        public int $id;
        public string $nome;

        public function __construct(int $id, string $nome){
            $this->id = $id;
            $this->nome = $nome;
        }

        public function exibir(){
            return $this->nome;
        }
    }

    class Produto{
        public int $id;
        public string $nome;
        public float $preco;
        public Categoria $categoria;

        public function __construct(int $id, string $nome, float $preco, Categoria $categoria){
            $this->id = $id;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->categoria = $categoria;
        }

        public function exibir(){
            return "Nome: ". $this->nome . " | Preço: R$". number_format($this->preco, 2, ',', '.'). " | Categoria: ". $this->categoria->exibir();
        }
    }

    $categoria1 = new Categoria(1, "Eletrônicos");
    $categoria2 = new Categoria(2, "Roupas");

    $produto1 = new Produto(1, "Computador", 5000.00, $categoria1);
    $produto2 = new Produto(2, "Notebook", 3000.00, $categoria1);
    $produto3 = new Produto(3, "Casaco", 500.00, $categoria2);

    echo "Lista de Produtos: </br></br>";
    echo $produto1->exibir()."</br>";
    echo $produto2->exibir()."</br>";
    echo $produto3->exibir()."</br>";
?>
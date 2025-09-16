<?php
    class Livro{
        public string $titulo;
        public string $autor;
        public float $preco;

        public function __construct(string $titulo, string $autor, float $preco) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->preco = $preco;
        }

        public function exibir(){
            return "Titulo: ". $this->titulo. " | Autor: ". $this->autor. " | Preço: R$". number_format($this->preco, 2, ",", ".");
        }
    }

    $livro1 = new Livro("Diário de Um Banana", "Jeff Kinney", 45);
    $livro2 = new Livro("A Revolução dos Bichos", "George Orwell", 19,99);

    echo "<h3>Lista de Livros: </h3>";
    echo $livro1->exibir()."<br/>";
    echo $livro2->exibir()."<br/>";
?>
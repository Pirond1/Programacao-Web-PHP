<?php
    class ProdutoModelo{
        private string $nome;
        private string $descricao;
        private float $preco;

        public function getNome(): string{
            return $this->nome;
        }

        public function setNome(string $nome): void{
            $this->nome = $nome;
        }

        public function getDescricao(): string{
            return $this->descricao;
        }

        public function setDescricao(string $descricao): void{
            $this->descricao = $descricao;
        }

        public function getPreco(): string{
            return $this->preco;
        }

        public function setPreco(string $preco): void{
            $this->preco = $preco;
        }
    }

    class Produtos{
        private array $produtos;

        public function adicionar(ProdutoModelo $produto): void{
            $this->produtos[] = $produto;
        }
        
        public function listar(): array{
            return $this->produtos;
        }

        public function exibir(ProdutoModelo $produto): string{
            return "Produto: {$produto->getNome()} | Preço: R$ {$produto->getPreco()} | Descrição: {$produto->getDescricao()}";
        }
    }

    //Inserindo
    $produtoModelo = new ProdutoModelo();
    $produtoModelo->setNome("Notebook");
    $produtoModelo->setDescricao("Notebook Gamer");
    $produtoModelo->setPreco(5000);
    
    $produto = new Produtos();
    $produto->adicionar($produtoModelo);

    $produtoModelo = new ProdutoModelo();
    $produtoModelo->setNome("Computador");
    $produtoModelo->setDescricao("Computador Lento");
    $produtoModelo->setPreco(1500);

    $produto->adicionar($produtoModelo);
    //Processo Simplificado
    //(new Produtos())->adicionar($produtoModelo);

    //Exibindo
    foreach($produto->listar() as $item){
        echo "{$produto->exibir($item)}<br/>";
    }
?>
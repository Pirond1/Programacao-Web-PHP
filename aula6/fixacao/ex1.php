<?php
    class Aluno {
        public string $nome;
        public float $nota1;
        public float $nota2;

        public function __construct(string $nome, float $nota1, float $nota2){
            $this->nome = $nome;
            $this->nota1 = $nota1;
            $this->nota2 = $nota2;
        }

        public function calcularMedia(){
            $media = ($this->nota1 + $this->nota2) / 2;
            return $media;
        }
    }

    $aluno1 = new Aluno("João", 9, 8);
    echo "O Aluno ". $aluno1->nome. " tem média ". number_format($aluno1->calcularMedia(), 1, '.', '');
?>
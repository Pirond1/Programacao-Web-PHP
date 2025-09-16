<?php
    class Professor{
        private string $nome;
        private string $disciplina;

        public function __construct(string $nome, string $disciplina){
            $this->nome = $nome;
            $this->disciplina = $disciplina;
        }

        public function getNome(){
            return $this->nome;
        }
    
        public function getDisciplina(){
            return $this->disciplina;
        }
    }

    $professor1 = new Professor("Adriel", "Programação WEB PHP");
    $professor2 = new Professor("Alisson", "Inteligência Competitiva em Negócios");

    echo "<h3> Lista de Professores: </h3>";
    echo "Professor: ". $professor1->getNome(). " | Disciplina: ". $professor1->getDisciplina(). "<br/>";
    echo "Professor: ". $professor2->getNome(). " | Disciplina: ". $professor2->getDisciplina(). "<br/>";
?>
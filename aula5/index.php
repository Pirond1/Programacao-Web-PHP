<?php
    //Classe Simples

    class Carro {
        //Propriedades
        public string $marca;
        public string $modelo;

        //Construtor
        public function __construct(string $marca,string $modelo){
            //Setando Valores
            $this->marca = $marca;
            $this->modelo = $modelo;
        }

        //Metodo Simples
        public function exibir(){
            return "Carro: {$this->marca} - {$this->modelo}";
        }
    }

    //Chamar Classe
    $carro = new Carro("Fiat", "Pulse");

    //Chamar Metodo da Classe
    echo $carro->exibir(). "<br/><br/>";

    //Encapsulamento

    class ContaBancaria{
        //Propriedade Privada
        private $saldo = 0;
        
        //Metodo Sacar
        public function sacar(float $valor){
            $this->saldo -= $valor;
        }

        //Metodo Depositar
        public function depositar(float $valor){
            $this->saldo += $valor;
        }

        public function getSaldo(){
            return $this->saldo;
        }
    }

    $conta = new ContaBancaria();
    $conta->depositar(1000);
    $conta->sacar(100);
    echo "Saldo Atual: R$ {$conta->getSaldo()}<br/><br/>";

    //Polimorfismo (Sobrescreever Function) e Herança (Propriedades em Comum)
    //Classe Pai
    class Animal{
        //Metodo Herança
        public function quantidadePatas(){
            return 4;
        }

        //Metodo Polimorfismo
        public function comunicar(){
            return "Som Animal";
        }
    }

    //Classe Filha
    class Cachorro extends Animal {
        public function comunicar(){
            return "au-au";
        }
    }

    //Classe Filha
    class Gato extends Animal {
        public function comunicar(){
            return "miau";
        }
    }

    $cachorro = new Cachorro();
    $gato = new Gato();
    echo $cachorro->comunicar()."<br/>";
    echo $gato->comunicar()."<br/>";

    //Chamando Herança
    echo "O Cachorro tem {$cachorro->quantidadePatas()} patas";
?>
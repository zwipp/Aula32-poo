<?php

    class Pessoa{
        private $nome;
        private $idade;
        private $cor;
        private $sexo;

        public function __construct($pnome,$pidade,$pcor,$psexo){
            $this->nome = $pnome;
            $this->idade = $pidade;
            $this->cor = $pcor;
            $this->sexo = $psexo;
        }

        public function dormir(){
            echo $this->nome . " falou: " . "Estoy a dormir ZzZzZzZzZzZz<br>";
        }
        public function comer(){
            echo $this->nome . " falou: " . "Estoy a comer nhacnhacnhac<br>";
        }
        public function falar(){
            echo $this->nome . " falou: " . "Estoy a hablar:" . $texto . "<br>";
        }
    }

    $p1 = new Pessoa('Zwipp','19','branco','M');
    $p2 = new Pessoa('Ana','19','branco','F');
    $p1 -> dormir();
    $p2 -> dormir();

?>
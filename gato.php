<?php

    class Gato{

        private $nome;
        private $humor;
        private $fome;
        private $energia;

        public function __construct($pnome,$phumor,$pfome,$penergia){
            $this->nome= $pnome;
            $this->humor = $phumor;
            $this->fome = $pfome;
            $this->energia = $penergia;
        }

        public function brincar(){
            echo $this->nome . " Estas a brincar com una bolita kakakaka <br>";
            $this->humor++;
            $this->fome+=4;
            $this->energia--;
        }
        public function dormir(){
            echo $this->nome . " Estas a dormir ZzZzZzZzZzZzZzZz";
            $this->humor+=3;
            $this->fome+=2;
            $this->energia=10;
        }
        public function comer(){
            echo $this->nome . " Estas a comer nhacnhacnhacnhac";
            $this->humor=10;
            $this->fome=10;
            $this->energia=5;
        }
        public function mostrarEstado(){
            echo "<br>----------------------------------- <br>";
            echo "Nome: " . $this->nome . "<br>";
            echo "Humor: " . $this->humor . "<br>";
            echo "Fome: " . $this->fome . "<br>";
            echo "Energia: " . $this->energia . "<br>";
            echo "-----------------------------------<br>";
        }

        public function evolucao(){
            echo $this->nome . " Estas EVOLUIRRRRRRRRRRRRRRRRRRRRRRRRRRRR<br>";
            echo $this->nome . " HUOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO<br>";
            $this->humor=10000000;
            $this->fome=10000000;
            $this->energia=10000000;

        }

    }

    $g1 = new Gato("Malaquias",5,5,5);
    $g1->mostrarEstado();
    $g1->brincar();
    $g1->mostrarEstado();
    $g1->dormir();
    $g1->mostrarEstado();
    $g1->comer();
    $g1->mostrarEstado();
    $g1->evolucao();
    $g1->mostrarEstado();
    

?>
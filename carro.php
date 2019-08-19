<?php

    class Carro{
        private $placa;
        private $combustivel;
        private $rendimento;
        private $capacidade;        

        public function __construct($pplaca,$pcombustivel,$prendimento,$pcapacidade){
            $this->placa = $pplaca;
            $this->combustivel = $pcombustivel;
            $this->rendimento = $prendimento;
            $this->capacidade = $pcapacidade;
        }

        public function andar($km){
            echo "El carrito com la plaquita " . $this->placa .  " esta andando " . $km . "km VRUMMMMMMMMMMMMMMMMMM<br>";
            $this->combustivel = $this->combustivel - ($km / $this->rendimento);
        }
        public function abastecer($litros){
           echo "El carrito com la plaquita " . $this->placa . "esta sendo abastecido com " . $litros ."L";
           $this->combustivel = $this->combustivel + $litros;
        }
        public function calcularAutonomia(){
            echo "La autonomia del carrito eres: " . $this->combustivel * $this->rendimento;
        }
        public function mostrarEstado(){
            echo "<br>----------------------------------- <br>";
            echo "Placa: " . $this->placa . "<br>";
            echo "combustivel: " . $this->combustivel . "<br>";
            echo "rendimento: " . $this->rendimento . "<br>";
            echo "capacidade: " . $this->capacidade . "<br>";
            echo "-----------------------------------<br>";
        }
    }

    $c = new Carro("dvj-2145",50,10,100);
    $c-> mostrarEstado();
    $c->andar(50);
    $c-> mostrarEstado();
    $c->abastecer(50);
    $c-> mostrarEstado();
    $c-> calcularAutonomia();
    $c-> mostrarEstado();
?>
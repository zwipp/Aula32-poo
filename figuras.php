<?php

    interface iFiguras{  // adiciona o 'i' na frente só pra separar

        public function area();
        public function perimetro();

    }

    class Quadrado implements iFiguras { //implements é para implementar na class a interface iFiguras


        private $lado;

        public function __construct($lado){
            $this->lado = $lado;
        }

        public function area(){
            return $this->lado * $this->lado;
        }

        public function perimetro(){
            return 4 * $this->lado;
        }

    }

    class Circuferencia implements iFiguras {

        private $raio;

        public function __construct($raio){
            $this->raio = $raio;
        }

        public function area(){
            return pi() * $this->raio**2;
        }

        public function perimetro(){
            return 2 * pi() * $this->raio;
        }
    }

    $q = new Quadrado (2);
    echo 'Area: ' . $q->area() . '<br>';
    echo 'Perimetro ' . $q->perimetro() . '<br>';

    $c = new Circuferencia (3);
    echo 'Area: ' . $c->area() . '<br>';
    echo 'Perimetro ' . $c->perimetro() . '<br>';

    function somaDeAreas(iFiguras $a, iFiguras $b){
        return $a->area() + $b->area();
    }

    echo 'Soma das areas das figuras' . somaDeAreas($c, $q);

?>
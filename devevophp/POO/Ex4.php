<?php

    interface FormaGeometrica{
        public function calcularArea();
        public function calcularPerimetro();
    }

    class Retangulo implements FormaGeometrica{
        private $tamalt;
        private $tamlarg;
        public function __construct($alt,$larg){
            $this->tamalt=$alt;
            $this->tamlarg=$larg;
            echo("\nCriado Retangulo: alt:$alt larg:$larg\n");
        }
        public function calcularArea(){
            $alt=$this->tamalt;
            $larg=$this->tamlarg;
            return $alt*$larg;
        }
        public function calcularPerimetro(){
            $alt=$this->tamalt;
            $larg=$this->tamlarg;
            return 2*($alt+$alt);
        }

        public function setInfo($inf,$txt){
            $this->$inf=$txt;
        }

        public function getInfo($txtvar){
            return $this->$txtvar;
        }
    }

    class Circulo implements FormaGeometrica{
        private $raio;

        public function __construct($r){
            $this->raio=$r;
            echo("\nCriado Circulo: raio:$r\n");
        }

        public function calcularArea(){
            $val=$this->raio;
            return pi()*pow($val, 2);
        }
        public function calcularPerimetro(){
            $val=$this->raio;
            return 2*pi()*$val;
        }

        public function setInfo($inf,$txt){
            $this->$inf=$txt;
        }

        public function getInfo($txtvar){
            return $this->$txtvar;
        }
    }

    $circulos=array();
    $circulos[0]=new Circulo(5);
    echo("Area :".$circulos[0]->calcularArea()."\n");
    $circulos[0]->setInfo("raio", 10);
    echo("Area :".$circulos[0]->calcularArea()."\n");
    echo("Perimetro :".$circulos[0]->calcularPerimetro()."\n");
    $circulos[0]->setInfo("raio", 20);
    echo("Perimetro :".$circulos[0]->calcularPerimetro()."\n");


    echo("---------------------------------");
    $retangulos=array();
    $retangulos[0]=new Retangulo(5,10);
    echo("Area :".$retangulos[0]->calcularArea()."\n");
    $retangulos[0]->setInfo("tamalt", 10);
    $retangulos[0]->setInfo("tamlarg", 20);
    echo("Area :".$retangulos[0]->calcularArea()."\n");
    echo("Perimetro :".$retangulos[0]->calcularPerimetro()."\n");
    $retangulos[0]->setInfo("tamalt", 20);
    $retangulos[0]->setInfo("tamlarg", 40);
    echo("Perimetro :".$retangulos[0]->calcularPerimetro()."\n");
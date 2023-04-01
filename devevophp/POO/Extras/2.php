<?php

    class Colaborador{
        private $nome;
        private $sobrenome;
        private $salario;

        public function __construct($nom,$sobre,$sal){
            $this->nome=$nom;
            $this->sobrenome=$sobre;
            $this->salario=$sal;
        }

        public function setInfo($inf,$txt){
            $this->$inf=$txt;
        }

        public function getInfo($txtvar){
            return $this->$txtvar;
        }

        public function getAnualidade(){
            return $this->salario*12;
        }
        public function reajuste($percent){
            $salarioatual=$this->salario;
            $aumento=$this->salario*($percent/100);
            $salarionovo=$salarioatual+$aumento;
            $this->salario=$salarionovo;

            return "\nSalario anterior: $salarioatual\nValor aumento: $aumento\nSalario novo: $salarionovo \n";
        }
    }

    $colabora=new Colaborador("Jean", "Perondi", 3000);
    echo("Salario definido: ".$colabora->getInfo("salario")."\n");
    echo("Anualidade ".$colabora->getAnualidade()."\n");
    echo($colabora->reajuste(50));
    echo($colabora->reajuste(-20));
    echo($colabora->reajuste(-30));
    echo($colabora->reajuste(50));

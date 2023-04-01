<?php
    class Carro{
        private $marca;
        private $modelo;
        private $ano;
        private $velocidadeAtual;

        public function __construct($marca, $modelo, $ano, $vel){
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->ano=$ano;
            $this->velocidadeAtual=$vel;
        }

        public function alteraVel($val){
            if($val!=0){
                $velatual=$this->velocidadeAtual;
                $velatual+=$val;
                if($velatual >= 0){
                    $this->velocidadeAtual+=$val;
                    if($val>0){
                        echo("Acelerou +$val\n");
                    }else{
                        echo("Reduziu $val\n");
                    }
                }else{
                    $this->velocidadeAtual=0;
                    echo("Reduziu $val\n");
                    echo("Ops! reduziu demais, velocidade zerou\n");    
                }
            }else{
                echo("Ops! velocidade alterada é nula");
            }
        }

        public function setInfo($inf,$txt){
            $this->$inf=$txt;
        }

        public function getInfo($txtvar){
            return $this->$txtvar;
        }
    }

    $carros=array();
    $carros[0]=new Carro("Volks", "Fusca", 1994, 0);

    $carros[0]->alteraVel(50);    
    echo("Velocidade atual:".$carros[0]->getInfo("velocidadeAtual")."\n");

    $carros[0]->alteraVel(60);
    echo("Velocidade atual:".$carros[0]->getInfo("velocidadeAtual")."\n");

    $carros[0]->alteraVel(-90);
    echo("Velocidade atual:".$carros[0]->getInfo("velocidadeAtual")."\n");

    $carros[0]->alteraVel(-50);
    echo("Velocidade atual:".$carros[0]->getInfo("velocidadeAtual")."\n");
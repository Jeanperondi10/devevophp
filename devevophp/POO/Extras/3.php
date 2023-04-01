<?php

    abstract class Funcionario{
        protected $nome;
        protected $rg;
        protected $salBase;
        protected $valAcumulado;

        public function __construct($nome, $rg, $salbase){
            $this->nome=$nome;
            $this->rg=$rg;
            $this->salbase=$salbase;
            $this->valAcumulado=0;
        }

        public function addAcumula($val){
            if($val>0){
                $this->valAcumulado+=$val;
                $acumulado=$this->valAcumulado;
                echo("Adicionado:$val Acumulado:$acumulado\n");
            }else{
                echo("Ops! valor menor ou igual a zero\n");
            }
        }

    }

    class Vendedor extends Funcionario{
        public function recebeSalario(){
            $comissao=$this->valAcumulado*0.05;
            $this->valAcumulado=0;
            return ($this->salbase+$comissao);
        }
    }
    class Administrador extends Funcionario{
        public function recebeSalario(){
            $comissao=($this->salBase*0.01)*$this->valAcumulado;
            $this->valAcumulado=0;
            return ($this->salbase+$comissao);
        }
    }

    $funcionarios=array();
    $funcionarios[0]=new Vendedor("Marlon", "123.213.123-10", 1500);
    $funcionarios[1]=new Vendedor("Francisco", "13.23.12-10", 2000);
    $funcionarios[0]->addAcumula(1000);
    $funcionarios[0]->addAcumula(500);
    echo("\nSalario: ".$funcionarios[0]->recebeSalario()."\n");

    $funcionarios[1]->addAcumula(3);
    $funcionarios[1]->addAcumula(100);
    echo("\nSalario: ".$funcionarios[1]->recebeSalario()."\n");
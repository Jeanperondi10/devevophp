<?php

    class Pessoa{
        public $nome;
        public $idade;
        public $sexo;

        public function __construct($name,$anos,$sex){
            $this->nome=$name;
            $this->idade=$anos;
            $this->sexo=$sex;
        }

        public function setInfo($inf,$txt){
            $this->$inf=$txt;
        }

        public function getInfo($txtvar){
            return $this->$txtvar;
        }

        public function extratoPessoa($sit){
            echo("--------- ".$sit." ---------");
            echo("\n-Nome: ".$this->getInfo("nome"));
            echo("\n-Idade: ".$this->getInfo("idade"));
            echo("\n-Genero: ".$this->getInfo("sexo"));
            echo("\n------------------------\n");
        }
    }
    
    class Funcionario extends Pessoa {
        private $empregador;
        private $salario;
        private $regime;
        private $cargo;

        public function __construct($dados,$empregador, $salario, $regime, $cargo){
            parent::__construct($dados[0], $dados[1], $dados[2]);
            $this->empregador=$empregador;
            $this->salario=$salario;
            $this->regime=$regime;
            $this->cargo=$cargo;
        }
        public function imprimefunc(){
            var_dump($this);
        }
    }

    $funcionario=new Funcionario(["Jean", 20, "M"],"IXCsoft", 2000, "CLT", "Inovacao");
    
    $funcionario->imprimefunc();



 
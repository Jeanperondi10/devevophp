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

        public function extratoPessoa($ind){
            echo("------- PESSOA ".$ind." -------");
            echo("\n-Nome: ".$this->getInfo("nome"));
            echo("\n-Idade: ".$this->getInfo("idade"));
            echo("\n-Genero: ".$this->getInfo("sexo"));
            echo("\n------------------------\n");
        }
    }

    function extratoPessoas($arraypes){
        foreach($arraypes as $ind=>$pessoa){
            $pessoa->extratoPessoa($ind);
        }
    }

    $pessoas=array();
    $pessoas[0]=new Pessoa("Jean", 21, "Macho");
    $pessoas[1]=new Pessoa("Gustavo", 23, "Macho");
    
    extratoPessoas($pessoas);

    $pessoas[0]->setInfo("idade", 20);

    $pessoas[0]->extratoPessoa(0);
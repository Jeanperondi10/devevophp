<?php
    abstract class Animal{
        protected $nome;
        public function __construct($nome) {
            $this->nome = $nome;
        }
        abstract public function emitirSom();
    }

    class Gato extends Animal{
        public function emitirSom(){
            echo("Miau! miou o ".$this->nome."\n");
        }
    }

    class Cachorro extends Animal{
        public function emitirSom(){
            echo("Au au! latiu o ".$this->nome."\n");
        }
    }

    $animais=array();
    $animais[0]=new Gato("Godofredo");
    $animais[1]=new Cachorro("Rex");

    foreach($animais as $animal){
        $animal->emitirSom();
    }
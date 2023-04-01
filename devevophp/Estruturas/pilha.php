<?php
    class Pilha{
        private $elements;

        public function __construct(){
            $this->elements=array();
        }
        public function remove(){
            array_pop($this->elements);
        }
        public function adiciona($valor){
            array_push($this->elements, $valor);
        }
        public function getopo(){
            return end($this->elements);
        }
        public function getudo(){
            return array_reverse($this->elements);;
        }
    }

    $pilha=new Pilha();
    $pilha->adiciona("Um valor");
    $pilha->adiciona("Um novo valor");
    echo("Item do topo:".$pilha->getopo());
    $lista=$pilha->getudo();

    echo("\n\nPilha topo\n");
    foreach($lista as $item){
        echo("$item\n");
    }
    echo("Pilha base\n");
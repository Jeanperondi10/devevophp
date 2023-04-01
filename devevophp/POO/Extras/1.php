<?php

    class Pedido{
        private $numero;
        private $descricao;
        private $quantidade;
        private $precounit;

        public function __construct($numero, $descricao, $quantidade, $precounit){
            $this->numero=$numero;
            $this->descricao=$descricao;
            $this->quantidade=$quantidade;
            $this->precounit=$precounit;
        }

        public function setInfo($inf,$txt){
            $this->$inf=$txt;
        }

        public function getInfo($txtvar){
            return $this->$txtvar;
        }

        public function calcFatura(){
            $preco=$this->precounit;
            $qnt=$this->quantidade;
            return $preco*$qnt;
        }
    }

    $pedidos=array();
    $pedidos[0]=new Pedido(0, "Tinta", 5, 40);

    $pedidos[1]=new Pedido(1, "Cabeçote", 7, 30);
    $pedidos[2]=new Pedido(2, "Rebinboca da parafuseta", 2, 70);

    $somatotal=0;
    echo("LISTA DE PEDIDOS\n");
    foreach($pedidos as $pedido){
        $valindividual=$pedido->calcFatura();
        $somatotal+=$valindividual;
        echo($pedido->getInfo("descricao")." | R$ $valindividual\n");
    }
    echo("Totalizando pedidos: $somatotal\n");
    
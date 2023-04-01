<?php

    /*
        Crie uma classe chamada Pedido que possa ser utilizado por uma loja de
    suprimentos de impressoras para representar uma fatura de um item vendido
    na loja. Uma fatura deve incluir as seguintes informações como atributos:

    - Número, descrição, quantidade do item e preço unitário de cada item;
    - Receba os dados da fatura no Construtor da classe, e passe-o para o
    devido atributo.
    - Forneça um método set e um método get para cada variável de instância.
    - Forneça um método que calcula o valor da fatura (isso é, multiplicar a
    quantidade pelo preço por item) e depois retorna o valor.
    */

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
    
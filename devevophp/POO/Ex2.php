<?php

    class ContaBancaria{
        private $saldo;
        private $trans;

        public function __construct($val){
            $this->saldo=$val;
            $this->trans=array();
            echo("Conta aberta com val.saldo: $val\n");
        }
        
        public function deposita($val){
            if($val>0){
                $valantes=$this->saldo;
                $this->saldo+=$val;
                $valdepois=$this->saldo;
                $this->registrans("DEPOSITO", $val, $valantes, $valdepois);
                echo("\nSucesso! o deposito foi realizado\nVal. Deposito:$val");
            }else{
                echo("\nOps! impossivel depositar valor negativo\nVal. Deposito:$val");
            }
        }   
        
        public function saque($val){
            $valantes=$this->saldo;
            if($val<$valantes){
                $this->saldo-=$val;
                $valdepois=$this->saldo;
                $this->registrans("SAQUE", $val, $valantes, $valdepois);
                echo("\nSucesso! o saque foi realizado\nVal. Saque:$val  |  Val. Saldo: $valdepois");
            }else{
                echo("\nOps! impossivel sacar,você não tem saldo suficiente\nVal. Saque:$val  |  Val. Saldo: $valdepois");
            }
        }

        public function registrans($sit, $val, $valantes,$valdepois){
            array_push($this->trans, "$sit: $val Saldo: $valantes -> $valdepois");
        }
        public function setInfo($inf,$txt){
            $this->$inf=$txt;
        }

        public function getInfo($txtvar){
            return $this->$txtvar;
        }

        public function extrato(){
            $trasferencias=$this->trans;
            echo("\n------- EXTRATO CONTA -------");
            foreach($trasferencias as $transferencia){
                echo("\n$transferencia");
            }
            echo("\n-Saldo Final: ".$this->getInfo("saldo"));
            echo("\n-----------------------------\n");
        }
    }

    $contas=array();
    $contas[0]=new ContaBancaria(100);

    echo("\nVal. saldo".$contas[0]->getInfo("saldo")."\n");

    $contas[0]->deposita(50);
    
    echo("\nVal. saldo".$contas[0]->getInfo("saldo")."\n");

    $contas[0]->extrato();

    $contas[0]->saque(50);
    $contas[0]->deposita(250);

    $contas[0]->extrato();


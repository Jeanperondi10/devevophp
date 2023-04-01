<?php
    /*
        Uma loja tem 2 tipos de funcionários: vendedores e administrativos. Para ambos a
    empresa precisa ter o registro do nome e RG do funcionário.

    ●  Os vendedores têm um salário base e ganham comissão de suas vendas. Os
    administrativos têm um salário base e podem ganhar horas extras adicionais.
    ●  Faça uma herança de classes que tenha uma classe pai que implemente o que for comum
    aos dois tipos de funcionários e uma classe filha para cada tipo.
    ●  Os vendedores devem ter um método que acumule o total de vendas durante o mês e um
    método que retorne seu salário total, considerando que a comissão é de 5%. Para os
    administrativos as horas extras é que são acumuladas e pagas com o valor de um
    centésimo do salário por hora. Nos dois casos, o método que retorna o salário a receber
    zera os valores acumulados.
    */

    abstract class Funcionario{
        protected $nome;
        protected $rg;
        protected $salBase;
    }

    class Vendedor extends Funcionario{
        
    }
    class Administrador extends Funcionario{

    }
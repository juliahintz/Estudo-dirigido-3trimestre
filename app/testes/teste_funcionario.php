<?php
require __DIR__."/../model/Funcionario.php";
require __DIR__."/../model/Data.php";
//INSTANCIA 1
$funcionario1 = new Funcionario;
$x1 = $funcionario1->nome = "Eduarda";
$x1 = $funcionario1->departamento = "produção";
$dt = new Data;
$dt->dia = 4;
$dt->mes = 8;
$dt->ano = 2006;
$funcionario1->dataEntrada = $dt;
$funcionario1->CPF = "116.234.618-10";
$funcionario1->salario = 1000;
//INVOCANDO OS MÉTODOS
//print("Esse é o cálculo ganho anual do funcionario1: ".$funcionario1->calculoGanhaAnual());
//print ("\n");
//print("Esse é o aumento do salário do funcionario1: ".$funcionario1->recebeAumento());
echo $funcionario1->mostra();
print ("<br>");
//INSTANCIA 2
$funcionario2 = new Funcionario;
$x2 = $funcionario2->nome = "Laíza";
$x2 = $funcionario2->departamento = "administração";
$x2 = $funcionario2->dataEntrada = "22/10/2001";
$x2 = $funcionario2->CPF = "115.231.619-10";
$x2 = $funcionario2->salario = 1320;
//INVOCANDO OS MÉTODOS
print("Esse é o cálculo ganho anual do funcionario2: ".$funcionario2->calculoGanhaAnual());
print ("\n");
print("Esse é o aumento do salário do funcionario2: ".$funcionario2->recebeAumento());
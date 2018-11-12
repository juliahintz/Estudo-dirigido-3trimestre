<?php  
class Funcionario 
{
public $departamento;
public $salario;
public $CPF;
public $dataEntrada;
public $conexao;
public function recebeAumento(){
return $this->salario += $this->salario*0.1 + $this->salario;
}
public function calculoGanhaAnual(){
return $this->salario*13;
}
public function mostra(){
return ("O funcionário do departamento ".$this->departamento. ", funcionario desde ". $this->dataEntrada->mostra(). " possui salário de ". $this->salario. "." );
}
public function __toString (){
return $this->mostra();
}
}
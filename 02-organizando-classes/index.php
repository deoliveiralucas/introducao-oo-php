<?php

// FLISoL 2017
// Introdução a Orientação a Objetos com PHP
// Exemplo adicionando as classes em arquivos separados

require_once 'Pessoa.php';
require_once 'Funcionario.php';

// Criando uma instancia de Pessoa
$lucas = new Pessoa('Lucas', 22, '12345678');
// acesso direto ao atributo público
echo $lucas->nome . PHP_EOL;
// acesso ao método público
echo $lucas->obterIdade() . PHP_EOL;
// método público para imprimir dados da pessoa
$lucas->imprimirDados();
// echo $lucas->idade; // erro ao tentar acessar atributo protegido 
// echo $lucas->cpf; // erro ao tentar acessar atributo privado
// $lucas->obterSalario(); // erro: método não existe na classe pessoa

// Criando uma instancia de Funcionario
$zidane = new Funcionario('Zidane', 45, '765433211', 50000);
// acesso direto ao atributo público da classe Pessoa
echo $zidane->nome . PHP_EOL;
// acesso ao método público da classe Pessoa
$zidane->obterIdade();
// acesso ao método público da classe Funcionario
$zidane->obterSalario();

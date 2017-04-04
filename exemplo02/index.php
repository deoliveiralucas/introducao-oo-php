<?php

/**
 * Exemplo adicionando as classes em arquivos separados
 */

require_once 'Pessoa.php';
require_once 'Funcionario.php';

// Criando uma instancia de pessoa
$lucas = new Pessoa('Lucas', 22, '12345678');
echo $lucas->nome . PHP_EOL;
// echo $lucas->idade; // erro ao tentar acessar atributo protegido 
// echo $lucas->cpf; // erro ao tentar acessar atributo privado
$lucas->qualSuaIdade();
// $lucas->qualSeuSalario(); // erro: método não existe na classe pessoa

// --------------------------------------------------------

// Criando uma instancia de funcionario
$zidane = new Funcionario('Zidane', 45, '765433211', 50000);
echo $zidane->nome . PHP_EOL;
$zidane->qualSuaIdade();
$zidane->qualSeuSalario();
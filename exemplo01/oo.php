<?php

/**
 * Introdução a Orientação a Objetos com PHP
 * Exemplo didatico de classes, atributos e métodos
 * 
 * @author Lucas de Oliveira <contato@deoliveiralucas.net>
 */

class Pessoa 
{

    /**
     * Visivel para todos 
     * 
     * @var int
     */
    public $nome;

    /**
     * Visivel para a mesma classes 
     * e para classes derivadas
     * 
     * @var string
     */
    protected $idade;

    /**
     * Visivel somente para a mesma classe
     *
     * @var string
     */
    private $cpf;

    /**
     * Método construtor é executado no 
     * momento em que a classe é instanciada
     */
    public function __construct($nome, $idade, $cpf)
    {
        // $this é utilizado para chamar métodos e 
        // atributos da própria classe
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }

    /**
     * Método público imprime a idade
     */
    public function qualSuaIdade()
    {
        echo 'Minha idade é: ' . $this->idade . PHP_EOL;
    }
}

// Criando uma instancia de pessoa
$lucas = new Pessoa('Lucas', 22, '12345678');
echo $lucas->nome . PHP_EOL;
// echo $lucas->idade; // erro ao tentar acessar atributo protegido 
// echo $lucas->cpf; // erro ao tentar acessar atributo privado
$lucas->qualSuaIdade();

class Funcionario extends Pessoa
{

    /**
     * Atributo privado 
     * 
     * @var float
     */
    private $salario;

    /**
     * Método construtor para preencher dados
     * dessa classe e da classe pai
     */
    public function __construct($nome, $idade, $cpf, $salario)
    {
        $this->salario = $salario;
        // chama construtor da classe pai (Pessoa)
        parent::__construct($nome, $idade, $cpf);
    }

    public function qualSeuSalario()
    {
        echo 'Meu salário é: ' . $this->salario;
    } 
}

// Criando uma instancia de pessoa
$lucas = new Pessoa('Lucas', 22, '12345678');
echo $lucas->nome . PHP_EOL;
// echo $lucas->idade; // erro ao tentar acessar atributo protegido 
// echo $lucas->cpf; // erro ao tentar acessar atributo privado
$lucas->qualSuaIdade();
// $lucas->qualSeuSalario(); // erro: método não existe na classe pessoa

// Criando uma instancia de funcionario
$zidane = new Funcionario('Zidane', 45, '765433211', 50000);
echo $zidane->nome . PHP_EOL;
$zidane->qualSuaIdade();
$zidane->qualSeuSalario();






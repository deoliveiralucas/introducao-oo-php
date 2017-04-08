<?php

// FLISoL 2017
// Introdução a Orientação a Objetos com PHP
// Exemplo de classes, atributos e métodos

/**
 * Classe Pessoa
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
    public function __construct(string $nome, int $idade, string $cpf)
    {
        // $this é utilizado para chamar métodos e 
        // atributos da própria classe
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }

    /**
     * Método público para retornar a idade
     */
    public function obterIdade(): int
    {
        return $this->idade;
    }
}

/**
 * Classe Funcionario
 * 
 * @author Lucas de Oliveira <contato@deoliveiralucas.net>
 */
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
    public function __construct(string $nome, int $idade, string $cpf, float $salario)
    {
        // atribui valor ao atributo da classe
        $this->salario = $salario;
        // chama construtor da classe pai (Pessoa)
        parent::__construct($nome, $idade, $cpf);
    }

    /**
     * Método público para retornar o salário
     */
    public function obterSalario()
    {
        return $this->salario;
    } 
}

// Criando uma instancia de Pessoa
$lucas = new Pessoa('Lucas', 22, '12345678');
// acesso direto ao atributo público
echo $lucas->nome . PHP_EOL;
// acesso ao método público
echo $lucas->obterIdade() . PHP_EOL;
// echo $lucas->idade; // erro ao tentar acessar atributo protegido 
// echo $lucas->cpf; // erro ao tentar acessar atributo privado
// $lucas->obterSalario(); // erro: método não existe na classe pessoa

// Criando uma instancia de Funcionario
$zidane = new Funcionario('Zidane', 45, '765433211', 50000);
// acesso direto ao atributo público da classe Pessoa
echo $zidane->nome . PHP_EOL;
// acesso ao método público da classe Pessoa
echo $zidane->obterIdade() . PHP_EOL;
// acesso ao método público da classe Funcionario
echo $zidane->obterSalario() . PHP_EOL;

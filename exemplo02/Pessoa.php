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

<?php

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
    public function __construct($nome, $idade, $cpf)
    {
        // $this é utilizado para chamar métodos e 
        // atributos da própria classe
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }

    /**
     * Método público retorna a idade
     */
    public function obterIdade()
    {
        return $this->idade;
    }

    /**
     * Método imprime informações da Pessoa
     */
    public function imprimirDados()
    {
        printf(
            '%s tem %s anos seu cpf é %s %s', 
            $this->nome, 
            $this->idade, 
            $this->cpf,
            PHP_EOL
        );
    }
}

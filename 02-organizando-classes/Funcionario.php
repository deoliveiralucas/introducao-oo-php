<?php

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
    public function obterSalario(): float
    {
        return $this->salario;
    }
}

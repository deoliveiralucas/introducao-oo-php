<?php

/** 
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
    public function __construct($nome, $idade, $cpf, $salario)
    {
        $this->salario = $salario;
        // chama construtor da classe pai (Pessoa)
        parent::__construct($nome, $idade, $cpf);
    }

    public function qualSeuSalario()
    {
        echo 'Meu salário é: ' . $this->salario . PHP_EOL;
    } 
}

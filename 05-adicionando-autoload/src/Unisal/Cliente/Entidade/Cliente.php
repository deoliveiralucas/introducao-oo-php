<?php

namespace Unisal\Cliente\Entidade;

/**
 * Classe cliente
 *
 * @author Lucas de Oliveira <contato@deoliveiralucas.net>
 */
class Cliente
{

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $email;

    /**
     * @param $nome string
     * @param $email string
     */
    public function __construct($nome, $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function obterNome()
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function obterEmail()
    {
        return $this->email;
    }
}

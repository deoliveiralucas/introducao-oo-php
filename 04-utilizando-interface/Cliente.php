<?php

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
    public function __construct(string $nome, string $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function obterNome(): string
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function obterEmail(): string
    {
        return $this->email;
    }
}

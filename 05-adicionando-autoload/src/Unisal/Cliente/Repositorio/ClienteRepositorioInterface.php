<?php

namespace Unisal\Cliente\Repositorio;

use Unisal\Cliente\Entidade\Cliente;

/**
 * Interface para manipular cliente
 *
 * @author Lucas de Oliveira <contato@deoliveiralucas.net>
 */
interface ClienteRepositorioInterface
{

    /**
     * Grava dados do cliente
     * 
     * @param Cliente $cliente
     * @return Cliente
     */
    public function gravar(Cliente $cliente): Cliente;

    /**
     * Retorna clientes armazenados 
     *
     * @return array
     */
    public function consultar(): array;
}

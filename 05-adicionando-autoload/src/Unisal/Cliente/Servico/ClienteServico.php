<?php

namespace Unisal\Cliente\Servico;

use Unisal\Cliente\Repositorio\ClienteRepositorioInterface;
use Unisal\Cliente\Entidade\Cliente;

/**
 * Classe cliente repositório
 *
 * @author Lucas de Oliveira <contato@deoliveiralucas.net>
 */
class ClienteServico
{

    /**
     * @var ClienteRepositorioInterface 
     */
    private $repositorio;

    /**
     * @param ClienteRepositorioInterface $repositorio
     */
    public function __construct(ClienteRepositorioInterface $repositorio)
    {
        $this->repositorio = $repositorio;
    }

    /**
     * Pega dados do cliente e envia para o repositorio
     * 
     * @param $dadosCliente array
     * @return Cliente
     */
    public function gravar(array $dadosCliente): Cliente
    {
        $cliente = new Cliente($dadosCliente['nome'], $dadosCliente['email']);
        return $this->repositorio->gravar($cliente);
    }

    /**
     * Retorna todos os clientes armazenados
     * 
     * @return array
     */
    public function consultar(): array
    {
        return $this->repositorio->consultar();   
    }
}

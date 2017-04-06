<?php

namespace Unisal\Cliente\Repositorio;

use Unisal\Cliente\Entidade\Cliente;

/**
 * Classe cliente repositório
 * Gerencia dados do cliente em sessão
 *
 * @author Lucas de Oliveira <contato@deoliveiralucas.net>
 */
class ClienteRepositorioSessao implements ClienteRepositorioInterface
{

    public function __construct()
    {
        session_start();
    }

    /**
     * Grava dados do cliente em sessão
     * 
     * @param Cliente $novoCliente
     * @return Cliente
     */
    public function gravar(Cliente $novoCliente)
    {
        $clientes = $this->consultar();

        $novaListaClientes = [];
        foreach ($clientes as $cliente) {
            $novaListaClientes[] = serialize($cliente);
        } 

        $novaListaClientes[] = serialize($novoCliente);
        $_SESSION['listaClientes'] = serialize($novaListaClientes);

        return $novoCliente;
    }

    /**
     * @return array
     */
    public function consultar()
    {        
        if (! isset($_SESSION['listaClientes'])) {
            return [];
        }
        
        $arrClientes = [];
        $clientes = [];  
        $clientes = unserialize($_SESSION['listaClientes']);
        foreach ($clientes as $cliente) {
            $arrClientes[] = unserialize($cliente);
        }
        
        return $arrClientes;
    }
}

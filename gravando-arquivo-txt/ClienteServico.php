<?php

/**
 * Classe cliente repositório
 * Pega dados do cliente e envia para o repositorio
 *
 * @author Lucas de Oliveira <contato@deoliveiralucas.net>
 */
class ClienteServico
{

    /**
     * Pega dados do cliente e envia para o repositorio
     * 
     * @param $dadosCliente array
     * @return Cliente
     */
    public function gravar(array $dadosCliente)
    {
        $cliente = new Cliente($dadosCliente['nome'], $dadosCliente['email']);
        $repositorio = new ClienteRepositorio();
        return $repositorio->gravar($cliente);
    }

    /**
     * Retorna todos os clientes armazenados
     * 
     * @return array
     */
    public function consultar()
    {
        $repositorio = new ClienteRepositorio();
        return $repositorio->consultar();   
    }
}

<?php

/**
 * Classe cliente serviço
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
    public function gravar(array $dadosCliente): Cliente
    {
        // cria uma nova instancia de cliente
        $cliente = new Cliente($dadosCliente['nome'], $dadosCliente['email']);
        // cria uma nova instancia do repositorio
        $repositorio = new ClienteRepositorio();
        // grava cliente no arquivo
        return $repositorio->gravar($cliente);
    }

    /**
     * Retorna todos os clientes armazenados
     * 
     * @return array
     */
    public function consultar(): array
    {
        // cria uma nova instancia do repositorio
        $repositorio = new ClienteRepositorio();
        // retorna clientes do arquivos texto
        return $repositorio->consultar();
    }
}

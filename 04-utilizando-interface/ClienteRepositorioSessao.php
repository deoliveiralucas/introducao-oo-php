<?php

/**
 * Classe cliente repositório
 *
 * @author Lucas de Oliveira <contato@deoliveiralucas.net>
 */
class ClienteRepositorioSessao implements ClienteRepositorioInterface
{

    /**
     * Método construtor executado ao instanciar classe
     */
    public function __construct()
    {
        // inicia sessão
        session_start();
    }

    /**
     * Grava dados do cliente em sessão
     * 
     * @param Cliente $novoCliente
     * @return Cliente
     */
    public function gravar(Cliente $novoCliente): Cliente
    {
        // pega todos os clientes que já estão na sessão
        $clientes = $this->consultar();

        // cria um array vazio
        $novaListaClientes = [];
        foreach ($clientes as $cliente) {
            // adiciona todos os clientes que já estavam na sessão
            // nessa nova lista; serializados para que possam ser 
            // guardados na sessão
            $novaListaClientes[] = serialize($cliente);
        } 

        // adiciona o cliente também nessa lista
        $novaListaClientes[] = serialize($novoCliente);
        // atualiza os dados da sessão
        $_SESSION['clientes'] = serialize($novaListaClientes);

        // retorna o cliente que foi adicionado
        return $novoCliente;
    }

    /**
     * @return array
     */
    public function consultar(): array
    {
        // cria array vazio
        $arrClientes = [];
        $clientes = [];    
        // verifica se existe clientes na sessão    
        if (isset($_SESSION['clientes'])) {
            // se existe, pega clientes da sessão desserializado
            // para que possa vir como array
            $clientes = unserialize($_SESSION['clientes']);
        }

        // percorre o array clientes 
        foreach ($clientes as $cliente) {
            // desserializa cada item do array para que possa 
            // vir como objeto Cliente
            $arrClientes[] = unserialize($cliente);
        }
        
        // retorna array
        return $arrClientes;
    }
}

<?php

/**
 * Classe cliente repositório
 *
 * @author Lucas de Oliveira <contato@deoliveiralucas.net>
 */
class ClienteRepositorio
{

    /**
     * Grava dados do cliente em arquivo texto
     * 
     * @param $cliente Cliente
     * @return Cliente
     */
    public function gravar(Cliente $cliente)
    {
        $linhaComNovoCliente = sprintf(
            "%s|%s\n",
            $cliente->obterNome(),
            $cliente->obterEmail()
        );

        $file = fopen('clientes.txt', 'a');
        fwrite($file, $linhaComNovoCliente);
        fclose($file);

        return $cliente;
    }
}

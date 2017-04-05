<?php

/**
 * Classe cliente repositório
 * Gerencia dados do cliente em arquivo texto
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

        $arquivo = fopen('clientes.txt', 'a');
        fwrite($arquivo, $linhaComNovoCliente);
        fclose($arquivo);

        return $cliente;
    }

    /**
     * @return array
     */
    public function consultar()
    {
        $clientes = [];
        $arquivo = fopen('clientes.txt', 'r');
        while ($linha = fgets($arquivo)) {
            $clientes[] = $this->converterLinhaDoArquivoParaCliente($linha);
        }
        fclose($arquivo);
        return $clientes;
    }

    /**
     * Recebe uma linha do arquivo texto, manipula e 
     * adiciona as informações em um objeto cliente
     * 
     * @param $linha string
     * @return Cliente
     */
    private function converterLinhaDoArquivoParaCliente($linha)
    {
        // quebra a linha onde tem o '|'
        $colunas = explode('|', $linha);
        $nome = $colunas[0];
        $email = $colunas[1];
        return new Cliente($nome, $email);
    }
}


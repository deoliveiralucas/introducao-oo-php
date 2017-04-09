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
    public function gravar(Cliente $cliente): Cliente
    {
        // pega objeto cliente e cria uma string com nome e email
        // separado por "|"
        $linhaComNovoCliente = sprintf(
            "%s|%s\n",
            $cliente->obterNome(),
            $cliente->obterEmail()
        );

        // abre arquivo para escrita e posiciona o ponteiro 
        // no final do arquivo
        $arquivo = fopen('clientes.txt', 'a');
        // escreve nova linha no arquivo
        fwrite($arquivo, $linhaComNovoCliente);
        // fecha arquivo
        fclose($arquivo);

        // retorna objeto cliente
        return $cliente;
    }

    /**
     * @return array
     */
    public function consultar(): array
    {
        // verifica se existe os arquivo
        if (!file_exists('clientes.txt')) {
            // se não existir retorna um array vazio
            return [];
        }

        // cria um array vazio
        $clientes = [];
        // abre arquivo para leitura
        $arquivo = fopen('clientes.txt', 'r');
        // lê cada linha do arquivo
        while ($linha = fgets($arquivo)) {
            // armazana novo objeto dentro do array
            $clientes[] = $this->converterLinhaDoArquivoParaCliente($linha);
        }
        
        // fecha leitura de arquivo
        fclose($arquivo);
        // returna um array com objetos Cliente
        return $clientes;
    }

    /**
     * Recebe uma linha do arquivo texto, manipula e 
     * adiciona as informações em um objeto cliente
     * 
     * @param $linha string
     * @return Cliente
     */
    private function converterLinhaDoArquivoParaCliente($linha): Cliente
    {
        // quebra a linha onde tem o '|'
        $colunas = explode('|', $linha);
        // atribui indice 0 do array para a variável nome
        $nome = $colunas[0];
        // atribui indice 1 do array para a variável nome
        $email = $colunas[1];
        // retorna uma nova instancia de cliente
        return new Cliente($nome, $email);
    }
}


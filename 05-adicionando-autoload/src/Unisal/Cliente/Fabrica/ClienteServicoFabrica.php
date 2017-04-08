<?php 

namespace Unisal\Cliente\Fabrica;

use Unisal\Cliente\Repositorio\ClienteRepositorioSessao;
use Unisal\Cliente\Repositorio\ClienteRepositorioTexto;
use Unisal\Cliente\Servico\ClienteServico;

/**
 * Classe cliente fabrica
 *
 * @author Lucas de Oliveira <contato@deoliveiralucas.net>
 */
class ClienteServicoFabrica
{

    /**
     * Retorna uma instancia de ClienteServico
     * 
     * @return ClienteServico
     */
    public static function create(): ClienteServico
    {
        //$repositorio = new ClienteRepositorioSessao();
        $repositorio = new ClienteRepositorioTexto();
        return new ClienteServico($repositorio);
    }
}
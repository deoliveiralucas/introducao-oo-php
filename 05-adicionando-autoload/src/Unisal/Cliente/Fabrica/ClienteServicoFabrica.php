<?php 

namespace Unisal\Cliente\Fabrica;

use Unisal\Cliente\Repositorio\ClienteRepositorioSessao;
use Unisal\Cliente\Servico\ClienteServico;

class ClienteServicoFabrica
{

    public static function create()
    {
        $repositorio = new ClienteRepositorioSessao();
        return new ClienteServico($repositorio);
    }
}
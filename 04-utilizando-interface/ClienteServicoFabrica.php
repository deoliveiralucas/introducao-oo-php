<?php 

class ClienteServicoFabrica
{

    public static function create()
    {
        $repositorio = new ClienteRepositorioSessao();
        return new ClienteServico($repositorio);
    }
}
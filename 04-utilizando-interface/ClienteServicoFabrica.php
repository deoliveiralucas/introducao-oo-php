<?php 

class ClienteServicoFabrica
{

    public static function create()
    {
        $repositorio = new ClienteRepositorioTexto();
        return new ClienteServico($repositorio);
    }
}
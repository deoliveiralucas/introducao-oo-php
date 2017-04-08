<?php 

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
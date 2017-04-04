<?php

// FLISoL 2017
// Introdução a Orientação a Objetos com PHP
// Exemplo gravando dados em arquivo texto

require_once 'Cliente.php';
require_once 'ClienteRepositorio.php';

$lucas = new Cliente('Lucas', 'contato@deoliveiralucas.net');

$repositorio = new ClienteRepositorio();
$repositorio->gravar($lucas);

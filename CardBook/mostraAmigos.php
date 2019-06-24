<?php
session_start();
function __autoload($classe){
        include_once "src/{$classe}.php";
    }

    $loadPerfil = new Usuario();
    	$loadPerfil->setId($_SESSION["idUsuario"]);
    	$loadPerfil->setNome($_SESSION["nome"]);
    	$loadPerfil->setTipo($_SESSION["tipo"]);
    	$loadPerfil->mostraTimeLineAmigos();
?>
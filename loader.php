<?php
require_once('helpers.php');
require_once('clases/usuario.php');
require_once('clases/validador.php');
require_once('clases/baseDatos.php');
require_once('clases/baseJson.php');
require_once('clases/armador.php');
require_once("clases/encriptador.php");
require_once("clases/autenticador.php");

$validar = new Validador();
$json = new BaseJson('usuarios.json');
$armarRegistro = new Armador();
Autenticador::iniciarSession();
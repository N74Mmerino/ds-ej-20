<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarRespuesta.php';
require_once '../../modelo/operador.php';
require_once '../../modelo/satelite.php';


$resp= new ConsultarRespuesta();

$o= New Operador();
$o->Nombre='ARSAT';
$o->TipoEmpresa='Publica';
$o->FormaLegal='Sociedad anónima';

$s= new Satelite();

$s->Id= $_GET['id'];
$s->Nombre='Arsat-1';
$s->Operador=$o;
$s->TipoMision='comunicaciones';
$s->DuracionEnAnios='15';

$resp->Satelite=$s;


echo json_encode ($resp);
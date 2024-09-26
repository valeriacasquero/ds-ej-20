<?php
require_once '../../modelo/operador.php';
require_once '../../modelo/satelite.php';
require_once '../satelites/modeloRespuestas/consultarRespuesta.php';

header('Content-Type: application/json');

$resp = new ConsultarRespuesta();

$o= new Operador();
$o->Nombre = 'ARSAT';
$o->TipoEmpresa = 'Publica';
$o->FormaLegal= 'Sociedad anonima';

$s = new Satelite();
$s->Id = $_GET["id"];
$s->Nombre ='Arsat-1';
$s->Operador = $o;
$s->TipoMision= 'Comunicaciones';
$s->DuracionEnAnios= 15;

$resp->Satelite = $s;

echo json_encode($resp);
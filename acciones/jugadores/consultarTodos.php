<?php

header('Content-Type: application/json');

require_once 'responses/consultarTodosResponse.php';
require_once '../../modelo/club.php';
require_once '../../modelo/jugador.php';

$cl = new Club();
$cl->Nombre = 'Paris Saint-Germain Football Club';
$cl->Fundacion = '2 de agosto de 1970 (52 años)';
$cl->Presidente = 'Nasser Al-Khelaifi';

$cl1 = new Club();
$cl1->Nombre = 'Manchester United Football Club';
$cl1->Fundacion = '5 de marzo de 1878 (144 años)';
$cl1->Presidente = 'Joel Glazer';

$jug = new Jugador();
$jug->Id = 1;
$jug->Nombre = 'Lionel Andrés Messi';
$jug->Apodos = 'La Pulga,  El Mesías,  D10S';
$jug->Club = $cl;
$jug->Altura = '1.70 m';

$jug1 = new Jugador();
$jug1->Id = 2;
$jug1->Nombre = 'Lisandro Martínez';
$jug1->Apodos = 'Licha';
$jug1->Club = $cl1;
$jug1->Altura = '1.75 m';

$resp =  new ConsultarTodosResponse();
$resp->ListJugadores[] = $jug;
$resp->ListJugadores[] = $jug1;

echo json_encode($resp);


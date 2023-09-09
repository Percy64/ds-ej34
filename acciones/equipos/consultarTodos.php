<?php

require_once '../../modelo/equipo.php';
require_once '../../modelo/jugador.php';
require_once 'responses/consultarTodosResponse.php';
header('Content-Type: application/json');

$resp = new ConsultarTodosResponse();



$j=new jugador();
$j->nombre = 'pedro gonzalez';
$j->posicion = 'delantero';
$j->debut = '17 de agosto de 2005';
$j->goles = '10';

$j2=new jugador();
$j2->nombre = 'daniel sanchez';
$j2->posicion = 'delantero';
$j2->debut = '16 de diciembre de 2010';
$j2->goles = '0';

$j3=new jugador();
$j3->nombre = 'juan perez';
$j3->posicion = 'defensor';
$j3->debut = '17 de septiembre de 2019';
$j3->goles = '10';

$j4=new jugador();
$j4->nombre = 'ignacio gonzalez';
$j4->posicion = 'arquero';
$j4->debut = '17 de enero  de 2020';
$j4->goles = '1';

$j5=new jugador();
$j5->nombre = 'ariel consentino';
$j5->posicion = 'mediocampista';
$j5->debut = '16 de diciembre de 2001';
$j5->goles = '2';

$j6=new jugador();
$j6->nombre = 'diego dominguez';
$j6->posicion = 'defensor';
$j6->debut = '15 de febrero de 2018';
$j6->goles = '5';

$j7=new jugador();
$j7->nombre = 'gustavo santos';
$j7->posicion = 'delantero';
$j7->debut = '16 de diciembre de 2009';
$j7->goles = '3';

$e=new equipo();
$e->id = 1;
$e->nombre = 'equipo 1';
$e->fundacion = '3 de noviembre de 1903 (118 años)';
$e->presidente = "Javier Perez";
$e->listequipos[] = $j;
$e->listequipos[] = $j2;
$e->listequipos[] = $j3;

$e1=new equipo();
$e1->id = 2;
$e1->nombre = 'equipo 2';
$e1->fundacion = '5 de abril de 1923';
$e1->presidente = "Ignacio Quinteros";
$e1->listequipos[] = $j4;
$e1->listequipos[] = $j5;
$e1->listequipos[] = $j6;
$e1->listequipos[] = $j7;


$resp->listequipos[] = $e;
$resp->listequipos[] = $e1;



echo json_encode($resp);
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* 
    Created on : 01/06/2016
    Author     : Thiago
*/
//Encoding UTF-8
header("Content-type: text/html; charset=utf-8");

//Pegar o valor do Select
$cidade = $_GET['txtCidade'];

//Verifica os casos das cidades
switch ($cidade) {
    case 1:
        date_default_timezone_set("America/Sao_Paulo");
        $horarioAtual = "Horário atual em Brasília: " . date('H:i:s');
        break;
    case 2:
        date_default_timezone_set("Asia/Tokyo");
        $horarioAtual = "Horário atual em Tóquio: " . date('H:i:s');
        break;
    case 3:
        date_default_timezone_set("Europe/London");
        $horarioAtual = "Horário atual em Londres: " . date('H:i:s');
        break;
    case 4:
        date_default_timezone_set("Europe/Rome");
        $horarioAtual = "Horário atual em Roma: " . date('H:i:s');
        break;
    case 5:
        date_default_timezone_set("America/Chicago");
        $horarioAtual = "Horário atual em Chicago: " . date('H:i:s');
        break;
    case 6:
        date_default_timezone_set("America/New_York");
        $horarioAtual = "Horário atual em Nova Yorque: " . date('H:i:s');
        break;
    case 7:
        date_default_timezone_set("Asia/Hong_Kong");
        $horarioAtual = "Horário atual em Hong Kong: " . date('H:i:s');
        break;
    case 8:
        date_default_timezone_set("Africa/Johannesburg");
        $horarioAtual = "Horário atual em Joanesburgo: " . date('H:i:s');
        break;
    case 9:
        date_default_timezone_set("Australia/Sydney");
        $horarioAtual = "Horário atual em Sydney: " . date('H:i:s');
        break;
    case 10:
        date_default_timezone_set("Europe/Lisbon");
        $horarioAtual = "Horário atual em Lisboa: " . date('H:i:s');
        break;
    case 11:
        date_default_timezone_set("Europe/Berlin");
        $horarioAtual = "Horário atual em Berlim: " . date('H:i:s');
        break;
    case 12:
        date_default_timezone_set("Europe/Paris");
        $horarioAtual = "Horário atual em Paris: " . date('H:i:s');
        break;
    case 13:
        date_default_timezone_set("Europe/Moscow");
        $horarioAtual = "Horário atual em Moscou: " . date('H:i:s');
        break;
    case 14:
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $horarioAtual = "Horário atual em Buenos Aires: " . date('H:i:s');
        break;
    case 15:
        date_default_timezone_set("America/Montevideo");
        $horarioAtual = "Horário atual em Montividéu: " . date('H:i:s');
        break;
    default:
        break;
 }
 
 //var_dump($horarioAtual);
 //Imprime o Fuso Horário Local escolhido
 print $horarioAtual;
   
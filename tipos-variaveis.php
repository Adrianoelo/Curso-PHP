<?php

//Tipos Variaveis
$logico = true; //False - Boolean
$inteiro = 10; //Integer
$decimal = 10.0; //Float
$texto = 'Texto'; // String

echo '<pre>';

var_dump($logico);
var_dump($inteiro);
var_dump($decimal);
var_dump($texto);

echo '<hr>';

//Array
$array = [];
var_dump($array);

//Objetos
$object = new stdClass;
var_dump($object);

//Null
$nulo = null;
var_dump($nulo);


<?php

echo '<pre>';

$boolean = true;
var_dump($boolean);
echo '<hr>';

$int = (int) true;
var_dump($int);
echo '<hr>';

$float = (float) true;
var_dump($float);
echo '<hr>';

$string = (string) true;
var_dump($string);
echo '<hr>';

$array = (array) true;
var_dump($array);
echo '<hr>';

$object = (object) true;
var_dump($object);
echo '<hr>';

$null = (unset) true;
var_dump($null);
echo '<hr>';

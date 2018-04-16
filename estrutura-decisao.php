<?php

// IF

$condicao = true;

if ($condicao == true) {
	echo 'verdadeiro';
}

echo "<hr>";

$idade =19;

if ($idade > 18) {
	echo 'Maior de idade';
}

echo "<hr>";

//If e Else

$idade =17;

if ($idade > 18) {
	echo 'Maior de idade';
} Else {
	echo 'Menor de idade';
}

echo "<hr>";

//If, ElseIf e Else

$nota =5;
$frequencia =7;

if ($nota >= 6 and $frequencia >=7) {
	echo 'Aprovado';
} else if ($nota >=4 and $nota  <6 and $frequencia >=7) {
	echo 'Recuperação';
} else {
	echo 'Reprovado';
}

echo "<hr>";
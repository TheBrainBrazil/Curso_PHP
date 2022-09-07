<?php
$n1 = 3;
$c = FALSE;
//Checagem do tipo e valor da variável.
echo var_dump($n1);

//Só mostrará o tipo da variável.
echo gettype($n1);

//Evidenciando se é ou não um tipo.
if (is_bool($c)){
	echo 'Is boolean';
} 

if (is_int($n1)){
	echo 'This is a number';
}
?>




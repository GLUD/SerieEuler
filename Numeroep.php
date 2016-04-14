<?php
$a=$_POST['ite'];
$e=1;
$f=1;
for($i=1;$i<$a;$i++){
	$f=$f*$i;
	$e=$e+1/($f);		
	}
echo "el valor de la aprox. con $a ciclos es: $e";
?>

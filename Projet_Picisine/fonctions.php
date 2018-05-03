<?php

if(!defined ('deja_utlise'))
{
function deja_utlise($field,$value,$table)
{
$serveur ="localhost";
				$login = "root";
				$pw = "";
				$bdd = "projetweb";
		
				$co= mysqli_connect($serveur,$login,$pw,$bdd);

$q= $bdd->prepare ("SELECT id FROM $table WHERE $field=?");
$q-> execute([$value]);

$count=$q->rowcount();

$q->closeCursor();

return $count;

}

}

?>
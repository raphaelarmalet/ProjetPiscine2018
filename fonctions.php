<?php

if(!defined ('is_already_in_use'))
{
function deja_utlise($field,$value,$table)
{

global $db;

$q= $db->prepare ("SELECT id FROM $table WHERE $field=?");
$q-> execute([$value]);

$count=$q->rowcount();

$q->closeCursor();

return $count;

}

}

?>
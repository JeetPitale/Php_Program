<?php
//No Loger Supported Null as a Datatype
$a1=12;
$a2="IMCA";
$a3=12.4;
$a4=true;
$a5=NULL;
$a6=array("d",2,"4");

$a1=(unset)$a1;
$a2=(unset)$a2;
$a3=(unset)$a3;
$a4=(unset)$a4;
$a5=(unset)$a5;
$a6=(unset)$a6;


var_dump($a1);
echo "<br>";

var_dump($a2);
echo "<br>";

var_dump($a3);
echo "<br>";

var_dump($a4);
echo "<br>";

var_dump($a5);
echo "<br>";

var_dump($a6);
echo "<br>";
 ?>

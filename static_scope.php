<?php

echo "Answer is  ";
function static1()
{
   static $a=3;
    $a++;
    echo $a;
}
static1();
?>
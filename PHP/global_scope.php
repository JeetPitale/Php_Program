<?php
$a=6;
$b=5;
echo "Answer is  ";
function glob()
{
   global $a , $b, $c;
    $c=$a + $b;
    //DO static as soon as possible
}
glob();
echo $c;
?>
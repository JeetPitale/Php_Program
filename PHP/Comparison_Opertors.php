<?php
$a=12;
$b=23;
$c="12";
$d=89;

#Comparison Opertors
# ==, ===, !=, !==, <, >,<>(like not equaltoo),
echo " Value of A :$a";
echo "<br>";
echo " Value of B :$b";
echo "<br>";
echo " Value of C :$c";
echo "<br>";
echo " Value of D :$d";
echo "<br>";
echo "<br>";

# ==
echo "Example of Double Equalto";
echo "<br>";
    var_dump($a==$c);
echo "<br>";

# ===
echo "Example of Triple Equalto";
echo "<br>";
    var_dump($a===$c);
echo "<br>";

# ==
echo "Example of Not Equalto";
echo "<br>";
    var_dump($a!=$c);
echo "<br>";

# ==
echo "Example of Not Double Equalto";
echo "<br>";
    var_dump($a!==$c);
echo "<br>";

# <
echo "Example of Less Than";
echo "<br>";
    var_dump($b<$d);
echo "<br>";

# ==
echo "Example of Greater Than ";
echo "<br>";
    var_dump($a>$c);
echo "<br>";

#<>
echo "Like Not Equaltoo";
echo "<br>";
    var_dump($b<>$d);
echo "<br>";

#!=
echo " Not Equaltoo";
echo "<br>";
    var_dump($b<>$d);
echo "<br>";


?>
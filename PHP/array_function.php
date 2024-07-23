<?php
//Array Function : count(Count starts from one not from zero), current, next, prev, end, each(works with print_r)
//Sort Function : index array(sort and rsort both works with foreach), associate array(sort and rsort both works with foreach)
$array=array("Python","C++","C","Java","Php");//Indexed Array
echo count($array);
echo "<br>";
echo "<br>";
echo current($array);
echo "<br>";
echo "<br>";
echo next($array);
echo "<br>";
echo "<br>";
echo end($array);
echo "<br>";
echo "<br>";
echo current($array);
echo "<br>";
echo "<br>";
echo prev($array);
echo "<br>";
echo "<br>";
echo prev($array);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$array2=array("Python"=>"1","C++"=>"2","C"=>"3","Java"=>"4","Php"=>"5");//Ass Array
echo count($array2);
echo "<br>";
echo "<br>";
echo current($array2);
echo "<br>";
echo "<br>";
echo next($array2);
echo "<br>";
echo "<br>";
echo end($array2);
echo "<br>";
echo "<br>";
echo current($array2);
echo "<br>";
echo "<br>";
echo prev($array2);
echo "<br>";
echo "<br>";
echo prev($array2);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo sort($array);
echo "<br>";
echo "<br>";
print_r(sort($array));

sort($array);
echo "<br>";
echo "<br>";
$array3=array();// Output:One means there are values in array
echo sort($array3);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$array4=array("Python"=>"4","C++"=>"3","C"=>"2","Java"=>"1","Php"=>"0");
asort($array4);
echo "<br>";
echo "<br>";
foreach($array4 as $x=>$y)
{
    echo $x. "  " .$y;
    echo "<br>";

}
echo "<br>";
echo "<br>";
echo arsort($array2);

?>
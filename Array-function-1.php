<?php
$array1=array("Rose","Sunflower");
$array2=array("HyerCar"=>"4","SportsCar"=>"10");
// in_Array
echo "In_Array : ";
echo "<br>";
echo "checker Whether Element is Present or not";
echo "<br>";
if(in_array("Rose",$array1))
{
    echo "Rose is Present";
}
else
{
    echo "Rose is Present";
}
echo "<br>";
echo "<br>";

//array_merge
echo "Array Merge : ";
echo "<br>";
print_r(array_merge($array1,$array2));

echo "<br>";
echo "<br>";

//array_Combine
echo "Array Combine : ";
echo "<br>";
print_r(array_combine($array1,$array2));// Taking Values of Both Array and Combine

echo "<br>";
echo "<br>";

//array_Reverse
echo "Array Reverse : ";
echo "<br>";
print_r(array_reverse($array1));
echo "<br>";
print_r(array_reverse($array2));

?>
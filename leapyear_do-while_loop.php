<?php
echo "Checking Wheather Year is Leap Year or not <br>";
$year=2025;
echo "Year is 2025 <br>";
do{
    if($year%4==0)
    {
        echo "Year is Leap Year";
        break;
    }
   else{
    echo "Year is not a Leap Year";
    break;
   }
}while($year>1000)



?>
<?php
$birds=array("Gold"=>"1","Red"=>"2","Blue"=>"3","Green"=>"4");//This Data is Called Key and number is called Value

foreach($birds as $x=>$y)
{   
    if($y==1)
    {  
        echo "I like " .$x ." "."Color";
        echo "<br>";
       
    }
    else

    echo $x." " ."Color";
    echo "<br>";
}
?>
<?php
$num=7;
    for( $i=0;$i<$num;$i++)
    {
       for($k=$num; $k>$i+1;$k--){    
        echo "&nbsp;";  
       }
        for($j=0;$j<$i;$j++)
        {
            echo "  *  ";
        }
        echo "<br>";
    }
    ?>
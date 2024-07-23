<?php
    $num=65;
    for($i=1;$i<=5;$i++)
    {
        for($j=0;$j<$i;$j++)
        {
            
            echo  chr($num);
            $num=$num+1;

        }
        echo "<br>";
    }
?> 
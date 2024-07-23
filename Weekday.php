<html>
    <head>
    </head>
    <body>
        <?php
        
        $weekday=date("D");
        if($weekday="Mon" || $weekday="Tue" || $weekday="Wed" || $weekday="Thu" )
        {
            echo "Today is Weekday";
        }
        else if($weekday="Fri")
        {
            echo "Today is Weekday"; 
        }
        else
        {
            echo "Today is Weekend"; 
        }
        ?>
 </body>
 </html>

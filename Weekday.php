<html>
    <head>
    </head>
    <body>
        <?php
        #we can use D=day , l=full day name, N=number , M=Month , d=Date , Y=Year
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
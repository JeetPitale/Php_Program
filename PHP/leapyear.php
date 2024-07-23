<html>
    <head>
    </head>
    <body>
        <?php
        $year=date("Y");
         echo $year;
         echo "<br>";
         if($year%4==0)
         {
            echo "This is a Leap year";
         }
         else
         {
            echo "This is not a Leap year";
         }
        ?>
 </body>
 </html>
<html>
    <head>
    </head>
    <body>
        <?php
        #we can use D=day , l=full day name, N=number , M=Month , d=Date , Y=Year , 
        $month=date("M");
        echo $month;
        echo "<br>";
        if($month=="Dec" || $month=="Jan" || $month=="Feb")
        {
            echo "Winter Season";
        }
        else if($month=="Mar" || $month=="Apr"|| $month=="May" || $month=="Jun")
        {
            echo "Summer Season"; 
        }
        else if($month=="Jul" || $month=="Aug"|| $month=="Sep")
        {
            echo "Monsoon Season";
        }
        else
        {
            echo "Spring Season"; 
        }
        ?>
 </body>
 </html>
<html>
    <head>
    </head>
    <body>
        <?php
        
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

<html>
    <head>
    </head>
    <body>
        <?php
        #we can use h/H=hour , m/M=min , s/S=second 
        $hour=date("h:m:s A");
        echo $hour;
        echo "<br>";
        if($hour<12)
        {
            echo "Good Morngzz";
        }
        else if($hour<18)
        {
            echo "Good Noon"; 
        }
        else if($hour<20)
        {
            echo "Good Evening";
        }
        else
        {
            echo "Good Night"; 
        }
        ?>
 </body>
 </html>
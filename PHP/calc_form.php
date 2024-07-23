<html>
    <head><title>Form Element</title></head>
    <body>
        <form method="POST">
            <table>
                <tr><td><label>Enter Number 1 :</label></td>
                <td><input type="text" name="no1" placeholder="Enter Number 1" required></td></tr>
                <br>
                <tr><td><label>Enter Number 2 :</label></td>
                <td><input type="text" name="no2" placeholder="Enter Number 2" required></td></tr>
                <br>

                <tr><td><input type="Submit" name="Submit"></td>
                <td><input type="Reset" name="Reset"></td></tr>
            </table>
        </form>
            <?php
                if($_SERVER["REQUEST_METHOD"]=="POST")
                {
                    $no1=$_POST["no1"];
                    $no2=$_POST["no2"];
                    $no3=$no1 + $no2;
                    echo $no3;
                }
                /*
                if(isset($_POST["Submit"]))
                {
                     $no1=$_POST["no1"];
                    $no2=$_POST["no2"];
                    $no3=$no1 + $no2;
                    echo $no3;
                }
                */

            ?>
    </body>
</html>
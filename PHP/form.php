<html>
    <head><title>Form Element</title></head>
    <body>
        <form method="POST">
            <table>
                <tr><td><label>Enter Name :</label></td>
                <td><input type="text" name="name" placeholder="Enter Name" required></td></tr>
                <br>
                <tr><td><label>Enter Surname :</label></td>
                <td><input type="text" name="surname" placeholder="Enter Surname" required></td></tr>
                <br>

                <tr><td><input type="Submit" name="Submit"></td>
                <td><input type="Reset" name="Reset"></td></tr>
            </table>
        </form>
            <?php
                if($_SERVER["REQUEST_METHOD"]=="POST")
                {
                    echo "Good Morning"." " .$_POST["name"]." ".$_POST["surname"];
                }
                /*
                if(isset($_POST["Submit"]))
                {
                    echo "Good Morning" .$_POST["name"]." ".$_POST["surname"];
                }
                */

            ?>
    </body>
</html>
<?php
echo "This is My SQL Connection With PHP";
echo "<br>";
$servername="localhost:3307";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
    die("Sorry You are Not connected ".
    mysqli_connect_error());
}
else{ echo ("Connection successful");
}

?>
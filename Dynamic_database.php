<?php

$host="localhost:3307";
$username="root";
$password="";
$conn=mysqli_connect($host,$username,$password);
if(!$conn)
{
    die("Sorry You are Not connected ".
    mysqli_connect_error());
}
if(isset($_POST["Create"]))
{
    $name=$_POST['DN'];
    $dbname=$name;
    $create_db="CREATE DATABASE IF NOT EXISTS $dbname";

if($conn->query($create_db) === TRUE)//Always use triple equaltoo
{
    echo "Database $dbname has been Created";
    echo "<br>";
}
else
{
    echo "Database $dbname could not be Created".
    $conn->error;
    echo "<br>";
}
}

if(isset($_POST["Delete"]))
{
    $name=$_POST['DN'];
    $dbname=$name;
    $drop_db="DROP DATABASE  $dbname";

if($conn->query($drop_db) === TRUE)//Always use triple equaltoo
{
    echo "Database $dbname has been Dropped";
    echo "<br>";
}
else
{
    echo "Database $dbname could not be Dropped".
    $conn->error;
    echo "<br>";
}
}


?>
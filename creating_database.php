<?php
#-> this sign is know as arrow opertor or Object allocator
#for query related error we have to use  $conn(connection name)->error
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

#creating Database
$dbname="imca";
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

#Selecting Database
$conn->select_db($dbname);
if($conn->select_db($dbname)===TRUE)//Always use triple equaltoo
{
    echo "Descended into the Database $dbname";
    echo "<br>";
}
else
{
    echo "Not Descended into the Database $dbname"
    .$conn->error;
    echo "<br>";
}


#Dropping Database
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
?>
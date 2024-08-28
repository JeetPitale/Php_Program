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

#creating databse
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

#select databse
$conn->select_db($dbname);

#creating table
$create_table="CREATE TABLE IF NOT EXISTS STUDENTS
(ID INT(4) AUTO_INCREMENT PRIMARY KEY,
STU_NAME VARCHAR(20) NOT NULL,
REG_DATE TIMESTAMP)";

if($conn->query($create_table) === TRUE)//Always use triple equaltoo
{
    echo "Table has been Created";
    echo "<br>";
}
else
{
    echo "Table could not be Created".
    $conn->error;
    echo "<br>";
}


#Insertion into Table
$insert_record="INSERT INTO STUDENTS 
VALUES('','Jeetzo','2005-11-07')";
if($conn->query($insert_record) === TRUE)//Always use triple equaltoo
{
    echo "Record has been Inserted";
    echo "<br>";
}
else
{
    echo "Record has Not been Inserted".
    $conn->error;
    echo "<br>";
}
?>
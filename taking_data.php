<?php
if(isset($_POST['submit']))
{
    $fname=$_POST['name'];
    $mname=$_POST['middle'];
    $lname=$_POST['last'];
    $email=$_POST['email'];
}
$host="localhost:3307";
$username="root";
$password="";
$dbname="imca";

#creating connection
$con=mysqli_connect($host,$username,$password,$dbname);

#Connection is Stable
if(!$con)
{
    die("Connection is Failed").mysqli_connect_error();
}

#select databse
$con->select_db($dbname);

#Data Entry
$sql="INSERT INTO datas_student(Fname,Lname,Mname,Email) VALUES('$fname','$mname','$lname','$email')";

#Sending Querys
$rs=mysqli_query($con,$sql);
if($rs)
//if($conn->query($sql)===TRUE)
{
    echo "Entries is Added";
}
/*else{
    //For Closing the Connection
    mysql_close($conn);
}*/
?>
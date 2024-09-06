<?php
$host="localhost:3307";
$username="root";
$password="";
$dbname="imca";
$conn=mysqli_connect($host,$username,$password,$dbname);
if(!$conn)
{
    die("Sorry You are Not connected ".
    mysqli_connect_error());
}

#Add
if(isset($_POST['ADD']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];

    $inquery="INSERT INTO DATAS VALUES('$name','$email')";
    if($conn->query($inquery))
    {
        echo "Record is Entered ";
        echo "<br>";
    }
    else{
        echo "Record is Not Entered".$conn->error;
    }
}

#delete
if(isset($_POST['REMOVE']))
{
    $name=$_POST['name'];
    
    $delquery="DELETE FROM DATAS WHERE NAME='$name'";
    if($conn->query($delquery))
    {
        echo "Record is DROPPED ";
        echo "<br>";
    }
    else{
        echo "Record is Not DROPPED".$conn->error;
    }
}

#update
if(isset($_POST['UPDATE']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];

    $upquery="UPDATE DATAS SET EMAIL='$email' WHERE NAME='$name'";//It will only Update Data of Selection (SET) and Not going to update data of Projection(WHERE)
    if($conn->query($upquery))
    {
        echo "Record is UPDATED ";
        echo "<br>";
    }
    else{
        echo "Record is Not UPDATED".$conn->error;
    }
}

#Display
$select="SELECT NAME,EMAIL FROM DATAS";
$result=mysqli_query($conn,$select);

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<br>";
        echo "Name: ".$row['NAME']."Email: ".$row['EMAIL'];
        echo "<br>";
    }
}
?>


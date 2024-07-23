<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
 $textarea=$_REQUEST['textarea'];
    echo "Your Liked Color is  ";
    echo str_replace("\n" ,"<br>",$textarea);
}
//if($_SERVER['REQUEST_METHOD']=='POST')
//{
  // echo "Liked Color is " .$_POST['textarea'];
//}
?>
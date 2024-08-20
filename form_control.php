<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
   $name=$_POST['name'];
   echo "Name is : ".$name;
   echo "<br>";

   echo "Your Hobbies are : ";
   if(isset($_REQUEST['Gaming']))
   {
       echo "Gaming";
       echo "<br>";
   };
   if(isset($_REQUEST['Reading']))
   {
       echo "Reading";
       echo "<br>";
   };
   if(isset($_REQUEST['Nothing']))
   {
       echo "Nothing";
       echo "<br>";
   };
  /* if(isset($_REQUEST['course']))
   {
    echo "Course is : ".$_REQUEST['course'];
    echo "<br>";
   }*/

   $course=$_POST['course'];
   foreach($course as $course1)
   {
    //Incomplete che
    echo $course1;
    echo "<br>";
   }

   $textarea=$_REQUEST['textarea'];
   echo "Your Address is  ";
   echo str_replace("\n" ,"<br>",$textarea);

   
}
?>
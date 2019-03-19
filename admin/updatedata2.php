<?php
if(isset($_POST['submit']))
   {
    
   $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $std = $_POST['std'];
    $city = $_POST['city'];
$id= $_POST['sid'];
    include("../dbcon.php");
    
    echo $id;
    $qry ="UPDATE `studentdata` SET `rollno`='$rollno',`name`='$name',`std`='$std',`addr`='$city' WHERE 'rollno'=$id;";
    
    $run = mysqli_query($con,$qry);
}
?>
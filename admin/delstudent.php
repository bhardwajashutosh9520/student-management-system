<?php
    
     session_start();

if(isset($_SESSION['uid']))
{
    
}
else 
{
    header('location:../login.php');
}
?>

<?php
include("header.php");
?>
<header><nav>
<ul>
    <li><h2><a href="admindash.php" style="text-align:center;">Back</a></h2></li>
    <li><h2 class="c2"><a href="../logout.php" style="text-align:right;">logout</a></h2></li>
</ul>
</nav>
    </header>
<h1 class="c1">delete student information.</h1>


<form action="delstudent.php" method="post">
  <table align="center" border="2">
    <tr>
      <td>Roll number</td><td><input type="number" name="rollno" placeholder="enter roll number"/></td>
      </tr>
      <tr>
      <td>Student name</td><td><input type="text" name="name" placeholder="student name"/></td>
      </tr>
      <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" value="delete" /></td>
      </tr>
    </table>
</form>



<?php
if(isset($_POST['submit']))
{
    $rollno = $_POST['rollno'];
    
    $con = mysqli_connect('localhost','root','','sms');
    
    $qry = "DELETE FROM `studentdata` WHERE rollno='$rollno'";
    
    $run = mysqli_query($con , $qry);
    
    if($run==true)
    {
        ?>
<script>
     alert("Deleted successfully!!");
       window.open("delstudent.php",'_self');
</script>

<?php
    
}
}
?>
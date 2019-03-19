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
<h1 class="c1">Update student information.</h1>

<form action="updatestudent.php" method="post">
  <table align="center" border="2">
    <tr>
      <td>Roll number</td><td><input type="number" name="rollno" placeholder="enter roll number"/></td>
      </tr>
      <tr>
      <td>Student name</td><td><input type="text" name="name" placeholder="student name"/></td>
      </tr>
      <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" value="search" /></td>
      </tr>
    </table>
</form>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        ?>

<table class="admindash2" border="2" align="center" width="80%">
    <tr><td align="center">Roll number</td>
    <td align="center">Name</td>
    <td align="center">Standard</td>
    <td align="center">City</td>
    <td align="center">Edit</td>
    </tr>
<?php
    include('../dbcon.php');
        
        $rollno= $_POST['rollno'];
        $name= $_POST['name'];
        
        $qry="SELECT * FROM `studentdata` WHERE rollno='$rollno' AND name='$name'";
        
        $run = mysqli_query($con,$qry);
        
     while ($data = mysqli_fetch_assoc($run))
        {
         ?>
         
    <tr>
        <td align="center" ><?php echo $data['rollno'];?></td>
        <td align="center"><?php  echo $data['name'];?></td>
        <td align="center"><?php  echo $data['std'];?></td>
        <td align="center"><?php  echo $data['addr'];?></td>
        <td align="center"><a href="updatepage.php?sid=<?php echo $data['rollno'];?>"/>Edit</td>
    </tr>
</table>
<?php
        }
    }
?>
















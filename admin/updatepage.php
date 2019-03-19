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
    <li><h2><a href="updatestudent.php" style="text-align:center;">Back</a></h2></li>
    <li><h2 class="c2"><a href="../logout.php" style="text-align:right;">logout</a></h2></li>
</ul>
</nav>
    </header>
<h1 class="c1">Update student information.</h1>

<form action="updatedata2.php" method="post">
    
    
    <?php
      $id=$_GET['sid'];
         include('../dbcon.php');
    
    $qry = "SELECT * FROM `studentdata` WHERE rollno='$id'";
    
    $run = mysqli_query($con , $qry);
    
    while($data=mysqli_fetch_assoc($run))
    {
  
    ?>
    <form action= "updatedata2.php" method="post">
<table class="admindash2" align="center" width="60%" height="50%" border="2">
    
     <tr>
            <td>Roll Number</td><td><input type="number" name="rollno" placeholder="<?php echo $data['rollno'];?>"/></td>
            </tr>
            <tr>
            <td>Name</td><td><input type="text" name="name" placeholder="<?php echo $data['name'];?>"/></td>
            </tr>
            <tr>
            <td>Standard</td><td><input type="number" name="std" placeholder="<?php echo $data['std'];?>"/></td>
            </tr>
            <tr>
            <td>City</td><td><input type="text" name="city" placeholder="<?php echo $data['addr'];?>"/></td>
            </tr>
            <tr>
        <tr>
            
<td colspan="2" align="center"> 
    <input type="hidden" name="sid" value="<?php echo $data['rollno'];?>"/>
    <input type="submit" name="submit" value="update"/>
            </td>
    </tr>
</table>
</form>
<?php
    }
    ?>

</form>

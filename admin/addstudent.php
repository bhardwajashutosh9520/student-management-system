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

include('header.php');
include('title.php');
?>
<html>
    <head><title></title></head>
    <body>
        <header><nav>
<ul>
    <li><h2><a href="admindash.php" style="text-align:center;">Back</a></h2></li>
    <li><h2 class="c2"><a href="../logout.php" style="text-align:right;">logout</a></h2></li>
</ul>
</nav>
    </header>
<h1 class="c1">Insert student information.</h1>
    <h2 style="border-style:solid;border-color:black;background-color:red;border-radius:5px;">Student Personal Information :</h2>
       <form action='addstudent.php' method='post' enctype="multipart/form-data">

    <table class="admindash2" border="1" align="center" width="80%" height="40%">
    
          <tr>
           <td>Roll number</td>
              <td><input type="number" name="rollno" placeholder="enter roll number" required="required" /></td>
        </tr>
        
                  <tr>
           <td>Full name</td>
                      <td><input type="text" name="name" placeholder="student name" required="required"/></td>
        </tr>
        
                  <tr>
           <td>City</td>
         <td><input type="text" name="city" placeholder="enter the city" required="required"/></td>
        </tr>
             
                  <tr>
           <td>Standard</td>
        <td><input type="number" name="std" placeholder="standard"  required="required"/></td>
        </tr>
             <tr>
           <td>Parents Contact Number</td>
        <td><input type="number" name="pcontact" placeholder="enter phone number"/></td>
        </tr>
           <tr>
           <td align="center" colspan="2"><input type="submit" name="submit" value="submit data" /></td>
        </tr>
        
        </table>
        </form>
        <h2 style="border-style:solid;border-color:black;background-color:red;border-radius:5px;">Result information:</h2>
    </body>
    </html>


<?php

if(isset($_POST['submit']))
{
    
    
    $rollno= $_POST['rollno'];
    $name = $_POST['name'];
    $city= $_POST['city'];
    $std= $_POST['std'];
    $pcontact = $_POST['pcontact'];
    include("../dbcon.php");
    
      $qry = "INSERT INTO `studentdata` VALUES ('$rollno','$name','$std','$city')";
        
        $run = mysqli_query($con , $qry);
        
        if($run==TRUE)
        {
        ?>
<script>
   
    alert("student added successfully");
    window.open("addstudent.php");

</script>
<?php
        }
       
    
    
}
    
?>
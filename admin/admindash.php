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
    <li><h2><a href="../index.php" style="text-align:center;">Back</a></h2></li>
    <li><h2 class="c2"><a href="../logout.php" style="text-align:right;">logout</a></h2></li>
</ul>
</nav>
    </header>

 <h1 class="c1">Welcome at AdminDashboard.</h1>
    
<table class="admindash2" border="2"height="50%" width="60%" align="center" margin-top="0px;">
    <tr><th colspan="3">select an Option.</th></tr>
    <tr>
      <td>1.</td>
        <td class="c4">Insert student information.</td>
      <td><a class="c3" href="addstudent.php">Click here</a></td>
    </tr>
    
     <tr>
      <td>2.</td>
         <td class="c4">Delete student information.</td>
      <td><a class="c3" href="delstudent.php">Click here</a></td>
    </tr>
     
     <tr>
      <td>3.</td>
         <td class="c4">Update Students Information.</td>
      <td><a class="c3" href="updatestudent.php">Click here</a></td>
    </tr>
    </table>
    </body>
</html>
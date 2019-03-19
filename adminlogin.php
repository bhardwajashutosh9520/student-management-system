<?php
   
include('dbcon.php');

if(isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password =  $_POST['pass'];
    
    
    echo $username;
    echo $password;
    
    $query = "SELECT * FROM `admin` WHERE adminname='$username' AND password='$password'";
    $qry= "SELECT * FROM `admin` WHERE adminname="$username" AND password="$password"";
    
    $run = mysqli_query($con,$qry);
     
    $row= mysqli_num_rows($run);
    
    if ($row < 1)
    {
        ?>

        <script>
         alert("username or password not match!!");
            window.open("login.php");
</script>
<?php
            }
    else
    {
        
     
    
    }
    
}
?>
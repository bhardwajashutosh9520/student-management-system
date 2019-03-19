<?php
   session_start();
if(isset($_SESSION['uid']))
{
    echo "you are already log in";
    header('location:admin/admindash.php');
    exit();
}

?>
<html>
<head><title>admin login</title>
    <link rel="stylesheet" type="text/css" href="css/indexstyle.css"/>
    </head>
    <body>
    
    <h2><a href="index.php" style="text-align:center;">Back</a></h2>
   <h1 align="center">Admin Login</h1>

      <form method="post" action="login.php">
          
          <table class="admindash2" align="center" width="50%" border="1">
            <tr>
              <td>username</td>
                <td><input type="text" required="required" name="uname" placeholder="enter username" /></td>
              </tr>
              <tr>
              
              <td>Password</td>
              <td><input type="password" name="pass" placeholder="enter password"/></td>
              </tr>
              <tr><td colspan="2" align="center"><input type="submit" name="login" value="login"/></td></tr>
          
          
          </table>
     </form>
        </body>
</html>

<?php
   
include('dbcon.php');

if(isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password =  $_POST['pass'];
    
    
    
    $query = "SELECT * FROM `admin data` WHERE adminname='$username' AND password='$password'";

    
    $run = mysqli_query($con,$query);
     
    $row= mysqli_num_rows($run);
    
    if ($row < 1)
    {
        ?>

        <script>
         alert("username or password not match!!");
            window.open("login.php",'_self');
</script>
<?php
            }
    else
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
       
        session_start();
        
        $_SESSION['uid']= $id;
        header('location:admin/admindash.php');
        
     
    
    }
    
}
?>
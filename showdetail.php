<html>
<head><title>Student management system.</title>
    
    <link rel="stylesheet" type="text/css" href="css/adminstyle.css"/>
    
    </head>
<body>
<header><nav>
<ul>
    <li><h2><a href="index.php" style="text-align:center;">Back</a></h2></li>

</ul>
</nav>
    </header>
<h1 class="c1">student Detail.</h1>
    </body></html>

    
<?php
    
    if(isset($_POST['submit']))
    {
    $rollno=$_POST['rollno'];
    $std=$_POST['std'];
    
    $con = mysqli_connect('localhost','root','','sms');
        
        $qry = "SELECT * FROM `studentdata` WHERE rollno='$rollno' and std='$std'";
        
        $run = mysqli_query($con , $qry);
        
        $data = mysqli_fetch_assoc($run);
            
?>
    <table class="admindash2" border="2px" align="center" width="60%" height="40%">
        <tr><th  colspan="2">Student detail.</th></tr>
        <tr><td>Name</td><td class="c11"><?php echo $data['name'];?></td></tr>
        <tr><td>Rollnumber</td><td class="c11"><?php echo $data['rollno'];?></td></tr>
        <tr><td>Standard</td><td class="c11"><?php echo $data['std'];?></td></tr>
        <tr><td>City</td><td class="c11"><?php echo $data['addr'];?></td></tr>
</table>
<h2 style="border-style:solid;border-color:black;background-color:red;border-radius:5px;">Result:</h2>
        <table class="admindash2" border="1" align="center" width="60%" height="10%">
            <tr>
            <th>Session : 2016-17(REGULAR) Semesters :  1,2 Result :  CP(0),PASS  Marks :  1462/1800</th>
                <td><a href="show marks.php">click</a></td>
            </tr>
        </table>
        <table class="admindash2" border="1" align="center" width="60%" height="10%">
            <tr>
            <th>Session : 2017-18(REGULAR) Semesters :  1,2 Result :  CP(0),PASS  Marks :  1462/1800</th>
                <td><a href="show marks.php?rollno=<?php echo $data['rollno'];?>">click</a></td>
            </tr>
            <table class="admindash2" border="1" align="center" width="60%" height="10%">
            <tr>
            <th>Session : 2018-19(REGULAR) Semesters :  1,2 Result :  CP(0),PASS  Marks :  1462/1800</th>
                <td><a href="show marks.php">click</a></td>
            </tr>
        </table>

        </table>


        <?php
    
          
    }
    ?>
    
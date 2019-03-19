<!DOCTYPE HTML>
<html>
<head><title>Student management system.</title>
    <link rel="stylesheet" type="text/css" href="css/indexstyle.css"/>

    
    </head>
<body>
             
           <h1 align="center">Welome to Student Management System.</h1>
    <h3><a href="login.php">Login admin</a></h3>
    <form method="post" action="showdetail.php">
    <table class="admindash2" border="1" align="center" width="50%">
        <tr><th colspan="2"><h3>Get Student Information from here</h3></th></tr>
        <tr>
           <td>Standard</td>
            <td><select name="std">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                 </select></td>
        </tr>
        <tr>
            <td>Rollno</td>
            <td><input type="number" name="rollno" placeholder="enter roll no." /></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="show information"/></td>
        </tr>
        
        </table>
            </body></html>
    
    
<!DOCTYPE html>
<html>
<head></head>
<body>
  
<form action="action_page.php" method="GET">
  <input type="submit" value="Submit Survey">
</form>
  
</body>
</html>


<?php
$var = $_GET("TestUser1");
echo ($var);
?>


<?php
// Database connection parameters.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SampleDB";
$user=$_POST['uname'];  
$pass=$_POST['psw']; 
#echo $user.$pass; 

$con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('SampleDB') or die("cannot select DB");
#echo $con; 
$query=mysql_query("SELECT * FROM sampletable WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysql_num_rows($query);  
#echo $numrows;
if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
        $dbusername=$row['username'];  
        $dbpassword=$row['password']; 
    }
    #echo $dbusername.$dbpassword;
    if($user == $dbusername && $pass == $dbpassword)  
    {  
        echo "Valid User .. Successfully Logged In !!";  
    } else {  
        echo "Invalid Username or password!";  
    } 
    }
?>

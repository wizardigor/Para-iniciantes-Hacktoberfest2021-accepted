<?php
if(isset($_SESSION['loginerror']))
{
 unset($_SESSION['loginerror']);
 echo "<script>alert('Wrong username/password combination. Please try 
again.')</script>";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <title>Login</title>
 <link rel="stylesheet" href="style2.css">
 </script>
</head>
<body>
 <center>
 <form class="box" action="" method="post">
 <h1>Login</h1>
 <table>
 <tr>
 <td>
 <label>Enter username: </label>
 </td>
 <td>
 <input type="text" name="username" value="" placeholder="Enter username" 
required>
 </td>
 </tr>
 <tr>
 <td>
 <label>Enter password: </label>
 </td>
 <td>
 <input type="password" name="password" placeholder="Enter password" value="" 
required>
 </td>
 </tr>
 </table>
 <input type="checkbox" name="" value="">
 <label>Stay signed in</label>
 <br>
 <br>
 <input type="submit" name="login_user" value="Login">
 <a href="#">Go back to home page</a>
 </form>
 </center>
</body>
</html>

<?php
session_start();
if(isset($_POST['username']))
{
 $server="localhost";
 $username="root";
 $password="";
 $database="registration";
 $con=mysqli_connect($server,$username,$password,$database);
 if(!$con){
 die("Connection to this database failed due to ".mysqli_connect_error());
 }
 $username1=mysqli_real_escape_string($con,$_POST['username']);
 $password=mysqli_real_escape_string($con,$_POST['password']);
 $query="SELECT * FROM userreg WHERE username='$username1' AND 
password1='$password' LIMIT 1";
 $results=mysqli_query($con, $query);
 $nrows=mysqli_num_rows($results);
 if($nrows==1)
 {
 $_SESSION['username']=$username1;
 $_SESSION['loginsucc']=1;
 }
 else {
 $_SESSION['loginerror']=1;
 header("location: \login.php");
 }
}
?>

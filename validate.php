<?php
$username =$_POST['Username'];
$pass =$_POST['password_1'];
$error= "";
$success ="";

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


mysqli_connect("localhost","root","");
mysql_select_db("sheldoo");

$result = mysql_query("select* from users where Username='$username' and Passwordd ='$password'")
            or die("Failed to query database" .mysql_error());
$row =mysql_fetch_array($result);
if ($row['Username']==$username && $row['Passwordd']==$password){
    echo "Login Successful!!! Welcome" .$row['Username'];

}   else{
  echo"failed to login";
}         
?> 
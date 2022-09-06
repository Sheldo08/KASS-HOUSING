<?php
$db = mysqli_connect('localhost','root','');

mysqli_select_db($db,'sheldoo');

$sql= "DELETE FROM complaints WHERE ID='$_GET[id]'";

if (mysqli_query($db,$sql)){
    header("refresh:1; url=message.php");

}
else {
    echo ("Not Deleted");
}
?>
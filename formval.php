<?php
session_start();
$username="";
$email="";
$errors=array();

$db= mysqli_connect("localhost","root","","sheldoo");

if(isset($_POST['ssubmit'])){
    $name = $_POST['namee'];

    $Email = $_POST['email'];

    $subject = $_POST['subjectt'];

    $message = $_POST['messagee'];

    if (empty($name)) {
        array_push($errors, "Fill Username");
    }
    if (empty($Email)) {
        array_push($errors, "Fill Email");
    }

    else {
        
        $sql="INSERT INTO complaints (namee,email,subjectt,messagee) VALUES ('$name','$Email','$subject','$message')";

        mysqli_query($db,$sql);

        header('location:contact.php');
    }
}

?>

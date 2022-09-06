<?php
session_start();
$db= mysqli_connect("localhost","root","","sheldoo");
if(isset($_POST['submit'])){
    $id = $_SESSION['aptid'];
    $contact = filter_input(INPUT_POST, 'cont');

    $sql = "UPDATE property set Descriptionn = '$desc', Contactt = '$contact'
    WHERE ImagesID = '$id'";
    mysqli_query($db, $sql) or die(mysqli_error($db));
    header('Location: view.php');
}

    


?>
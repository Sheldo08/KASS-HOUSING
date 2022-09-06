<?php
session_start();
$status="";
$price="";
$success=array();

if (isset($_POST['back'])){

  header('Location: admin.php');
}


if(isset($_POST['upload'])){

    $target = "images/".basename($_FILES['image']['name']);

    $db= mysqli_connect("localhost","root","","sheldoo");


    $image = $_FILES['image']['name'];


    $status = $_POST['Statuss'];

    $price = $_POST['Pricee'];

    $bed = $_POST['Bedroomm'];

    $wash = $_POST['Washroomm'];

    $ent = $_POST['Enterprisee'];
   
    $loc =$_POST['Locationn'];

    $des =$_POST['Descriptionn'];

    $con =$_POST['Contactt'];

    $video = $_FILES["video"]["name"];

    $vidfolder = "video/".$video;

    if (empty($status)) {
        array_push($errors, "Fill status");
    }
    if (empty($price)) {
        array_push($errors, "Fill price");
    }
    else{

        $sql="INSERT INTO property (ImageName,Statuss,Pricee,Bedroomm,Washroomm,Enterprisee,Locationn,Descriptionn,Contactt,videoss) VALUES ('$image','$status','$price','$bed','$wash','$ent','$loc','$des','$con','$video')";

        mysqli_query($db,$sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
    
            array_push($success, "Successfully Added");
    
    
        }else{
    
            array_push($success, "Successfully Added");
    
        }
        if (move_uploaded_file($_FILES['video']['tmp_name'], $vidfolder)){
      
      array_push($success, "Successfully Added");

    
        }else{
            $msg = "Error uploading";
        }

    }

}


?>
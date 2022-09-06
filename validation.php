<?php
session_start();
$username="";
$email="";
$errors=array();

$db= mysqli_connect("localhost","root","","sheldoo");

$id = isset($_GET['id']) ? $_GET['id'] : '';
$_SESSION['id'] = $id;
if(isset($_SESSION['userid'])){
    header('Location: properties-single.php');
  }

//signup code

if(isset($_POST['submit'])){
    $username = $_POST['Username'];

    $Email = $_POST['Email'];

    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    $Contact = $_POST['Contact'];
   
    $Gen =$_POST['Gender'];

    if (empty($username)) {
        array_push($errors, "Fill Username");
    }
    if (empty($Email)) {
        array_push($errors, "Fill Email");
    }
    
    if (empty($password_1)) {
        array_push($errors, "Fill Password");
    }

    if ($password_1 != $password_2) {
        array_push($errors,"Password do not match"); 
    }


    else {
        $password=md5($password_1);
        
        $sql="INSERT INTO users (Username,Email,Passwordd,Contact,Gender) VALUES ('$username','$Email','$password','$Contact','$Gen')";

        mysqli_query($db,$sql);

        header('location:login.php');
    }
}


//Login codes

if(isset($_POST['ssubmit'])){
    $username = $_POST['Username'];
    $password = $_POST['Passwordd'];
  
  
    if (empty($username)) {
        array_push($errors, "Username Required");
    }
    if (empty($password)) {
        array_push($errors, "Password Required");
    }
    
    if (count($errors)==0) { 
        $password=md5($password);
        $query="SELECT * FROM users WHERE Username='$username' AND Passwordd='$password'";
        
        $results1= mysqli_query($db,$query);
   
        if ($row=mysqli_fetch_array($results1)) {
            $_SESSION['userid'] = $row['id'];
            header('Location: properties-single.php');
           
         } 
         else{
             array_push($errors,"Wrong Username or Password");
         }
    
    }
  
  
  }

//Upload Codes

if(isset($_POST['upload'])){
    $status = $_POST['Statuss'];

    $price = $_POST['Pricee'];

    $bed = $_POST['Bedroomm'];

    $wash = $_POST['Washroomm'];

    $ent = $_POST['Enterprisee'];
   
    $loc =$_POST['Locationn'];

    $des =$_POST['Descriptionn'];

    $con =$_POST['Contactt'];

    $sql="INSERT INTO property (Statuss,Pricee,Bedroom,Washroomm,Enterprisee,Locationn,Descriptionn,Contactt) VALUES ('$status','$price','$bed','$wash','$ent','$loc','$des','$con')";

    mysqli_query($db,$sql);
        
    header('location:login.php');

}
?>
<?php
session_start(); // start session

$errors=array();

$db= mysqli_connect("localhost","root","","sheldoo");


if(isset($_POST['ssubmit'])){
    $username = $_POST['adminuser'];
    $password = $_POST['adminpassword'];
  
  
    if (empty($username)) {
        array_push($errors, "Username Required");
    }
    if (empty($password)) {
        array_push($errors, "Password Required");
    }
    
    if (count($errors)==0) { 
        $query="SELECT * FROM adminlogin WHERE adminuser='$username' AND adminpassword='$password'";
        
        $results1= mysqli_query($db,$query);
   
        if ($row=mysqli_fetch_array($results1)) {

            header('Location: admin.php');
          
        } 
        else{
            array_push($errors,"Wrong Username or Password");
        }
    
    }
}
  ?>
<!DOCTYPE html>

<style>
	@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --primary-color: #265ec2;
  --secondary-color: #0a1b1b;
  --background-color: #fbfef9;
  --gray-color: #8d8e8e;
  --light-gray-color: #a5b2b9;
  --passive-color: #f2f4f3;
}

body {
  background-color: var(--background-color);
  font-family: "Poppins", sans-serif;
  height: 100vh;
  width: 100vw;
}

input {
  background-color: var(--passive-color);
  padding: 1rem;
  border: 1px solid var(--passive-color);
  border-radius: 14px;
  font-family: "Poppins", sans-serif;
  font-weight: 600;
}

img {
  height: 100%;
  width: auto;
}

.nav-container {
  width: 35%;
  padding: 1rem 0rem 0rem 2rem;
  display: flex;
  justify-content: space-between;
  position: fixed;
  z-index: 99;
  font-weight: 600;
}

.nav-list {
  list-style: none;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 5rem;
}

.nav-items a {
  color: var(--light-gray-color);
  text-decoration: none;
}

.container {
  height: 100%;
  width: 100%;
  display: flex;
  position: relative;
  overflow-x: hidden;
}

.side-panel {
  width: 50%;
  height: 100%;
  display: flex;
  justify-content: end;
}

.background {
  background-image: url(https://images.unsplash.com/photo-1636709133279-f4529ad96089?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb);
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  width: 100%;
  height: 100%;
}

.form-container {
  width: 50%;
  height: 100%;
  padding: 4rem 0rem 4rem 4rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.form-container::after {
  content: "";
  position: absolute;
  left: 49%;
  height: 100%;
  width: 100%;
  background: url(https://svgshare.com/i/ikq.svg);
  background-size: 150%;
}

.form {
  width: 90%;
}

.section-header {
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 0.2rem;
}

.form {
  padding-top: 1rem;
}

.form-input {
  display: flex;
  flex-direction: column;
  width: 80%;
  gap: 1rem;
}

.name-input {
  display: flex;
  width: 100%;
  justify-content: space-between;
  gap: 1rem;
}

.btn-input {
  display: flex;
  width: 100%;
  justify-content: space-between;
  gap: 1rem;
}

.name-input input {
  width: 100%;
}

.primary-btn {
  background-color: var(--primary-color);
  color: white;
  width: 50%;
  padding: 1rem;
  border: none;
  border-radius: 54px;
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  transition: all 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
  cursor: pointer;
}

.primary-btn:hover {
  background-color: #163975;
}

.primary-btn:active {
  background-color: var(--passive-color);
  color: black;
}

.secondary-btn {
  background-color: var(--secondary-color);
  color: white;
  width: 50%;
  padding: 1rem;
  border: none;
  border-radius: 54px;
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  transition: all 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
  cursor: pointer;
}

.secondary-btn:hover {
  background-color: #202020;
}

.secondary-btn:active {
  background-color: var(--passive-color);
  color: black;
}

.primary-heading {
  font-weight: 600;
  font-size: 3rem;
}

.secondary-heading {
  color: var(--light-gray-color);
  font-weight: 600;
  font-size: 1rem;
}

.secondary-text {
  color: var(--gray-color);
  font-weight: 500;
  font-size: 1rem;
}

.login-link {
  color: var(--primary-color);
  text-decoration: none;
}

.fullstop {
  color: var(--primary-color);
}

.logo {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 0.5rem;
}

.circle {
  background: rgb(2, 0, 36);
  background: linear-gradient(
    90deg,
    rgba(2, 0, 36, 1) 22%,
    rgba(38, 94, 194, 1) 63%
  );
  height: 30px;
  width: 30px;
  border-radius: 50%;
}

@media screen and (max-width: 980px) {
  .wave {
    display: none;
  }
  .side-panel {
    display: none;
  }
  .form-container {
    width: 100%;
    padding: 4rem 0rem 4rem 0rem;
  }
  .form-container::after {
    display: none;
  }
  .section-header {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .form-input {
    width: 100%;
  }
  .nav-container {
    width: 100%;
    padding: 2rem;
  }
}
.error {
    width: 92%; 
    color: rgb(0, 0, 0);
    padding: 10px;
    border: 1px solid #ad9444;
    background: rgba(255, 34, 34, 0.933);
  }

@media screen and (max-width: 560px) {
  .name-input {
    flex-direction: column;
  }
  .primary-heading {
    font-size: 1.6rem;
  }
  .nav-container {
    position: relative;
  }
  .nav-list {
    gap: 2rem;
  }

  
}

</style>

<script type="text/javascript">
        function valid(){
            var username=document.getElementById("Username");
            var password_1=document.getElementById("Password");


            if (username.value.trim()==("")){
            alert("Fill Username");
            return false;
            }

            else if (password_1.value.trim()==("")){
            alert("Fill Password");
            return false;
            }

            else{
                return true;
            }
        }
        
    
        </script>
<nav class="nav-container">
  <div class="logo">
    <div class="circle"></div>
    <h2>SheldonHomes<span class="fullstop">.</span></h2>
  </div>

  <ul class="nav-list">
    <li class="nav-items"><a href="">Home</a></li>
  </ul>
</nav>
<section class="container">
  <div class="form-container">
    <div class="section-header">
      <p class="secondary-text">Are You Looking For A Home?</p>
      <h1 class="primary-heading">
        Kindly Login For Property<span class="fullstop">.</span>
      </h1>
      <h2 class="secondary-heading">
        Are you new here? <a class="login-link" href="signup.php">Signup</a>
      </h2>
    </div>

    <form method="post" onsubmit="return valid()" class="form">
    <?php include ('errors.php'); ?>

      <div class="form-input">
        <div class="name-input">
          <input type="text" name="adminuser" id="adminuser" placeholder="Username" />
        </div>
        <input type="password" name="adminpassword" id="adminpassword" placeholder="Password" />

        <div class="btn-input">
          <button type="button" class="secondary-btn">Forgot Password?</button>
          <button type="submit" name="ssubmit" id="ssubmit" class="primary-btn">Login</button>
        </div>
      </div>
    </form>
  </div>
  <div class="side-panel">
    <div class="background"></div>
  </div>
</section>
</html>
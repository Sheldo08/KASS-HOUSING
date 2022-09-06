<?php include ("upvalid.php")?>

<!DOCTYPE html>


<style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
html {
  font-size: 62.5%;
}

body {
  font-family: "Poppins", sans-serif;
  line-height: 1.6;
  color: #1a1a1a;
  font-size: 16px;
  overflow-x: hidden;
}
a {
  color: #2196f3;
  text-decoration: none;
}
.container {
  display: grid;
  grid-template-rows: minmax(min-content, 100vh);
  grid-template-columns: repeat(2, 50vw);
}
.custom-dot {
  color: #2196f3;
}
.signup-container,
.signup-form {
  display: flex;
  flex-direction: column;
  gap: 2rem;
}
.signup-container {
  width: 100vw;
  padding: 10rem 10rem;
  align-items: flex-start;
  justify-content: flex-start;

  grid-column: 1 / 2;
  grid-row: 1;
}
.signup-form {
  max-width: 45rem;
  width: 100%;
}
.text-mute {
  color: #aaa;
}
.heading-primary {
  font-size: 5rem;
}
.input-text {
  font-family: inherit;
  font-size: 1.8rem;
  padding: 3rem 5rem 1rem 2rem;
  border: none;
  border-radius: 2rem;
  background: #eee;
  font-weight: 600;
  width: 100%;
}
.input-text:focus {
  outline-color: #2196f3;
}

.btn {
  padding: 2rem 3rem;
  border: none;
  background: #2196f3;
  color: #fff;
  border-radius: 1rem;
  cursor: pointer;
  font-family: inherit;
  font-weight: 500;
  font-size: inherit;
}
.btn-signup {
  align-self: flex-end;
  width: 100%;
  margin-top: 2rem;
  box-shadow: 0 1rem 2rem #00000025;
}
.btn-signup:active {
  box-shadow: none;
}
.btn-signup:hover {
  background: #2180f9;
}
.inp {
  position: relative;
}
.label {
  pointer-events: none;

  position: absolute;
  top: 2rem;
  left: 2rem;
  color: #00000070;
  font-weight: 500;
  font-size: 1.8rem;

  transition: all 0.2s;
  transform-origin: left;
}
.input-text:not(:placeholder-shown) + .label,
.input-text:focus + .label {
  top: 0.7rem;
  transform: scale(0.75);
}
.input-text:focus + .label {
  color: #2196f3;
}
.f-row {
  display: flex;
  gap: 2rem;
}
.input-icon {
  position: absolute;
  top: 2rem;
  right: 2rem;
  font-size: 2rem;
  color: #00000070;
}
.input-icon-password {
  cursor: pointer;
}

.container {
  display: flex;
}
.heading-secondary {
  font-size: 3rem;
}

.welcome-container {
  background: #eeeeee75;
  grid-column: 2 / 3;
  grid-row: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 10rem;
}
.lg {
  font-size: 6rem;
}
.welcome-container img {
  width: 100%;
  height: 20%;
}

@media only screen and (max-width: 70rem) {
  html {
    font-size: 54.5%;
  }
}

@media only screen and (max-width: 60rem) {
  .signup-container {
    padding: 5rem;
  }
}
@media only screen and (max-width: 40rem) {
  html {
    font-size: 48.5%;
  }

  .input-text:not(:placeholder-shown) + .label,
  .input-text:focus + .label {
    top: 0.6rem;
    transform: scale(0.75);
  }
  .label {
    font-size: 1.9rem;
  }
  .input-wrapper {
    flex-direction: column;
  }
}

@media only screen and (max-width: 1200px) {
  .signup-container {
    grid-column: 1 / 3;
  }
  .welcome-container {
    display: none;
  }
}
.succ {
    width: 92%; 
    color: rgb(0, 0, 0);
    padding: 10px;
    border: 1px solid #ad9444;
    background: green;
}

</style>

<div class="container">
    <main class="signup-container">
      <h1 class="heading-primary">Property Details<span class="custom-dot">.</span></h1>
      <p class="text-mute">Kindly upload property details from here! </p>
      <form method="post" class="signup-form" action='upload.php' enctype="multipart/form-data">
      <?php include ('success.php'); ?>

        <div class="f-row input-wrapper">
          <label class="inp">
            <input type="text" name="Statuss" id="Statuss" class="input-text" placeholder="&nbsp;">
            <span class="label">Status</span>
            <span class="input-icon"><i class="fa-solid fa-address-card"></i></span>
          </label>
          <label class="inp">
            <input type="text" name="Pricee" id="Pricee" class="input-text" placeholder="&nbsp;">
            <span class="label">Price</span>
            <span class="input-icon"><i class="fa-solid fa-address-card"></i></span>
          </label>
        </div>
        <label class="inp">
          <input type="text" name="Washroomm" id="Washroomm" class="input-text" placeholder="&nbsp;">
          <span class="label">Washroom</span>
          <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
        </label>
        <label class="inp">
          <input type="text" name="Bedroomm" id="Bedroomm" class="input-text" placeholder="&nbsp;" id="password">
          <span class="label">Bedroom</span>
          <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span>
        </label>
        <label class="inp">
            <input type="text" name="Enterprisee" id="Enterprisee" class="input-text" placeholder="&nbsp;">
            <span class="label">Enterprise</span>
            <span class="input-icon"><i class="fa-solid fa-address-card"></i></span>
          </label>
          <label class="inp">
            <input type="text" name="Locationn" id="Locationn" class="input-text" placeholder="&nbsp;">
            <span class="label">Location</span>
            <span class="input-icon"><i class="fa-solid fa-address-card"></i></span>
          </label>
          <label class="inp">
            <input type="text" name="Descriptionn" id="Descriptionn" class="input-text" placeholder="&nbsp;">
            <span class="label">Description</span>
            <span class="input-icon"><i class="fa-solid fa-address-card"></i></span>
          </label>
          <label class="inp">
            <input type="tel" name="Contactt" id="Contactt" class="input-text" placeholder="&nbsp;">
            <span class="label" name="Contactt" id="Contactt">Contact</span>
            <span class="input-icon" name="Contactt" id="Contactt"><i class="fa-solid fa-address-card"></i></span>
          </label>

          <label class="inp">
            <input type="file" name="image" id="image" class="input-text" accept="image/*" placeholder="&nbsp;">
            <span class="label" >Upload Photo</span>
            <span class="input-icon" ><i class="fa-solid fa-address-card"></i></span>
          </label>

          <label class="inp">
            <input type="file" name="video" id="video" class="input-text" accept="video/*" placeholder="&nbsp;">
            <span class="label" >Upload Video</span>
            <span class="input-icon" ><i class="fa-solid fa-address-card"></i></span>
          </label>
        <button type="submit" name="upload" id="upload" class="btn btn-signup">Upload</button>

        <button type="submit" name="back" id="back" class="btn btn-signup">Home</button>

      </form>
    </main>
    <div class="welcome-container">
      <h1 class="heading-secondary">Welcome to <span class="lg">Sheldon's Estate!</span></h1>
      <img src="https://egov.eletsonline.com/wp-content/uploads/2020/03/Housing-for-All.jpg" alt="">
    </div>
  </div>
</html>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Riya Creation</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="panda">
  <div class="ear"></div>
  <div class="face">
    <div class="eye-shade"></div>
    <div class="eye-white">
      <div class="eye-ball"></div>
    </div>
    <div class="eye-shade rgt"></div>
    <div class="eye-white rgt">
      <div class="eye-ball"></div>
    </div>
    <div class="nose"></div>
    <div class="mouth"></div>
  </div>
  <div class="body"> </div>
  <div class="foot">
    <div class="finger"></div>
  </div>
  <div class="foot rgt">
    <div class="finger"></div>
  </div>
</div>
<form action="login.php" method="post">
  <div class="hand"></div>
  <div class="hand rgt"></div>
  <h1>Panda Login</h1>
  <div class="form-group">
    <input required="required" name="name" class="form-control"/>
    <label class="form-label">Username    </label>
  </div>
  <div class="form-group">
    <input id="password" type="password" name="password"  required="required" class="form-control"/>
    <label class="form-label">Password</label>
    <p class="alert">Invalid Credentials..!!</p>
    <button class="btn" type="submit" name="btn">Login </button><br>  
   
    
    <a href="contact.php"><button type="button" class="btn">Forgot password???</button>
      </a><br>
 

    <a href="contact.php"><button  type="button" class="btn">Create new Account </button></a>
  
  
</div>  
  </form>



<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>

</body>
</html>


<?php
include 'conn.php';
if (isset($_POST['btn'])) {
$username = $_POST['name'];
$password = $_POST['password'];


//Query the database for user
$sql="SELECT * from users where username = '$username' and pass = '$password'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
 if($row['username'] == $username && $row['pass'] == $password) {
    echo "Login Succcessful  Welcome ".$row['username'];
    header("Refresh:1; url=index.html");
 }       
    }
} else {
    echo "Login failed Incorrect Username or Password Kindly recheck your username or password";
}
}
?>
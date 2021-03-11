   <?php
    include("connection.php");
    session_start();
    error_reporting(0);
    ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  margin: 0px;
  height: 100;
  width:100;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

.form1
    {
      width:500px;
      margin: -50px 850px;
    }

</style>
</head>
<body background="login.jpg">

<h2>Login Form</h2>
 <div class="form1">
 <form action ="" method="POST">
  <div class="imgcontainer">
    <img src="logo.jpg" alt="Avatar" class="avatar" height="200" width="5">
  </div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required size="100">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit"  name="login" value="login">Login</button> 
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:transparent">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>
</body>
</html>


 <?php
      # code...
    

if(isset($_REQUEST['login'])){
    if(($_REQUEST['email']=="") || ($_REQUEST['psw']=="")){
        echo "enter the required fields";
        //echo $email;
    }
    else{
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['psw'];

        
    
        $sql = "SELECT * FROM registration WHERE email  = '$email' and psw= '$pass'";
        $result=mysqli_query($conn,$sql);
        echo $email;
        echo $pass;
        echo $result;
        echo $sql;
       
        
        if(mysqli_num_rows($result)==true){
             echo "success";
            // session_start();
            $_SESSION['email']=$email;
            header('location:registration.html');

        }else{
            //echo "failed";
            /*
        $sql = "SELECT * FROM admin WHERE email  = '$email' and pass = '$pass'";
        $result=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)==true){
             echo "success";
              session_start();
            $_SESSION['email']=$email;
            header('location:dashboardadmin.php');
          
          */
        
          if($email=='admin@gmail.com' && $pass='123')
          {
            echo "SUCCESSSS";
            header('location:dashboardadmin.php');

          }

        

           // $_SESSION['email']=$email;
           // header('location:dashboardadmin.html');
        }
      }
        
       }
    


?>
        
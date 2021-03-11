 <?php
    include("connection.php");
    error_reporting(0);
    ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  font-family: Calibri, Helvetica, sans-serif;
  background-color: pink;
}
.container {
    padding: 30px;
  background-color: ;
  height: ;
  width: ;
}

input[type=text], input[type=password], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: orange;
  outline: none;
}
 div {
            padding: 10px 0;
         }
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
.form1
    {
      width:500px;
      margin: 0px 400px;
    }
    body {
  background-image: url("registar.jpg");
  background-repeat: no-repeat;
}

</style>
</head>
<body  >
  <div class="form1">
<form>
  <div class="container">
  <center>  <h1>Registeration Form</h1> </center>
  <hr>
  <label> Full Name </label> 
<input type="text" name="name" placeholder= "Enter Full name" size="15" name="name" required /> 
<label> Email: </label> 
<input type="text" name="email" placeholder="Enter Your Email id" size="30" name="email" required /> 
<label> Password: </label>  
<input type="password" name="psw" placeholder="Enter Your password" size="15" required /> 
<label for="psw-repeat"><b>Re-type Password</b></label>  
    <input type="password" placeholder="Retype Password" name="pswrepeat" required>  


<div>
<label> 
Gender :
</label><br>
<input type="radio" value="Male" name="gender" checked > Male 
<input type="radio" value="Female" name="gender"> Female 
<input type="radio" value="Other" name="gender"> Other

</div>
<label> 
Phone :
</label>
<input type="text" name="countrycode" placeholder="Country Code"  value="+91" size="2"/> 
<input type="text" name="phone" placeholder="phone no." size="10"/ required> 
Current Address :
<textarea cols="80" rows="5" placeholder="Current Address" value="address" name="address" required></textarea>
 
    <button type="submit" class="registerbtn" name="submit">Register</button>   

</div>

</form>
</div>
</body>
</html>

 <?php
     if (isset($_REQUEST['submit'])) {
       # code...
     

    $n=$_REQUEST['name'];
    $e=$_REQUEST['email'];
    $psw=$_REQUEST['psw'];
    $rpsw=$_REQUEST['pswrepeat'];
    $g=$_REQUEST['gender'];
    $p=$_REQUEST['phone'];
    $ad=$_REQUEST['address'];
    
    

    
    echo "$n";
    //echo "$gender";
    //echo "$phone";
    //echo "$email";
    echo "$psw";
    
    

    $query="INSERT INTO registration (name, email, psw, pswrepeat,gender,phone,address) VALUES ('$n','$e','$psw','$rpsw','$g','$p','$ad' )";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo"Successfully Donate";
    }
    else
    {
        echo "faild to data in databases";
    }

  }
    ?>



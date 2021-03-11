<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<style>
body {
  font-family: Arial;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=time], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color:;
  padding: 20px;
}
header {
  background-color: transparent;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: crimson;
}
.form1
    {
      width:500px;
      margin: -10px 100px;
    }

</style>
<body background="bike3.jpg">
  <header>
  <h2>APNA RENTAL CAR & BIKE RENT SERVICE </h2>
</header>

<div class="form1">
<h1>FOR BIKE</h1>
<p>All field are required:</p>

<div class="container">
  <form >
    <label for="yname">Your Name</label>
    <input type="text" id="yname" name="name" placeholder="Your full name..">

    <label for="lname">Location</label>
    <input type="text" id="lname" name="location" placeholder="Location name where u want to pick a Bike">

    <label for="pickup">Pickup Time and Date</label>
    <input type="Time" name="pictime" >
    <input type="Date" name="picdate" >

    <label for="return">Return Time and Date</label>
    <input type="Time" name="rettime" placeholder="Enter Time">
    <input type="Date" name="retdate" placeholder="Enter Date">

    <label for="Bike">Choose Bike Name</label>
    <select id="country" name="bname">
      <option value="200">SCOOTY 200Rs/DAY</option>
      <option value="200">HONDA SHINE 200Rs/DAY</option>
      <option value="300">FZ YAMHA 300Rs/DAY</option>
      <option value="300">HORNET HONDA 300Rs/DAY</option>
      <option value="250">PULSER BAZAJ 250Rs/DAY</option>
      <option value="450">DOMINAR BAZAJ 450Rs/DAY</option>
      <option value="500">ROYAL ENFIELD 500Rs/DAY</option>
    </select>
  
    <input type="submit" name="submit" value="submit" >
  </form>
</div>
</div>
</body>
</html>

<?php
     if (isset($_REQUEST['submit'])) {
       # code...
     

    $n=$_REQUEST['name'];
    $e=$_REQUEST['location'];
    $psw=$_REQUEST['pictime'];
    $rpsw=$_REQUEST['picdate'];
    $g=$_REQUEST['rettime'];
    $p=$_REQUEST['retdate'];
    $ad=$_REQUEST['bname'];
    
    

    
    echo "$n";
    //echo "$gender";
    //echo "$phone";
    //echo "$email";
    echo "$psw";
    
    

    $query="INSERT INTO bike (name, location, pictime, picdate, rettime, retdate,   bname) VALUES ('$n','$e','$psw','$rpsw','$g','$p','$ad' )";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo"Successfully Donate";
        header('location:afterbike.php');
    }
    else
    {
        echo "faild to data in databases";
    }

  }
    ?>




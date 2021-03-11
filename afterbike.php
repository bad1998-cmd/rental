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
  color: white;
}
.form1
    {
      width:500px;
      margin: -50px 850px;
    }

</style>
<body background="bike.jpg">
  <marquee behavior="alternate"  scrollamount="10" Bouncing > <header>
  <h2>APNA RENTAL CAR & BIKE RENT SERVICE </h2>
</header></marquee>

  

<div class="form1">
<h1>FOR BIKE</h1>
<p>All field are required:</p>

<div class="container">
  <form action="" method="POST" enctype="multipart/form-data">
    <label for="yname">Your Uid Number</label>
    <input type="text" id="yname" name="unum" placeholder="Enter Your Valid UID number of 16 length" size="16">

    <label for="lname">Enter Your Driving Licence Number</label>
    <input type="text" id="lname" name="lnum" placeholder="Enter Your DL number" size="16">

     <label for="lname">Enter Your Driving Licence IMAGE</label><br><br>
     <label for="lname">Enter Your First Side of Driving Licence IMAGE</label><br>
    <input type="file" id="lname" name="dl1"><br><br>

    <label for="lname">Enter Your Second Side of Driving Licence IMAGE</label><br>
    <input type="file" id="lnam" name="dl2"><br><br>

    <label for="lname">Input Your Image</label><br>
    <input type="file" id="lnam" name="img"><br><br>

   

    <label for="lname">Purpose</label><br>
    <input type="text"  name="need"><br><br>

     


   
  
    <input type="submit" name="submit" value="submit">
  </form>
</div>
</div>
</body>
</html>


<?php
     if (isset($_POST['submit'])) {
       # code...
     

    $n=$_POST['unum'];
    $genre=$_POST['lnum'];
    $_dl1image=$_FILES['dl1']['name'];
    $_dl2image=$_FILES['dl2']['name'];
    $_image=$_FILES['img']['name'];
    
    $episode=$_POST['need'];

    //$name=$_FILES['web_video'];
    //echo "<pre>";
    //print_r($name);
    //exit();

    //$File_name=$_FILES['web_video']['video'];
    //$File_name=$_FILES['web_video']['type'];
    $temp1=$_FILES['dl1']['tmp_name'];
    $temp2=$_FILES['dl2']['tmp_name'];
    $temp3=$_FILES['img']['tmp_name'];
    

    //$File_size=$_FILES['web_video']['size'];
    $file_destination1="dl1/";
    $address1=$file_destination1.$_dl1image;

    $file_destination2="dl2/";
    $address2=$file_destination2.$_dl2image;

    $file_destination3="img/";
    $address3=$file_destination3.$_image;

    


    move_uploaded_file($temp1, $file_destination1.$_dl1image);
    move_uploaded_file($temp2, $file_destination2.$_dl2image);
    move_uploaded_file($temp3, $file_destination3.$_image);


    

    $_dl1image=$_FILES['dl1']['name'];
          $query="INSERT INTO afterbike (unum, lnum, dl1, dl2, img,need) VALUES ('$n','$genre','$_dl1image','$_dl2image','$_image','$episode')";
    

    if(mysqli_query($conn,$query))
    {
        echo "Successfully Donate";
        header('location:payment.html');
    }
    else
    {
        echo "faild to data in databases";
    }

   



    

    //$query="INSERT INTO video_tbl (web_name, web_genre, web_episode, web_duration, web_rating,web_image,web_video) VALUES ('$n','$genre','$episode','$duration','$rating','$image','$video')";
    //$data=mysqli_query($conn,$query);

    //if($data)
    //{
      //  echo"Successfully Donate";
    //}
    //else
    //{
      //  echo "faild to data in databases";
   // }

  }
    ?>

<?php
include('control/db.php');
session_start();
?>


<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


<!DOCTYPE HTML>
<html>
    <body>
    <style>
      div {
        margin-bottom: 10px;
      }
      label {
        display: inline-block;
        width: 110px;
      }
      input {
        padding: 5px 10px;
      }
    </style>
        <h1 style="font-family:times new roman; font: size 60px;">Personal Details</h1><br><hr>
        <form action="Page2.php" method="POST">
        <div><label>User Name:</label>   <input onkeypress="return /[a-z]/i.test(event.key)" name="uname"><br></div>
        <div><label>Password:</label>    <input type="password" value="password" id="myInput">
                                         <input type="checkbox" onclick="myFunction()">Show Password<br></div>
        <div><label>Full Name:</label>   <input type="text" name="fullName" size=20><label for="fullName"></label><br><div>                                
        <div><label>Mobile No.:</label>  <input type="number" name="mobile"><label for="mobile"></label><br></div>
        <div><label>Date of Birth:</label> <input type="date" name="dob"><label for="dob"></label><br><div>
                                         <input type="submit" name="submit" value="Next">




</form>


</body>
</html>
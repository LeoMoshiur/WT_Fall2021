<?php
$validationmessage1="";
$validationmessage2="";
$validationmessage3="";
$validationmessage4="";
if(isset($_POST["registration"]))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $email=$_POST["email"];


    if(empty($fname)){
        $validationmessage1= "Please fill field";
    }
    else
    {
        echo "Welcome ".$fname;
    }
    if(empty($lname)){
        $validationmessage1= "Please fill field";
    }
    else
    {
        echo "How can we help you Mr/Mrs ".$lname;
    }
    if(empty($age)){
        $validationmessage2="Enter valid age";
    }
    else
    {
        echo "Age: ".$age;
    }
    
    
}

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
        <h1 style="font-family:times new roman; font: size 60px;">Registration Form</h1><br><hr>
        <form action="get/info.php" method="POST">
        <div><label>First Name:</label>   <input onkeypress="return /[a-z]/i.test(event.key)" name="fname"><br></div>
        <div><label>Last Name:</label>    <input onkeypress="return /[a-z]/i.test(event.key)" name="lname"><br></div>
        <div><label>Age:</label>          <input type="number" id="age" name="age" min="1" max="99"><br></div>
        <div><label>Designation:</label>  <input type="radio" id="jp" name="designation" value="JP"><label for="JP">Junior Programmer</label>
                                          <input type="radio" id="sp" name="designation" value="SP"><label for="SP">Senior Programmer</label>
                                          <input type="radio" id="pl" name="designation" value="PL"><label for="PL">Project Lead</label><br></div>
        <div><label>Preferred Language:</label>
                                         <input type="checkbox" id="java" name="prefLang" value="java"><label for="java">JAVA</label>
                                         <input type="checkbox" id="php" name="prefLang" value="php"><label for="php">PHP</label>
                                         <input type="checkbox" id="cpp" name="prefLang" value="cpp"><label for="cpp">C++</label><br></div>
        <div><label>Email:</label>       <input type="email" name="email" size=30><br></div>
        <div><label>Password:</label>    <input type="password" value="password" id="myInput">
                                         <input type="checkbox" onclick="myFunction()">Show Password<br></div>
        Please choose a file             <input type="submit" name="file" value="Choose file"><br><br>
                                         <input type="submit" name="submit" value="Submit">
                                         <input type="reset" name="reset" value="Reset"> 



        <?php echo $validationmessage1; ?> <br>
</form>


</body>
</html>
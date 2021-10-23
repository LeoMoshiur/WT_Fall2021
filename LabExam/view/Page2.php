<?php
session_start();
?>



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
        <h1 style="font-family:times new roman; font: size 60px;">Education</h1><br><hr>
        <form action="Page1.php" method="POST">
        <div><label>University:</label>   <input onkeypress="return /[a-z]/i.test(event.key)" name="uniName"><label for="uniName"></label><br></div>
        <div><label>Degree:</label>    <input type="text" name="degree"><label for="degree"></label><br><div>
        <div><label>Major:</label>   <input type="text" name="major" size=10><label for="major"></label><br><div>                                
        <div><label>Results:</label>  <input type="number" name="result"><label for="result"></label><br></div>
        <div><label>Passing Year:</label> <input type="date" name="pYear"><label for="pYear"></label><br><div>
                                         <input type="submit" name="submit" value="Submit">




</form>


</body>
</html>
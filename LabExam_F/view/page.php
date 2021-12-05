<?php
include('../control/db.php');
?>


<!DOCTYPE HTML>
<html>
  <head>
  <script src="control/myjs.js"></script> 
  </head>
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
        <h1 style="font-family:times new roman; font: size 60px;">Search Employee</h1><br><hr>
        <div class=Search>
        <form action="myform" method="main.php">
        <div><label>Search by ID:</label>   <input type="text" name="id" size=4><br></div>
        <div><label>Search by Name:</label> <input type="text" name="name"> <br></div>
        <div><label>Search by Salary:</label><br>
        <label>Minimum </label><input type="number" name="min"><br>
        <label>Maximum </label><input type="number" name="max"><br></div>
        <input name="submit" type="submit" value="Search" onclick="ajax()">
</form>
<p id="try"></p>

    </div><br>



</body>
</html>
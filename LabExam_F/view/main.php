<?php
include "../control/db.php";


$name=$min=$max="";
$connection = new db();
$conobj=$connection->OpenCon();


if($_SERVER["REQUEST_METHOD"]=="POST")
{
$id= $_REQUEST["id"];
setcookie("id",$id,time()+3600*24);
$name= $_REQUEST["name"];
setcookie("name",$name,time()+3600*24);
$min= $_REQUEST["min"];
setcookie("min",$min,time()+3600*24);
$max= $_REQUEST["max"];
setcookie("max",$max,time()+3600*24);

if(empty($_REQUEST["name"]) && empty($_REQUEST["min"]) && empty($_REQUEST["max"]))
{
    $userQuery=$connection->CheckUser($conobj,"employee",$id);

    if ($userQuery->num_rows > 0) {
        echo "<form action='' method='post'>";
        // output data of each row
        while($row = $userQuery->fetch_assoc()) {
          echo "ID : <input type='text' name='id' value=".$row["ID"]." > <br>";
          echo "Name : <input type='text' name='name' value=".$row["Name"]." ><br>";
          echo "Department : <input type='text' name='department' value=".$row["Department"]." ><br>";
          echo "Join Date: <input type='text' name='jdate' value=".$row["JoiningDate"]." ><br>";
          echo "Salary : <input type='text' name='sal' value=".$row["Salary"]." ><br>";
          
        }
       } else {
        echo "No Employee Found";
      }   
}
elseif (empty($_REQUEST["min"]) && empty($_REQUEST["max"]))
{    
  $userQuery=$connection->CheckUser($conobj,"employee",$id);

    if($userQuery->num_rows > 0){
    
        // output data of each row
        echo "<form action='' method='post'>";
        while($row = $userQuery->fetch_assoc()) {
          echo "ID : <input type='text' name='id' value=".$row["ID"]." > <br>";
          echo "Name : <input type='text' name='name' value=".$row["Name"]." ><br>";
          echo "Department : <input type='text' name='department' value=".$row["Department"]." ><br>";
          echo "Join Date: <input type='text' name='jdate' value=".$row["JoiningDate"]." ><br>";
          echo "Salary : <input type='text' name='sal' value=".$row["Salary"]." ><br>";         
        }
       } else {
        echo "No Employee Found";
      }
}
else{  
$userQuery=$connection->CheckINS($conobj,"employee",$id,$name,$minimum,$maximum);

if ($userQuery->num_rows > 0) {
    echo "<form action='' method='post'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "ID : <input type='text' name='id' value=".$row["ID"]." > <br>";
      echo "Name : <input type='text' name='name' value=".$row["Name"]." ><br>";
      echo "Department : <input type='text' name='department' value=".$row["Department"]." ><br>";
      echo "Join Date: <input type='text' name='jdate' value=".$row["JoiningDate"]." ><br>";
      echo "Salary : <input type='text' name='sal' value=".$row["Salary"]." ><br>"; 
    }
   } else {
    echo "No Employee Found";
  }
}
}
?>
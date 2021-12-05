<?php
class db{
 
function OpenCon()
 {
 $dbhost = "127.0.0.1:3307";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }

 function Search($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ".$table." WHERE Name='".$name."' AND ID='".$id."' AND Salary between min='".$min."' and max='".$max."'");
 return $result;
 }

 function SearchbyID($conn,$table,$id)
 {
$result = $conn->query("SELECT * FROM $table WHERE ID ='$id' ");
 return $result;
 }

 function SearchbyName($conn,$table,$name)
 {
$result = $conn->query("SELECT * FROM $table WHERE Name ='$name' ");
 return $result;
 }

 function SearchbySal($conn,$table,$min, $max)
 {
$result = $conn->query("SELECT * FROM $table WHERE Salary between min='$min' and max='$max' ");
 return $result;
 }



function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
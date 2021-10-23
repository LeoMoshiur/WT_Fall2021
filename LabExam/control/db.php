<?php
class db
{

    function OpenCon()
    {

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "CV";

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            return $conn;
        }
    }

    function InsertValue($conn, $username, $password, $FullName, $mobile, $dob, $uni, $degree, $major, $result, $pyear)
    {
        $sql = "INSERT INTO `Employee` (`username`, `password`, `fullname`, `Mobile`, `DOB`, `University`, `Degree`, `Major`, `Result`, `Passing Year`)
         VALUES ('$username', '$password', '$FullName', '$mobile', '$dob', '$uni', '$degree', '$major', '$result', '$pyear') ";

        $done = $conn->query($sql);
        return $done;
    }

    function CloseCon($conn)
    {
        $conn->close();
    }
}
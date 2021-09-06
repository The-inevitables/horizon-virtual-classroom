<?php

include 'db.php';

$firstname =  $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email =  $_POST['email']; 
$subject =  $_POST['subject'];
$password =  $_POST['password'];


$params = array($firstname,$lastname,$email,$subject,$password);
$sql="INSERT INTO teachers (firstname,lastname, email, subject, password)
VALUES ( ?,?,?,?,?)";

$stmt = sqlsrv_query($conn, $sql, $params);
if ($stmt === false) {  
    echo "Row insertion failed.\n";  
    die(print_r(sqlsrv_errors(), true));  
} else {  
    header('location: ../teacherlogin.php');  
} 

?>
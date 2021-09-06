<?php

include 'db.php';

$firstname =  $_POST['firstname'];
$lastname =  $_POST['lastname']; 
$school =  $_POST['school'];
$class =  $_POST['class'];
$email =  $_POST['email'];
$password =  $_POST['password'];


$params = array($firstname,$lastname,$school,$class,$email,$password);
$sql="INSERT INTO students (firstname,lastname,school,class,email, password)
VALUES ( ?,?,?,?,?,?)";

$stmt = sqlsrv_query($conn, $sql, $params);
if ($stmt === false) {  
    echo "Row insertion failed.\n";  
    die(print_r(sqlsrv_errors(), true));  
} else {  
    header('location: ../studentlogin.php');  
} 

?>
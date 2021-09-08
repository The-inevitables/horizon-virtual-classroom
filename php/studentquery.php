<?php
include 'db.php';

    $tsql= "SELECT * FROM students";
    $getResults= sqlsrv_query($conn, $tsql);
   
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     
     echo ("<tr><td>" .$row['firstname'] . " ". $row['lastname'] . "</td><td> " . $row['class']. "</td></tr>" . PHP_EOL);
     echo('<br>');
     
    }
    sqlsrv_free_stmt($getResults);
?> 


<H1> SQL CONNECTION TEST </H1>

<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

echo time()."<br>";


$conn = sqlsrv_connect($serverName,$connectionOptions);

if($conn===FALSE){
    echo ("connection failed");
}
else {
    echo ("connection succeeded");
}


?>



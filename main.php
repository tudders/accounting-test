<H1> SQL CONNECTION TEST </H1>

<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

echo time()."<br>";

$serverName = "accounting-test.database.windows.net";
$connectionOptions = array("Database"=>"accounting-test",
                                    "Uid" => "tudders",
                                    "PWD"=>"Ioio1010"
                                    );

$conn = sqlsrv_connect($serverName,$connectionOptions);

if($conn===FALSE){
    echo ("connection failed");
}
else {
    echo ("connection succeeded");
}


?>



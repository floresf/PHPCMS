<?php 

// create array to hold db credentials
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'cms';

foreach( $db as $key => $value ) {
    //uppercase each value in db array, and uppercase cause of syntax
    define( strtoupper($key), $value ); 
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


//$connection = mysqli_connect($db_user, 'root', '', 'cms');
/*

if( $connection ) {
    echo "we are connected!";
}
*/

?>
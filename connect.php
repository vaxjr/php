<?php
/**
 * Connect to the local database.
 * For practical applications, replace the sample text with real 
 * world values. For example: 
 *  $host can be a hostname 'my_host' or IP address '127.0.0.1'
 *    For remote connections add a port number such as 3306.
 *  $dbName is the name of the database such as 'my_db'
 *  $dbUser is your database user name such as 'lois_lane'
 *  $dbPwd is your database password such as 'dailyPlan3t!'
 *    For a secure remote connection, prompt the user for a password.
 */
$host = 'localhost';
$dbUser = 'root';
$dbPwd = 'root';
$dbName = 'test';
 
/** 
* Connect using the mysqli_connect function. Include required parameters.
*/
$connection = mysqli_connect($host, $dbUser, $dbPwd, $dbName)or die(mysql_error());

/**
* Make sure the connection succeeded. If the connection failed, 
* display an error message.
*/
if (!$connect) {
    echo 'Error. Unable to connect to ' . $dbName . PHP_EOL;
    echo 'Debugging error number: ' . mysqli_connect_errno() . PHP_EOL;
    echo 'Debugging error text: ' . mysqli_connect_error() . PHP_EOL;
    exit;
}

/**
* If the connection is made, display a success message.
*/
echo 'Success. Connected to:' . $dbName . PHP_EOL;
echo 'Host info: ' . mysqli_get_host_info($connect) . PHP_EOL;

/**
* If you are done using the connection, close it using the mysqli_close function.
*/
mysqli_close($connect);
?>

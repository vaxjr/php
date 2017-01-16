<?php
/**
 * Connect to the local database and delete records from a table.
 */
$host = 'localhost';
$dbUser = 'root';
$dbPwd = 'root';
$dbName = 'test';
 
/** 
 * Connect to the database and indicate that changes are on the way. 
 * Include required parameters.
 */
$connection = new mysqli($host, $dbUser, $dbPwd, $dbName);

/** 
 * Check the connection and display an error message if the connection fails.
 */
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

/** 
 * Delete a row from the table if the email or domain value includes GitHub.
 */
$sql = "DELETE FROM myteam WHERE email LIKE '%github%' OR domain LIKE '%github%' ";

/** 
 * Display the number of rows affected by the previous operation.
 */
int $mysqli->affected_rows;

/**
 * Display a success or error message.
 */
if ($connection->query($sql) === TRUE) {
    echo 'Record successfully deleted.';
} else {
    echo 'Error deleting record: ' . $connection->error;
}

/**
* Close the connection.
*/
mysqli_close($connection);
?>
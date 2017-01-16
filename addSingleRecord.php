 <?php
 /**
 * Connect to the local database and add a single record to a table.
 */
$host = 'localhost';
$dbUser = 'root';
$dbPwd = 'root';
$dbName = 'test';

/** 
 * Connect to the database and indicate that new content is on the way. 
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
 * Use the SQL INSERT INTO command to add a row per team member into the table.
 * Each INSERT INTO command needs the name of the table, the names of the fields, 
 * and the value for each field. To leave a field blank, use quote marks with no 
 * text or space between the quotes.
 */
$mysqli = "INSERT INTO myteam (lastname, firstname, email, domain)
VALUES ('Luthor', 'Lex', 'lex@krypton.com', 'GitHub')";

/** 
 * Display a success message if the operation succeeded.
 * Display an error message if the operation failed.
 */
if ($connection->query($mysqli) === TRUE) {
    echo 'Success. One record added.';
} else {
    echo 'Error: ' . $sql . '<br>' . $connection->error;
}

/**
* Close the connection.
*/
mysqli_close($connection);
?> 
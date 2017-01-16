 <?php
 /**
 * Connect to the local database and create a table.
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
* Use SQL to create table called myteam. Table includes and id, lastname,
* firstname, email, domain, and date.
*/
// sql to create table
$sql = 'CREATE TABLE myteam (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
lastname VARCHAR(24) NOT NULL,
firstname VARCHAR(24) NOT NULL,
email VARCHAR(48),
domain VARCHAR(24),
reg_date TIMESTAMP
)';

/** 
 * Check table creation and display an error message if the table is not created.
 */
if ($connection->query($sql) === TRUE) {
    echo 'Successfully created table.';
} else {
    echo 'Error creating table: ' . $connection->error;
}

/**
* Close the connection.
*/
mysqli_close($connection);
?> 
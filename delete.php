<?php
include 'env.php';

// 1. connect to DB
$dbc = new mysqli($dbHost, $dbUser, $dbPass);
$dbc -> select_db($dbName);
// Check connection
if ($dbc -> connect_error) {
    die("Connection failed: " . $dbc -> connect_error);
}

// 2. execute query
$sql = "DELETE FROM users WHERE id={$_GET['id']}";
$result = $dbc -> query( $sql );

if ( $result ) {
    echo "query executed successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbc -> error;
}

// 3. close connection
$dbc -> close();
?>
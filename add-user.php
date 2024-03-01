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
$sql = "INSERT INTO users(userName,firstName,lastName,password)
 VALUES('h1234','hamid','ghaderi','1234'),
        ('a1245','ali','jamali','4579'),
        ('p4187','parham','asadi','1545'),
        ('a7914','amir','radmehr','5458')";
$result = $dbc -> query( $sql );

if ( $result ) {
    echo "query executed successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbc -> error;
}

// 3. close connection
$dbc -> close();
?>
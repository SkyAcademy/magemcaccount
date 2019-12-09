<?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'sql2.freemysqlhosting.net';
$DATABASE_USER = 'sql2315015';
$DATABASE_PASS = 'bM2%kQ8*';
$DATABASE_NAME = 'sql2315015';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

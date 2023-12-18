<?php
// Load the database connection information from environment variables or ConfigMap
$hostName = getenv("DB_HOST") ?: die("DB_HOST environment variable not set");
$dbUser = getenv("DB_USER") ?: die("DB_USER environment variable not set");
$dbPassword = getenv("DB_PASSWORD") ?: die("DB_PASSWORD environment variable not set");
$dbName = getenv("DB_NAME") ?: die("DB_NAME environment variable not set");

// Create a connection to the database
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

// Check the connection
if (!$conn) {
    die("Something went wrong: " . mysqli_connect_error());
}
?>
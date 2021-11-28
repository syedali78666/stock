<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database configuration
$dbHost     = "localhost";
$dbUsername = "root"; //your mysql DBMS username 
$dbPassword = "12345"; //your mysql DBMS password
$dbName     = "stock";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

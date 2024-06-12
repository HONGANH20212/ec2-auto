<?php
// Database configuration
$dbHost     = "xyz-gallery.cdhaztbs6qof.us-west-2.rds.amazonaws.com";
$dbUsername = "cyfroice";
$dbPassword = "Arrx4v01!!!";
$dbName     = "xyz_gallery";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
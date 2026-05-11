<?php
// Show all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Testing database connection...<br>";

$conn = new mysqli(
    "localhost",           // host
    "pgauzaml_wp666",       // username
    "pgauzamlDbpass",      // password
    "pgauzaml_wp666"       // database name
);

// Check if connection failed
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

echo "✅ Successfully connected to database!<br>";

// Check if the 'users' table exists
$result = $conn->query("SHOW TABLES LIKE 'users'");
if ($result->num_rows > 0) {
    echo "✅ Table 'users' found!<br>";
} else {
    echo "❌ Table 'users' DOES NOT exist in the database 'pgauzaml_wp666'.<br>";
}

$conn->close();
echo "Test complete.";
?>
<?php
$conn = new mysqli(
    "localhost",
    "pgauzaml_wp666",      // ← Changed from pgauzaml_user to pgauzaml_wp666
    "pgauzamlDbpass",      // ← This might also need updating
    "pgauzaml_wp666"
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
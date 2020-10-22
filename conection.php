<?php
    // Create connection
    $conn = new mysqli('remotemysql.com', 'TGOhJ1gk0h', 'KLAwS8PITW');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully<br>";

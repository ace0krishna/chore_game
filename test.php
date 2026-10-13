<?php
require 'includes/db.php';

if ($conn) {
    echo "✅ Database connected successfully!<br>";
    $result = $conn->query("SELECT username, role FROM users");
    while ($row = $result->fetch_assoc()) {
        echo "User: " . $row['username'] . " | Role: " . $row['role'] . "<br>";
    }
} else {
    echo "❌ Connection failed";
}
?>
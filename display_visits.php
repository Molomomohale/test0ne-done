<?php
// Database connection
include("include/db.php");

// Fetch the latest visitor counts
$result = $conn->query("SELECT daily_visitors, weekly_visitors, monthly_visitors FROM visitors ORDER BY id DESC LIMIT 1");

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    echo " Daily Visitors: " . $row['daily_visitors'];
    echo " Weekly Visitors: " . $row['weekly_visitors'] ;
    echo " | Monthly Visitors: " . $row['monthly_visitors'] . "<br>";
} else {
    echo "No visitor data available.";
}

$conn->close();
?>

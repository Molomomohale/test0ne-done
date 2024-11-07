<?php
// Database connection
include("include/db.php");

// Check for cookie to avoid counting repeat visits on the same day
if (!isset($_COOKIE['visited_today'])) {
    // Get current date
    $today = date("Y-m-d");

    // Check if there's already a record for today
    $result = $conn->query("SELECT * FROM visitors WHERE last_update_date = '$today'");

    if ($result->num_rows == 0) {
        // No record for today, insert a new record with initial counts
        $insert_query = "INSERT INTO visitors (daily_visitors, weekly_visitors, monthly_visitors, last_update_date) 
                         VALUES (1, 1, 1, '$today')";
        if ($conn->query($insert_query) === TRUE) {
            echo "New record created for today's visitors.";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        // Record for today exists, update the counts
        $update_query = "UPDATE visitors SET 
                         daily_visitors = daily_visitors + 1, 
                         weekly_visitors = weekly_visitors + 1, 
                         monthly_visitors = monthly_visitors + 1 
                         WHERE last_update_date = '$today'";
        if ($conn->query($update_query) === TRUE) {
            echo "Visitor counts updated for today.";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    // Set a cookie to mark the user as visited today (expires in 1 day)
    setcookie("visited_today", "1", time() + 86400); // Cookie lasts for one day
} else {
    echo "You have already visited today. Visit count was not incremented.";
}

// Close the database connection
$conn->close();
?>

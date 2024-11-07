<?php
// Database connection
include("include/db.php");

// Get the current date and time information
$currentDate = date("Y-m-d");
$currentDayOfWeek = date("w"); // 0 (Sunday) to 6 (Saturday)
$currentDayOfMonth = date("j"); // 1 to 31

// Reset daily visitors every day
$resetDaily = $conn->query("UPDATE visitors SET daily_visitors = 0");
if ($resetDaily) {
    echo "Daily visitors reset successfully.<br>";
} else {
    echo "Error resetting daily visitors: " . $conn->error . "<br>";
}

// Reset weekly visitors every Sunday
if ($currentDayOfWeek == 0) { // 0 represents Sunday
    $resetWeekly = $conn->query("UPDATE visitors SET weekly_visitors = 0");
    if ($resetWeekly) {
        echo "Weekly visitors reset successfully.<br>";
    } else {
        echo "Error resetting weekly visitors: " . $conn->error . "<br>";
    }
}

// Reset monthly visitors on the first day of each month
if ($currentDayOfMonth == 1) {
    $resetMonthly = $conn->query("UPDATE visitors SET monthly_visitors = 0");
    if ($resetMonthly) {
        echo "Monthly visitors reset successfully.<br>";
    } else {
        echo "Error resetting monthly visitors: " . $conn->error . "<br>";
    }
}

// Close the database connection
$conn->close();
?>




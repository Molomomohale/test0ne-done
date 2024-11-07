<?php
// Database connection details

include("include/db.php");


try {
    // Create a new PDO connection
    $pdo = new PDO("mysql:host=$servername;dbname=$databasename;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get the current date
    $currentDate = date('Y-m-d');

    // Check if there is already a record for today's date
    $stmt = $pdo->prepare("SELECT * FROM page_views WHERE view_date = :view_date");
    $stmt->execute(['view_date' => $currentDate]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // If a record exists for today, increment the view count
        $stmt = $pdo->prepare("UPDATE page_views SET view_count = view_count + 1 WHERE view_date = :view_date");
        $stmt->execute(['view_date' => $currentDate]);
        $viewCount = $result['view_count'] + 1;
    } else {
        // If no record exists for today, create a new one
        $stmt = $pdo->prepare("INSERT INTO page_views (view_date, view_count) VALUES (:view_date, 1)");
        $stmt->execute(['view_date' => $currentDate]);
        $viewCount = 1;
    }

    // Display the visit count for today
    echo "Viewers: " . $viewCount;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

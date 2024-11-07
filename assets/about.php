<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/header.css">
    <script src="js/loadpages.js" defer></script>
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar Menu -->
        <div class="sidebar">
            <ul>
                <li><a href="javascript:void(0);" onclick="loadPage('moredetails')">About Us</a></li>
                <li><a href="javascript:void(0);" onclick="loadPage('medication')">Medication</a></li>
                <li><a href="javascript:void(0);" onclick="loadPage('settings')">Settings</a></li>
            </ul>
        </div>
        
        <!-- Main Content Area -->
        <div class="main-content">
            <div id="content-area">
                <!-- Dynamic content will be loaded here -->
                <h1>Welcome to the Homepage</h1>
                <p>Select a page from the sidebar to view the content.</p>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Topbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #37a1a8;
    color: white;
    padding: 4px 0px;
    position: fixed;
    top: 0;
    width: 100%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
	flex-wrap: wrap;
}

.topbar .logo img {
    width: 40px;
    height: 40px;
	margin: 0px 10px;
    border-radius: 50%;
}

.topbar .heading h1 {
    margin: 0;
    font-size: 24px;
}

.topbar .logout i {
    font-size: 24px;
    cursor: pointer;
}

.topbar .logout i:hover {
    color: #f44336;
}
/***********************************************/
.topbar .logout {
    display: flex;
    align-items: center;
	margin: 0px 10px;
}

.topbar .logout a {
    display: flex;
    align-items: center;
    color: white;
    text-decoration: none;
}

.topbar .logout p {
    margin: 0;
    margin-right: 10px;
    font-size: 16px;
}

/***********************************************/
@media (max-width: 600px) {
    .topbar .heading h1{
		display: none;
    }

}

    </style>
</head>
<body>
 <?php	
			
    if(empty($_SESSION['email'])){
    echo 'You are not logged in <br>';
    echo 'Please create account or login first';
    exit;

    }
    $query = "SELECT * FROM admin WHERE email = '{$_SESSION['email']}'";
    $result = mysqli_query($conn, $query);

    if($result->num_rows > 0){
        while($row = mysqli_fetch_array($result)){
    ?> 58813775

    <div class="topbar">
        <div class="logo">
            <img src="../images/maliphofu.png" alt="Logo">
        </div>
        <div class="heading">
            <h1>Dashboard</h1>
        </div>
        <div class="logout"> 
            <a href="../include/logout.php"><p><?php echo $row['firstname']; ?></p><i class="fa fa-power-off" aria-hidden="true" onclick="logout()"></i></a>
        </div>
    </div>

<?php
        }
    }else{
        
        echo "Not Found";
        
        /*********************/     
            
    }
    ?>

    <script>
	function logout() {
    // Logic for logging out the user
    alert("Logging out...");
}

	</script>
</body>
</html>

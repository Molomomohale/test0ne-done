<?php
  include("include/db.php");
  include("assets/top.php");
// Initialize variables
$searchTerm = "";
$results = [];

// Check if form is submitted
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search_term'];

    // Sanitize user input to prevent SQL injection
    $searchTerm = $conn->real_escape_string($searchTerm);

    // Create SQL query
    $sql = "SELECT * FROM products WHERE product_name LIKE '%$searchTerm%' OR category LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    // Check if query was successful and process results
    if ($result && $result->num_rows > 0) {
        $results = $result->fetch_all(MYSQLI_ASSOC);
    } else {
      
         echo "<script>alert('No results found.!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Products</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
	  body{
		  background: floralwhite;
	  }
        .searchh1{
            margin-top: 4rem;
        }
	</style>
</head>
<body>
    <div class="searchh1">
    <h1>Search Products</h1>
    </div>
    <div class="search-container">
    <form method="post" action="">
        <input type="text" id="search_term" name="search_term" value="<?php echo htmlspecialchars($searchTerm); ?>" required>
        <button type="submit" name="search">Search</button>
    </form>
    </div>

    <?php if (!empty($results)): ?>
        <h2>Search Results:</h2>
        <div class="results">
  
            <?php foreach ($results as $product): ?>
			
                <div class="results-box">
                    <h2><?php echo htmlspecialchars($product['category']); ?></h2>
                    <img src="admin/php/uploads/<?php echo htmlspecialchars ($product['image']); ?>" alt="Image" width="200" height="200">
                    <p><b style="text-transform: uppercase;"><?php echo htmlspecialchars($product['product_name']); ?></b></p>
                    <p>for <?php echo htmlspecialchars($product['price']); ?></p>
                    
                    <p class="description"><?php echo htmlspecialchars($product['description']); ?></p>
                </div>
			
            <?php endforeach; ?>
       </div>
    <?php endif; ?>

    <?php $conn->close(); ?>
</body>
</html>
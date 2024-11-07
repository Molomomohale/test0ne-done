<?php 
include("../include/db.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lijo Le Meriana</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="../css/sidebar.css" />

        
    
    </head>
    <body>
        
        <div class="container">
            <div class="sidebar active">    
                <div class="menu-btn">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </div>
                <div class="head">
                    <div class="user-img">
                        <img src="../images/maliphofu.PNG" alt="Logo">
                    </div>
                    <div class="user-details">
                     <p class="title">Maliphofu Farm Feeds</p>
                     <p class="name">Developer</p>
                    </div>
                </div>
                
                <div class="nav">
                    <div class="menu">
                        <p class="title">Main</p>
                        
                        <ul>

                                <li class="actives"><a href="../index.php">
                                  <i class="fa fa-home" aria-hidden="true"></i> 
                                <span class="text">Home</span> </a></li>

                                <li class="active" >
                                    <a href="#" class="menu-item">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span class="text">Audiences</span> 
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                        <ul class="dropdown">
                                            <li><a href="#">
                                                <span class="text">User</span>
                                                </a></li>
                                            
                                                 <li><a href="#">
                                                <span class="text">Subscribers</span>
                                                </a></li>
                                        </ul>
                               </li>
                                    
                    
                            
                                <li><a href="#" onclick="loadContent('product')">
                                <i class="fa fa-product-hunt" aria-hidden="true"></i>
                                <span class="text"> Products</span></a></li>
                            
                                 <li class="active" onclick="toggleSubmenu(this)">
                                    <a href="#" class="menu-item">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span class="text">Audiences</span> 
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown">
                                        <li><a href="#" class="menu-item">
                                            <i class="fa fa-person" aria-hidden="true"></i>
                                            <span class="text">User</span>
                                            </a></li>
                                            
                                             <li><a href="#">
                                            <span class="text">Subscribers</span>
                                            </a></li>
                                    </ul>
                               </li>
                            <p class="title">Settings</p>
                                <li><a href="#" onclick="loadContent('settings')">
                                <i class="fa fa-cog" aria-hidden="true"></i> 
                                <span class="text">Settings </span></a></li>
                            
                            <p class="title">Accounts</p>
                                <li><a href="#" onclick="loadContent('settings')">
                                <i class="fa fa-info" aria-hidden="true"></i> 
                                <span class="text">Help</span></a></li>
                            
                                <li><a>
                                
                                
                                    <?php
                                    if (session_status() == PHP_SESSION_NONE) {
                                        session_start();
                                    }
                                    if( isset( $_SESSION['email'] ) )
                                        {
                                        $email = $_SESSION["email"];
                                    echo "<a style=\"color:red\" href=\"../logout/logout.php\">LOGOUT</a>";
                                    }else{
                                       echo "<i class=\"fa fa-sign-in\" aria-hidden=\"true\">  Login </i>";
                                        //echo "<a style=\"color:red\" href=\"../admin/login.php\">LOGIN</a>";
                                    }
                                    
                                    ?> 
                                
                                    </a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            
<!-----------------------------Main section body------------------------------------->
        <div class="section-container">
        <h2>Animal Feeds and Medications</h2>
         <?php
            $records = mysqli_query($conn,"select * from animals WHERE animal_id='" . $_GET["animal_id"] . "' and active='1' ");
            if (mysqli_num_rows($records) > 0){
            $i=0;
            while($idata = mysqli_fetch_array($records))
            {
            ?>
                
              <h2>
                  <img src="../admin/php/uploads/<?php echo $idata['image']; ?>" alt="Image">
                  <?php echo $idata['animal_name']; ?>
            </h2>
        
            <div class="container-content">
                        <!--content-->
                <!-------------------feed content--------------------------------------------->

            <div class="feed-content">               
            <?php
            $animal_id = $_GET["animal_id"];
            $category = 'feeds';

            $stmt = $conn->prepare("SELECT 
                                      a.animal_name, 
                                      a.feed_name,
                                      a.image AS animal_image, 
                                      p.product_name, 
                                      p.price, 
                                      p.description, 
                                      p.image AS product_image 
                                    FROM 
                                      animals a
                                    JOIN 
                                      products p ON a.animal_id = p.animal_id
                                    WHERE 
                                      a.animal_id = ? 
                                      AND a.active = '1' 
                                      AND p.active = '1'
                                      AND p.category = ?");
            $stmt->bind_param("is", $animal_id, $category);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>

            <div class="feeds-results">

                     <h3><?php echo $row['product_name']; ?></h3>
                      <img src="../admin/php/uploads/<?php echo $row['product_image']; ?>" alt="Image" width="60" height="60">
                <p><b>M<?php echo $row['price']; ?></b></p>
                     <p><?php echo $row['description']; ?></p>
                            <br>
                        <hr>
                        <p><b>Other Recormended Feeds</b></p>
                         <p><?php echo $row['feed_name']; ?></p>

                </div>
                    <?php
                }
            } else {
                echo "No Feeds available";
            }


            ?>

                </div>
                <!-----------------------------------end feed content------------------------------>
                    <!-------------------Medication content--------------------------------------------->
                <div class="feed-content">               
            <?php
            $animal_id = $_GET["animal_id"];
            $category = 'medication';

            $stmt = $conn->prepare("SELECT 
                                      a.animal_name, 
                                      a.medication_name,
                                      a.image AS animal_image, 
                                      p.product_name, 
                                      p.price, 
                                      p.description, 
                                      p.image AS product_image 
                                    FROM 
                                      animals a
                                    JOIN 
                                      products p ON a.animal_id = p.animal_id
                                    WHERE 
                                      a.animal_id = ? 
                                      AND a.active = '1' 
                                      AND p.active = '1'
                                      AND p.category = ?");
            $stmt->bind_param("is", $animal_id, $category);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="feeds-results">
                        
                     <h3><?php echo $row['product_name']; ?></h3>
                      <img src="../admin/php/uploads/<?php echo $row['product_image']; ?>" alt="Image" width="60" height="60">
                        <p><b>M<?php echo $row['price']; ?></b></p>
                     <p><?php echo $row['description']; ?></p>
                        <br>
                        <hr>
                        <p><b>Other Recormended Meds</b></p>
                         <p><?php echo $row['medication_name']; ?></p>
                    </div>

                    <?php
                }
            } else {
                echo "No Medications available";
            }


            ?>

                </div>
                <!-----------------------------------end Medication content------------------------------>

               </div>
        </div>

        <!----------------------------------------------------------------------------------->
     <?php
        $i++;
        }
        }else{
        echo "<p style='color: #000' >No Animal Details Available</p>";
        }

        ?>

    </div>
        
    <script>
   document.querySelectorAll('.menu-item').forEach(item => {
    item.addEventListener('click', function() {
        const dropdown = this.nextElementSibling;

        // Toggle the 'show' class for animation
        dropdown.classList.toggle('show');
    });
});
        
        $(".menu-btn").click(function(){
            $(".sidebar").toggleClass("active");
        });
        
        /*collapse sidebar*/
        const menuBtn = document.querySelector('.menu-btn');
        const sidebar = document.querySelector('.sidebar');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
        });

	</script>
        
    
    </body>
</html>
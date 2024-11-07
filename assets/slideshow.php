<?php 
        include("include/db.php");
        error_reporting(0);
		
?>
<div class="topmargin"></div>

<div class="main-container">
    
<div class="slide-container">

<div class="search-container">
        <form method="post" action="searchproduct.php">
        <input type="text" id="search_term" name="search_term" value="<?php echo htmlspecialchars($searchTerm); ?>" placeholder="Search...." required>
        <button type="submit" id="search-btn" name="search">🔍</button>
    </form>
</div>

<div class="slideshow-container" id="home">
	<div class="slideshow-content">
		<div class="slideshow-images">
		<!---------slideshow container Animal Feeds---------------->
     <?php
        $records = mysqli_query($conn,"select * from products WHERE category = 'feeds'" );
        if (mysqli_num_rows($records) > 0){
        $i=0;
        while($idata = mysqli_fetch_array($records))
        {
        ?>
			 <div class="mySlides w3-animate-fading" >
				 <img src="admin/php/uploads/<?php echo $idata['image']; ?>" alt="Image">
				  <div class="text"><?php echo $idata['product_name']; ?></div>
			  </div>
            
    <?php
        $i++;
        }
        }else{
        echo "<p style='color: #000' >No Details Available</p>";
        }

        ?>
        <div class="heading">
           <h2>Animal Feeds</h2>
        </div>
		  </div>
		  <!----------------End animal feeds section----------------->
		  	<!---------slideshow container Animal Medication---------------->
		  <div class="slideshow-images">
	
         <?php
            $records = mysqli_query($conn,"select * from products WHERE category = 'medication'");
            if (mysqli_num_rows($records) > 0){
            $i=0;
            while($idata = mysqli_fetch_array($records))
            {
            ?>
                 <div class="medication w3-animate-fading" >
                     <img src="admin/php/uploads/<?php echo $idata['image']; ?>" alt="Image">
                      <div class="text"><?php echo $idata['product_name']; ?></div>
                  </div>

        <?php
            $i++;
            }
            }else{
            echo "<p style='color: #000' >No Details Available</p>";
            }

            ?>
			  
              <div class="heading">
                <h2>Animal Medication</h2>
              </div>
		  </div>
		  <!----------------End animal Medication section----------------->
	</div>
			  <!--------------------other information about us--------------------->
          <div class="about-us">
            <div class="about-title">
                <h3>About Us</h3>
                <h4>Welcome to <span> Maliphofu Farm Feeds</span></h4>
                <p>At Maliphofu Farm Feeds, we are dedicated to supporting farmers and animal
                   owners with the highest quality farm feeds and animal medications.</p>
            </div>
            <div class="mission">
                <h3>Our Mission</h3>
                <p>Our mission is simple: to provide top-notch animal feed and medications at affordable prices. 
                  We understand the crucial role that quality nutrition and proper medication play in the 
                  well-being of your animals</p>

                  <h3>Our Vision</h3>
                  <p>Our vision is to be the leading provider of farm feeds and animal medications in the region, 
                    recognized for our commitment to quality, innovation, and customer satisfaction.</p>
            </div>
			
			  <div class="btns">
				<!--a class="login_admin" href="admin/login.php">Admin</a-->
				<a class="contact" href="#">Contacts</a>
			  </div>
			 
          </div>
</div>

<div class="myspecies">
<h2>Our Species</h2>
  <!-------------list of products miximum of 10----------------------->
  <a href="assets/about.php">
    <img src="images/species.gif" alt="Species" >
    <h1>Maliphofu Animal Nutrition</h1>
	</a>
</div>
</div>
<!---------------end slide container------------>
    
<!------------------Animal Categories---------------------------->
	<div class="section" id="categories">
   
	<!-----------Feeds category--------------------->
     <div class="content-section" id="expandable-section">
	  <h1><span>Animals Categories</span></h1>
          <!------------------------------retrieve data from database----------------->
          <div class="category-results">
            <?php
                $records = mysqli_query($conn,"select * from animals");
                if (mysqli_num_rows($records) > 0){
                $i=0;
                while($idata = mysqli_fetch_array($records))
                {
                ?>

                      <div class="a-categories">
                        <a href="assets/moredetails.php?animal_id=<?php echo $idata['animal_id']; ?>">
                            <img src="admin/php/uploads/<?php echo $idata['image']; ?>" alt="Image">
                            <p><?php echo htmlspecialchars($idata['animal_name']); ?></p>
                          </a>
                      </div>

            <?php
            $i++;
            }
            }else{
            echo "<p style='color: #000; font-size: 22px;' >No Animals Available</p>";
            }

            ?>
      </div>
          <!-------------------------------------------------------------------------->

      </div>
            <button id="view-more-btn" onclick="toggleContent()">View More</button>
</div>

<!------------------script for toggling for more animals-------------------------->
<script>
function toggleContent() {
  var section = document.getElementById("expandable-section");
  var button = document.getElementById("view-more-btn");

  if (section.classList.contains("expanded")) {
    section.classList.remove("expanded");
    button.textContent = "View More"; // Change button text back to 'View More'
  } else {
    section.classList.add("expanded");
    button.textContent = "View Less"; // Change button text to 'View Less' when expanded
  }
}

</script>
<!------------------script for toggling for more animals-------------------------->

<!------------------end of Categories---------------------------->

<!-----------------our services--------------------------->	
	<div class="section" id="ourservices">
    <h1><span>Our Services</span></h1>
    <div class="cards">
      <div class="card">
        <h3>Expert Consultation</h3>
        <h4>Service Description</h4>
        <p>Our team of experienced agricultural experts is always available 
		   to provide personalized consultations.</p>
		   <h4>Benefits</h4>
		   <p>1. Personalized advice tailored to your specific needs.
		      2. Expert recommendations for feed and medication.
		      3. Strategies to enhance farm productivity and animal health</p>
      </div>
	  
	   <div class="card">
        <h3>Nutritional Planning</h3>
        <h4>Service Description</h4>
        <p>We offer customized nutritional planning services to ensure your animals 
            receive the optimal diet for their growth and health.</p>
		   <h4>Benefits</h4>
		   <p>1. Tailored feeding programs for different types of livestock
			  2. Balanced diets to improve growth, health, and productivity
			  3. Ongoing support and adjustments as needed</p>
      </div>
	  
	  <div class="card">
        <h3>Health and Wellness Programs</h3>
        <h4>Service Description</h4>
        <p>Our comprehensive health and wellness programs are designed to keep your livestock in peak condition.
     		We provide preventive health measures ensuring your animals stay healthy and productive. </p>
		   <h4>Benefits</h4>
		   <p>1. Preventive care to reduce the risk of disease
			  2. Effective treatment plans for common health issues</p>
      </div>
	  
	  <div class="card">
        <h3>Customer Support</h3>
        <h4>Service Description</h4>
        <p>Our dedicated customer support team is always ready to assist you with any inquiries or issues. Whether you need help selecting a product
             our team is here to provide prompt and efficient support.</p>
		   <h4>Benefits</h4>
		   <p>1. Responsive and friendly customer service
			  2. Assistance with product selection and orders
			  3. Solutions for any issues or concerns</p>
      </div>
	  
	  </div>
    </div>
	<!----------------------------------end our services----------------------------------------->

	<!------------------our team---------------------------->
	<div class="section" id="our-team">
   
	<!-----------Feeds category--------------------->
    
	  <h1><span>Mafu Le Pheko (Disease & Treatment)</span></h1>
	  <div class="sick-section">
          <!------------------------------retrieve data from database----------------->
	<?php
		// Query to retrieve data from illness where status is 1 and join with animals table
		$sql = "
			SELECT i.illness_id, i.illness_name, i.description, i.recorded_date, 
				   a.animal_name, a.animal_type, a.medication_name, a.feed_name, a.image
			FROM illness i
			JOIN animals a ON i.animal_id = a.animal_id
			WHERE i.status = 1
		";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) 
			{
				?>
				

				<div class="sick-content">
				<div class="sick-card">
				<h1><?php echo $row['animal_name']; ?></h1>
				<img src="admin/php/uploads/<?php echo $row['image']; ?>" alt="Image">
				</div>
				
				<div class="sick-description">
				<h3><?php echo $row['illness_name']; ?> <span> Disease </span> </h3>
				<p><?php echo $row['description']; ?></p>
				</div>
				</div>
			   
				<?php
			}
		} else {
			echo "No records found with status 1.";
		}

		$conn->close();
		?>
				  <!-------------------------------------------------------------------------->
		</div>
      </div>

<!------------------our team---------------------------->

</div>
<script>
/**animal feed section**/
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000);    
}
/**end animal feeds**/

/**medication section**/
var myMedicsIndex = 0;
medics();

function medics() {
  var i;
  var x = document.getElementsByClassName("medication");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myMedicsIndex++;
  if (myMedicsIndex > x.length) {myMedicsIndex = 1}    
  x[myMedicsIndex-1].style.display = "block";  
  setTimeout(medics, 8000);    
}
/*end medication**/

/**windows scroll down nav*********/

document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault(); //prevents auto start
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        window.scrollTo({
            top: targetElement.offsetTop - 60, // Adjust for fixed nav height
            behavior: 'smooth'
        });
    });
});

</script>

		<!--------------Terms and Condition------------------------->

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
            
            <div class="termhead"><h3>Introduction</h3></div>
			
			<p>
              These terms and conditions govern your use of [Business Name]'s products, services, and website
            </p>
			
			 <div class="termhead"><h3>Acceptance of Terms</h3>
			<p>
                By accessing or using our products, services, or website, you agree to be bound by these terms and conditions.
            </p>
            </div>
          

            
             <div class="termhead"><h3>Service Description</h3></div>
				<p>
                We provide [brief description of products/services]. Details can be found on our website or by contacting us directly.
            </p>

             
                <div class="termhead"><h3>Payments</h3></div>
			<p>
                1. Prices are as stated on our website and are subject to change without notice.
                2. Payment is due upon [completion of service/delivery of product/etc.] unless otherwise agreed upon in writing.
            </p>

            
                <div class="termhead"><h3>Delivery/Performance</h3></div>
			<p>
                Delivery times quoted are estimates only and [Business Name] is not liable for any delays
            </p>

            
                <div class="termhead"><h3>Cancellation/Refund Policy</h3></div>
			<p>
                1. Cancellations must be made [timeframe] before [service/product] delivery for a full refund.
                2. Refunds will be processed within [number] days of cancellation.
            </p>

            
                <div class="termhead"><h3>Intellectual Property</h3></div>
			<p>
                All content on our website and materials provided are the property of [Business Name] and may not be used without permission.
            </p>

            
                <div class="termhead"><h3>Limitation of Liability</h3></div>
			<p>
                To the fullest extent permitted by law, [Business Name] shall not be liable for any indirect, incidental, special,
                consequential, or punitive damages.
            </p>

            
                <div class="termhead"><h3>Indemnification</h3></div>
			<p>
                You agree to indemnify and hold harmless [Business Name] from any claims, damages, or losses arising from your use of
                our products or services.
            </p>

         
                <div class="termhead"><h3>Governing Law</h3></div>
			<p>
                These terms and conditions shall be governed by and construed in accordance with the laws of [jurisdiction].
            </p>

           
                <div class="termhead"><h3>Changes to Terms</h3></div>
			<p>
                [Business Name] reserves the right to modify these terms and conditions at any time. Changes will be effective
                immediately upon posting.
            </p>

            
                <div class="termhead"><h3>Contact Information</h3></div>
			<p>
                For questions or concerns regarding these terms and conditions, please contact us at [email address/phone number].
            </p>

  </div>
</div>


<script>
if (!localStorage.getItem('visited')) {
    // First-time visitor, set localStorage flag
    localStorage.setItem('visited', 'true');

    // Send AJAX request to server to increment unique visit count
    fetch('cookies.php', { method: 'POST' })
        .then(response => response.json())
        .then(data => console.log(data));
}

</script>
<!----------------------------------------------------------->
<!------------------FOOTER----------------------->

<?php include "footer.php"; ?>

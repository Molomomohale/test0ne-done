<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Footer</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Add FontAwesome for social media icons -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<style>
	* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

footer {
    width: 99%;
    margin: 20px 10px;
    border-radius: 7px;
    background-color: #2d2d2d;
    color: #fff;
    padding: 10px 20px;
    font-family: Arial, sans-serif;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.footer-container div {
    flex: 1;
    margin: 20px;
}

h4 {
    font-size: 1.8em;
    margin-bottom: 15px;
    text-align: center;
}

.location iframe {
    border: 0;
    border-radius: 10px;
}
/************************************/
.social-media a, .contacts a {
    display: block;
    margin: 10px 0;
    font-size: 1rem;
    color: #fff;
    text-decoration: none;
    transition: transform 0.3s ease, color 0.3s ease;
}

.social-media a i, .contacts a i {
    margin-right: 10px;
    font-size: 1.5em;
    transition: transform 0.3s ease;
}

.social-media a:hover {
    color: #007bff;
}

.social-media a:hover i {
    transform: scale(1.3); /* Scale up icons on hover */
}
        
.contacts a:hover{
    color: #16a085;
}
.contacts a:hover i {
    transform: scale(1.3); /* Scale up icons on hover */
}
     
/*************second section*******************/
.second-section{
    width: 100%;
    margin: 10px;
    display: flex;
  
}
.team{
    width: 100%;
    margin: 15px auto;
}
.staff-members{
	display: flex;
	margin: auto;
}
/* Team Images */
.team-member, .species, .social-media{
    text-align: center;
    width: 100%;
    margin: auto;
    padding: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
}

.team-member img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-bottom: 10px;
    transition: transform 0.4s ease, box-shadow 0.4s ease; /* Smooth transition */
}

.team-member:hover img {
    transform: scale(1.1) rotate(5deg); /* Scale and rotate on hover */
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3); /* Add shadow */
}
        
/*****Our services******************/
.mainservices{
    width: 100%;
}
.ourservices{
    width: 100%;
    display: flex;
}
.services{
    width: 100%;
}
.services p{
    margin: 15px;
    text-align: center;
}     
/* contactss*/
.contacts{    
    width: 100%;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
}

/* Species List Items */
.species{
    border: none;
}
.species ul {
    list-style: none;
}

.species li {
    font-size: 1.2em;
    margin-bottom: 10px;
    transition: color 0.3s ease, transform 0.3s ease; /* Smooth transition */
}

.species li:hover {
    color: #007bff; /* Change text color on hover */
    transform: translateX(10px); /* Slight movement to the right */
}

.visit-count{
	width: 100%;
	color: #fff;
}
.visit-count p{
	font-size: 0.8rem;
}

.legal p{
	text-align: center;
	margin: 1rem;
}

@media (max-width: 768px) {
    
    .footer-container{
        width: 100%;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
    }
    .team-member, .species, .social-media, .contacts{
        width: 90%;

    }
    .second-section{
        width: 100%;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
    }
    
    .staff-members{
        width: 80%;
        display: grid;
        grid-template-columns: repeat(1, 1fr); 
    }
    .ourservices{
        width: 100%;
        display: grid;
        grid-template-columns: repeat(1, 1fr); 
    }

    .team {
        width: 97%;
        justify-content: center;
    }
    .social-media a i {
        margin-right: 5px;
    }
    .location iframe{
        width: 100%;
}
}

	</style>
</head>
<body>
    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <!-- Google Map Location -->
            <div class="location">
                <h4>Our Location</h4>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.293489187404!2d-122.08424968468273!3d37.42199997982198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fba5a0f3456fb%3A0x8f1d1c68bcf10ddf!2sGoogleplex!5e0!3m2!1sen!2sus!4v1615169030231!5m2!1sen!2sus"
                    width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                
                <p>Address <span>Nazareth, Maseru Lesotho</span></p>
            </div>
			
			<!-- Contact us Section -->
            <div class="contacts">
                <h4>Our Contacts</h4>
                <a href="mailto:molomomohale518351@gmail.com?subject=Inquiry&body=Hello Mohale," target="_blank" id="email"> 
                    <i class="fa fa-envelope" aria-hidden="true"></i>Email|maliphofu@gmail.com
                </a>
				
				<!-- Phone call Direct Message Link -->
               <a href="tel:+266577104991" target="_blank" id="phone"> 
                    <i class="fa fa-phone" aria-hidden="true"></i>Phone | 51835160 
                </a>

            </div>

            <!-- Social Media Links -->
			<div class="social-media">
				<h4>Connect with Us</h4>
				<!-- Facebook Profile Link -->
				<a href="https://facebook.com/YOUR_FACEBOOK_PROFILE_LINK" target="_blank" id="facebook">
					<i class="fab fa-facebook"></i> Facebook
				</a>
				
				<!-- WhatsApp Direct Message Link -->
				<a href="https://wa.me/26651835160" target="_blank" id="whatsapp">
					<i class="fab fa-whatsapp"></i> WhatsApp
				</a>
				
				<a href="https://twitter.com" target="_blank" id="twitter">
					<i class="fab fa-twitter"></i> Twitter
				</a>
				
				<a href="https://youtube.com" target="_blank" id="youtube">
					<i class="fab fa-youtube"></i> YouTube
				</a>
			</div>



            <!-- Animal Species Section -->
            <div class="species">
                <h4>Animal Species</h4>
                <ul>
                    <li>Cattle</li>
                    <li>Sheep</li>
                    <li>Poultry</li>
                    <li>Goats</li>
                    <li>Pigs</li>
                    <!-- Add more species as needed -->
                </ul>
            </div>
        </div>
		<hr><br>
		<div class="second-section">
		               <!-- Team Section -->

            <div class="team">
                <h4>Meet Our Team</h4>
				<div class="staff-members">
				<?php
				     include("include/db.php");
                     error_reporting(0);
					$records = mysqli_query($conn,"select * from staff ");
					if (mysqli_num_rows($records) > 0){
					$i=0;
					while($idata = mysqli_fetch_array($records))
					{
					?>
							<div class="team-member">
							<img src="admin/php/staff-images/<?php echo $idata['image']; ?>" alt="Image">
							<p><?php echo htmlspecialchars($idata['firstname']); ?></p>
							<p><?php echo htmlspecialchars($idata['surname']); ?></p>
							</div>
							<!-- Add more team members as needed -->
							<?php
				$i++;
				}
				}else{
				echo "<p style='color: #000; font-size: 22px;' >No Staff Available</p>";
				}

				?>
				</div>
            </div>
            
            <!------------policies--------------->
            <div class="mainservices">
                <h4>Our Services</h4>
                <div class="ourservices">
                
                    <div class="services">
                        <h4>Services</h4>

                        <p>Expect Consultation</p>
                        <p>Nutritional Planning</p>
                        <p>Customer Support</p>
                        <p>Google Ads</p>
                    </div>

                    <div class="services">
                        <h4>Company</h4>

                        <p>About us</p>
                        <p class="terms" id="openModalBtn">Terms & Conditions</p>
                        <p>FAQ</p>
                        <p>Liphoofolo</p>
                    </div>
                </div>
            </div>
			
		</div>
					
				<div class="visit-count">
			    <p>Time track</p>
					<p> <?php include "display_visits.php"; ?></p>
				</div>
				<hr>
				<div class="legal">
				 <p>&copy; <?php echo date("Y"); ?> Maliphofu Farm Feeds. All rights reserved. Developed by Molomo Mohale.</p>
				</div>
    </footer>

    <script>
	// Get all social media icons
	const facebook = document.getElementById('facebook');
	const whatsapp = document.getElementById('whatsapp');
	const twitter = document.getElementById('twitter');
	const youtube = document.getElementById('youtube');
	const email = document.getElementById('email');
	const phone = document.getElementById('phone');
    

	// Add hover animations to icons
	function animateIcon(element, color) {
		element.addEventListener('mouseenter', () => {
			element.style.transform = 'scale(1.2)';
			element.style.color = color;
		});
		
		element.addEventListener('mouseleave', () => {
			element.style.transform = 'scale(1)';
			element.style.color = '#fff'; // Reset to default color
		});
	}

	// Apply animation with specific color for each icon
	animateIcon(facebook, '#1DA1F2'); // Facebook blue
	animateIcon(whatsapp, '#25D366'); // WhatsApp green
	animateIcon(twitter, '#1DA1F2');  // Twitter blue
	animateIcon(youtube, '#FF0000');  // YouTube red
	animateIcon(email, '#007bff');  // YouTube red
	animateIcon(phone, '#16a085');  // YouTube red
        
	
	// Get all team images
const teamImages = document.querySelectorAll('.team-member img');

// Add hover animations to team images
teamImages.forEach(img => {
    img.addEventListener('mouseenter', () => {
        img.style.transform = 'scale(1.1) rotate(10deg)';
        img.style.boxShadow = '0px 5px 15px rgba(0, 0, 0, 0.3)';
    });

    img.addEventListener('mouseleave', () => {
        img.style.transform = 'scale(1)';
        img.style.boxShadow = 'none';
    });
});

// Get all species list items
const speciesItems = document.querySelectorAll('.species li');

// Add hover animations to list items
speciesItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
        item.style.color = '#007bff'; // Change color
        item.style.transform = 'translateX(10px)'; // Move right
    });

    item.addEventListener('mouseleave', () => {
        item.style.color = '#fff'; // Reset color
        item.style.transform = 'translateX(0)'; // Reset position
    });
});


	</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Maliphofu Farm Feeds</title>
        <meta charset="UTF-8">
		<link rel="shotcut icon" type="x-icon" href="images/maliphofu.png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="css/style.css"> 
        <link rel="stylesheet" href="css/header.css"> 
        <link rel="stylesheet" href="css/modals.css"> 
    </head>
    <body>
        
        <?php include "assets/header.php"; ?>
        <?php include "assets/slideshow.php"; ?>
        <!--?php include "assets/footer.php"; ?-->
        

        <!---------------modal java script--------------------->
        <script >
          document.addEventListener('DOMContentLoaded', function() {
        var openModalBtn = document.getElementById('openModalBtn');
        var modal = document.getElementById('myModal');
        var closeModalBtn = modal.getElementsByClassName('close')[0];

        // Open modal
        openModalBtn.onclick = function() {
          modal.style.display = 'block';
          setTimeout(function() {
            modal.style.height = '100%'; // Expand modal height
          }, 10);
        }

        // Close modal
        closeModalBtn.onclick = function() {
          modal.style.height = '0'; // Collapse modal height
          setTimeout(function() {
            modal.style.display = 'none';
          }, 300); // Ensure the modal is hidden after the transition
        }

        // Close modal when clicking outside of modal content
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.height = '0';
            setTimeout(function() {
              modal.style.display = 'none';
            }, 300);
          }
        }
      });

      </script>

      <script src="js/script.js"></script>
    </body>
</html>

<?php
    include("../include/db.php"); 
    session_start();
    error_reporting(0);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    .sidebar2{
                width: 190px;
                background: #1b767c;
                color: #fff;
                padding: 20px;
                height: 100vh;
            }
            .sidebar2 h1{
                font-size: 24px;
                margin-top: 30px;
            }
  
            ul{
                list-style: none;
                padding: 0;
            }
            li{
                margin-bottom: 10px;
            }
            a{
                text-decoration: none;
                color: #fff;
                font-weight: bold;
         
            }
            .nav ul li{
                padding: 10px 6px;
                border-radius: 4px;
                margin: 10px;
            }
            .nav ul li:hover{
                background: transparent;
                padding: 4px 6px;
                transition: 0.4s;
                border-radius: 5px;
                
            }
            .nav ul li a:hover{
                color: skyblue;
            }

             /* nav toggler*/    
            
        .nav-toggler{
            height: 34px;
            width: 44px;
            background-color: white;
            border-radius: 4px;
            cursor: pointer;
            border: none;
            display: none;
            margin-right: 15px;
        }
        .nav-toggler:focus{
            outline: none;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
        }
        .nav-toggler span{
            height: 2px;
            width: 20px;
            background-color: black;
            display: block;
            margin: auto;
            position: relative;
            transition: all 0.3s ease;
        }
        .nav-toggler.active span{
            background-color: transparent;   
        }
        .nav-toggler span::before,
        .nav-toggler span::after{
            content: '';
            position: absolute;
            left: 0; 
            top: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            transition: all 0.3s ease;
        }    
        .nav-toggler span::before{
            transform: translateY(-6px);
        }
        .nav-toggler.active span::before{
            transform: rotate(45deg);
        }

        .nav-toggler span::after{
            transform: translateY(6px);
        }
        .nav-toggler.active span::after{
            transform: rotate(135deg);
        }
/**************small screen resolution*********************** */
            @media(max-width:991px){
            .nav ul li{
                background: none;
                padding: 10px 6px;
                border-radius: 4px;
                margin: 10px;
            }

            .sidebar2{
                width: 92%;
                height: auto;
                margin: 15px 0px;
                }

            .sidebar2 h1{
                display: none;
            }

                .nav-toggler{
                display: block;   
            }
            .dashboard .nav{
                width: 100%;
                padding: 0;
                max-height: 0px;
                overflow: hidden;
                visibility: hidden;
                transition: all 0.5s ease;
            }
            .dashboard .nav.open{
                visibility: visible;
            }
            .dashboard .nav ul{
                padding: 12px 15px 0;
                border-top: 1px solid #111;
                margin-top: 10px;
            }
            
            .dashboard{
                margin: 0px 10px;
            }

            .dashboard .nav ul li{
                display: block;
                margin: 0;
            }

            }
</style>
<div class="dashboard">  
    <div class="sidebar2">
        
        <h1>Maliphofu</h1>
        <hr>
        
    <button type="button" class="nav-toggler">
            <span>

            </span>
        </button>
        <nav class="nav">
        <ul>
        <li><i class="fa fa-home" aria-hidden="true"></i> <a href="#" onclick="loadContent('home')">Dashboard</a></li>
        <li><i class="fa fa-heartbeat" aria-hidden="true"></i> <a href="#" onclick="loadContent('medication')">Medication</a></li>
        <li><i class="fa fa-envira" aria-hidden="true"></i> <a href="#" onclick="loadContent('animalfeed')">Animal Feed</a></li>
        <li><i class="fa fa-product-hunt" aria-hidden="true"></i> <a href="#" onclick="loadContent('product')">Products</a></li>
        <li><i class="fa fa-cog" aria-hidden="true"></i> <a href="#" onclick="loadContent('settings')">Settings</a></li>
        <li><i class="fa fa-sign-in" aria-hidden="true"></i> <a>
            
            <?php
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if( isset( $_SESSION['email'] ) )
                {
                $email = $_SESSION["email"];
            echo "<a style=\"color:red\" href=\"../logout/logout.php\">LOGOUT</a>";
            }else{
                echo "<a style=\"color:red\" href=\"../admin/login.php\">LOGIN</a>";
            }
            
            ?> 
            </a></li>
        </ul>
        </nav>
    </div>
    </div>

    <script>
        const navToggler = document.querySelector(".nav-toggler");

        navToggler.addEventListener("click", navToggle);

        function navToggle(){
        navToggler.classList.toggle("active");
            const nav = document.querySelector(".nav");
            nav.classList.toggle("open");
            if(nav.classList.contains("open")){
                nav.style.maxHeight = nav.scrollHeight + "px";
            }
            else{
                nav.removeAttribute("style");
            }
        }

    </script>
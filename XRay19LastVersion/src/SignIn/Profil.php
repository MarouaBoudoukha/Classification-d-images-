<html>
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
    

        <!-- Title Page-->
        <title> Sign In </title>

<!--Vendor CSS-->
        <link
            href="vendor/select2/select2.min.css"
            rel="stylesheet"
            media="all"
        />
        <link
            href="vendor/datepicker/daterangepicker.css"
            rel="stylesheet"
            media="all"
        />

        <!-- Main CSS-->
        
        <link rel="stylesheet" href="../assets/style/styleCommun.css"/>
        <link rel="stylesheet" href="../assets/style/styleSignUp.css">
    </head>

    <style>
        #content{
            margin-top: 6%;
            display:flex;
            justify-content:center;
        }
        #content a{
            margin-right:50px;
            border: 2px solid darkcyan;
            border-radius:3px;
            background-color:darkcyan;
            color:white;
        }


    </style>
    

    <body class="body">
        <header>
            <div style="width: 100%">
                <nav>
                    
                    <div class="mainpage">
                        <div >
                            <a class="center" href="../Home/home.html"> <img src="../assets/images/card.jpg" class="logo center"> </a>
                        </div>
                        
                        
                    
                        <a class="center" href="#" title="News">News</a>
                        
                        <a class="center" href="#" title="Help">Help</a>
                        <a class="center" href="../SignIn/signIn.php" title="SignIn">Sign In</a>
                        <a class="center" href="../SignIn/Profil.php" title="Profil">Profil</a>
                        <a class="center" href="../SignUp/signUp.html" title="SignUp" >Sign Up</a>
                        <!--<a class="center" href="#" title="Logout">Logout</a>-->
    
                    </div>
                </nav>
            </div>
            
        </header>   
        
        
     

        <div id="form">
		<h1> Covid-19 </h1>
		   <div id="content">
                <a href='Profil.php?deconnexion=true'><span>Déconnexion</span></a>
                
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_destroy();
                      header("Location: signIn.php");
                   }
                }
                else if(isset($_SESSION['email']) && $_SESSION['email'] !== null){
                        $user = $_SESSION['email'];
                        // afficher un message
                        echo "Bonjour $user";
                    }
            ?>
            
        </div>
        <ul>
                <div class="description">
                    <li>
                        <h2></h2>
                        <p>
                            
                            <br>
                            
                        </p>
                    </li>
                </div>
                <div class="description" style="margin-top: 5%;">
                    <li>
                        <h2></h2>
                        <p>
                            
                            
                        </p>
                    </li>
                </div>
            </ul>
     
        </div> -->


     
        <ul class="bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>

        <div style="margin-bottom: 0%;">
            <footer>
                <h4 id="Crédits" ><a href="#"> Crédits  </a></h4>
                <h4 id="details"> <a href="#"> About Us ?</a></h4>
            </footer>

        </div>
    </body>
</html>

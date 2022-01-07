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

    

    <body class="body">
        <header>
            <div style="width: 100%">
                <nav>
                    
                    <div class="mainpage">
                        <div >
                            <a class="center" href="../Home/home.html"> <img src="../assets/images/card.jpg" class="logo center"> </a>
                        </div>
                        
                        
                    
                        <a class="center" href="../News/News.html" title="News">News</a>
                        
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
		<h1> Sign In </h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="Verif.php" method="post">
					
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					
					<input type="submit" value="Login">
                    <?php
                    if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1 || $err==2)
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }
                    ?>
				</form>
				<p> <a href="#"> Forgot password!</a> </p>
                <p>Don't have an Account? <a href="../SignUp/signUp.html"> SignUp Now!</a></p>
			</div>
		
		</div>
        
        <!-- <div class="container">
            <div class="card">
                <div class="contentBx">
                    <h2>XRay-19</h2>
                    <form>
                        <h2> Sign In</h2>
                        <input type="email" placeholder="Email" />
                        <input type="password" placeholder="Password" /><br>
                        <input type="button" value="Sign in" />
                        <input onclick="window.location.href='../inscription.html';" type="button" value="S'inscrire" /><br>
                        <a href="../motdepasse.html" id="mdp"> Forgot password ?</a>
                    </form>
                </div>
            </div>
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

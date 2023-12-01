<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons2.1.4/css/boxicons.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
    <title>Connexion</title>
</head>
<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <p>
                    <img src="image/logo." alt=""></p>
            </div>
            <div class="nav-menu" id="navMenu">
                <ul>
                    <li> <a href="" class="link active">aceuille</a> </li>
                    <li> <a href="" class="link"> inscription</a> </li>
                    <li> <a href="" class="link"> buletins</a> </li>
                    <li> <a href="" class="link"> note</a> </li>
                </ul>
            </div>
            <div class="nav-button">
                <button class="btn white-btn" id="loginBtn" onclick="login()"> sing in</button>
                <button class="btn" id="registerBtn" onclick="register()">sing up</button>
            </div>
            <div class="nav-menu-btn" > 
                <i class="bx bx-menu" onclick="myMenuFunction"></i>
            </div>
        </nav>

        <!-- -----------------------form box------------------------- -->


        <div class="form-box">
            <!-- --------------login form-------------------- -->
                <div class="login-container" id="login">
                    <form action="connexion_user.php" method="post">
                            <div class="top">
                                <span>Don't have an acount <a href="" onclick="register()">sing up</a> </span>
                                <header>Login</header><br>
                                <center>
                                    <p>
                                        <?php 
                                            if(isset($_GET['login_err']))
                                            {
                                                $err = htmlspecialchars($_GET['login_err']);

                                                switch($err)
                                                {
                                                    case 'password':
                                                    ?>
                                                        <div style="color: red;" class="alert alert-danger">
                                                            <strong>Erreur</strong> mot de passe incorrect
                                                        </div>
                                                    <?php
                                                    break;

                                                    case 'email':
                                                    ?>
                                                        <div style="color: red;" class="alert alert-danger">
                                                            <strong>Erreur</strong> email incorrect
                                                        </div>
                                                    <?php
                                                    break;

                                                    case 'already':
                                                    ?>
                                                        <div style="color: red;" class="alert alert-danger">
                                                            <strong >Erreur</strong> compte non existant
                                                        </div>
                                                    <?php
                                                    break;
                                                }
                                            }
                                        ?>                                     
                                    </p>                                    
                                </center>

                            </div>
                            <div class="input-box">
                                <input type="text" class="input-field" placeholder=" Username or Email" name="email">
                                <i class="bx bx-user"></i>
                            </div>

                            <div class="input-box">
                                <input type="password" class="input-field" placeholder="password" name="password">
                                <i class="bx bx-lock-alt"></i>
                            </div>

                            <div class="input-box">
                                <input type="submit" class="submit" value="Sing In">
                            </div>

                            <div class="two-col">
                                <div class="one">
                                    <input type="checkbox"  id="login-check">
                                    <label for="login-check">Remenber me</label>
                                </div>

                                <div class="two">
                                    <label> <a href="">Forgot password</a> </label>
                                </div>
                            </div>
                    </form>
                </div>



            <!-- --------------registration form-------------------- -->



            <div class="register-container" id="register">
                <form action="ajouterUser.php" method="post">
                        <div class="top">
                            <span>Have an account <a href="" onclick="login()">Login</a> </span>

                            <header>Sing Up</header>
                        </div>
                        <div class="two-forms">
                            <div class="input-box">
                                <input type="text" class="input-field" placeholder="firstname" name="nom">
                                <i class="bx bx-user"></i>
                            </div>
                            <div class="input-box">
                                <input type="text" class="input-field" placeholder="lastname" name="prenom">
                                <i class="bx bx-user"></i>
                            </div>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Email" name="email">
                            <i class="bx bx-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="password" class="input-field" placeholder="password" name="mp">
                            <i class="bx bx-lock-alt"></i>
                        </div>
                        <div class="input-box">
                            <input type="submit" class="submit" value="Register" name="register">
                        </div>
                        <div class="two-col">
                            <div class="one">
                                <input type="checkbox"  id="register-check">
                                <label for="register-check">Remenber me</label>
                            </div>
                            <div class="two">
                                <label> <a href="">Terms & conditions</a> </label>
                            </div>
                        </div>               
                </form>
            </div> 
        </div>



        <script>
            function myMenuFunction() {
            var i = document.getElementById("navMenu");
            if(i.className === "nav-menu"){
            i.className += " responsive";
             }
            else {
                        i.className = "nav-menu";
             }
             }
            
        </script>

        <script>
            var a = document.getElementById("loginBtn");
            var b = document.getElementById("registerBtn");
            var x = document.getElementById("login");
            var y = document.getElementById("register");
              
            function login () {
            x.style.left = "4px";
            y.style.right = "-520px";
            a.className += " white-btn";
            b.className = "btn";
            x.style.opacity = 1;
            y.style.opacity= 0;
             }
    
           function register () {
           x.style.left = "-510px";
           y.style.right = "5px";
           a.className ="btn";
           b.className +=" white-btn";
           x.style.opacity = 0;
           y.style.opacity = 1;
             }

          

        </script>

   
</body>
</html>
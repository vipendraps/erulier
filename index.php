<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> Erulier
        </title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
        <!--
            <link type="text/css" rel="stylesheet" href="css/homepage.css"/>
        -->
    </head>
    <body>
        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Erulier</a>
                </div>

            </div>
        </div>


        <?php
        if (isset($_POST["isSignIn"]) && strcmp($_POST["isSignIn"],"1")==0) :
        ?>
        <div class="container">
            <form class="form-signin" role="form" action="web/signup.php" method="post">
                <!--     <h2 class="form-signin-heading">Please sign in</h2> -->
                <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <input type="text" name="isSignUp" value="1" style="display: none"/>
                <!---
                <label class="checkbox">
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
                -->
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>

        </div>	

        <?php
        else :
        ?>
        <div class="container">
            <form class="form-signin" role="form" action="web/signup.php" method="post">
                <!--     <h2 class="form-signin-heading">Please sign in</h2> -->
                <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
                <input type="email" class="form-control" placeholder="Email address" name="email" required >
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <input type="text" name="isSignUp" value="1" style="display: none"/>
                <!---
                <label class="checkbox">
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
                -->
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
            </form>
            <form class="form-signin" role="form" action="index.php" method="post">
                <input type="text" name="isSignIn" value="1" style="display: none"/>
                <button class="btn btn-lg btn-default btn-block" type="submit">Sign in</button>
            </form>

        </div>	

<?php
 endif;
?>
        <div id="footer">
            <div class="container">
                <ul class="nav navbar-nav ">
                    <li ><a href="#"  >Home</a></li>
                    <li ><a href="#">About Us</a></li>
                    <li ><a href="#">Contact</a></li>
                    <li ><a href="#">Terms of use</a></li>
                    <li ><a href="#">Privacy</a></li>
                    <li ><a href="#">Policy</a></li>
                </ul>

            </div>
        </div>
        <!-- Bootstrap core JavaScript
   ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/docs.min.js"></script>
    </body>
</html>
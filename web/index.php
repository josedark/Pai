<?php 

  //require_once("Facebook/start.php");

 ?>


<html>
<head>
  <title></title>
</head>
   <link href="login/login.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" > 
    
    
 

<body>
<div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <img src="login/logo.png" class="img-responsive" alt="Conxole Admin"/>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form accept-charset="UTF-8" role="form" class="form-signin">
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Username" id="username" type="text">
                                        <input class="form-control" placeholder="Password" id="password" type="password">
                                        <br>
                                        <?php 
                                          echo '<a id="btn-fblogin" href="menu_princiopal.php" class="btn btn-primary btn-block"> registrarse con facebook</a>';
                                        //echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

                                         ?>
                                         </br>
                                    

                                        <input class="btn btn-lg btn-success btn-block"  id="login" value="Login »">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<script type="text/javascript" src="js/jquery-2.1.1.min.js" ></script>
<script type="text/javascript"src="js/bootstrap.min.js"></script>
<script type="text/javascript"src="js/TweenMax.min.js"></script>
<script type="text/javascript" src="login/login.js"></script>

 
 <?php

  // crea el pie de pagina
  require_once("menu_principal/footer.php");

?>

</body>
</html>

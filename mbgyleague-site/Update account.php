<?php require 'mbgyleague/Connections/Connections.php'?>
<?php
    session_start();
    if(isset($_SESSION["UserID"])){
        
    }else{
        header('Location: Login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="mbgyleague/mbgyleague-css/Menu.css" rel="stylesheet" type="text/css">
    <link href="mbgyleague/mbgyleague-css/Master.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <title>Account</title>
</head>
    
<body>
    <div class="Container">
        <div class="Header">
        </div>
        <div class="menu">
            <div id="Menu">
                <nav>
                    <ul class="cssmenu">

                        <li><a href="#">Register</a></li>
                        <li><a href="#">Log in</a></li>

                    </ul>
                </nav>
            </div>
        
        </div>
        <div class="LeftBody"></div>
        <div class="RightBody">
            <form action="" method="post" name="RegisterForm" id="RegisterForm">
                <div class="FormElement">
                    <input name="" type="text" required="Required" class="TField" id="Name" placeholder="Full name">
                </div>
            </form>
        </div>
        <div class="Footer"></div>
    </div> 
    
</body>
</html>
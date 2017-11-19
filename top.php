<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> <?php echo $t."-Shophia"; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="font/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="img/icons8-People in Car Filled-50.png">
        <script src="css/jquery-1.8.2.min.js" ></script>
        <script src="css/jquery.bxslider.min.js" ></script>
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="style.css">
        <link href="css/login.css" rel="stylesheet">
        <script src="css/jscript.js"></script>
         <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
        <![endif]-->  
            
    </head>
    <body>
        <div class="wrap-1">
            <div class="container">
                <header>
                    <div class="row">
                        <div class="col-8 col-xs-12">
                            <ul>
                                <?php
                                    if(isset($_SESSION["user"])){
                                ?>
                                
                                <li><a href="index.php"><?php echo $_SESSION["user"]; ?> |</a></li>
                                <li><a href="#">My Wishlist |</a></li>
                                <li><a href="#">My Orders |</a></li>
                                <li><a href="#">My Cart |</a></li>
                                <li><a href="myaccount.php">My Account |</a>
                                    
                                </li>
                                 <?php
                                 }
                                 else{
                                ?>
                                    <li><a href="#">hello guest |</a></li>
                                 <?php } ?>    
                                
                                <?php
                                    if(isset($_SESSION["user"])){ 
                                ?>
                                        <li><a href="Logout.php">Logout</a></li>
                                <?php
                                    }
                                    else{ ?>
                                        <li><a href="Login.php">Login</a></li>
                                <?php
                                    }
                                ?>
                                
                            </ul>    
                        </div>
                   
                    <div class="col-4 col-xs-12">    
                    <div class="social">
                        
                        <ul>
                            <li class="li"><a href="#" target="_blank"></a></li>
                            <li class="tw"><a href="#" target="_blank"></a></li>
                            <li class="pi"><a href="#" target="_blank"></a></li>
                            <li class="gp"><a href="#" target="_blank"></a></li>
                            <li class="rss"><a href="#" target="_blank"></a></li>
                            
                        </ul>
                    </div>
                    </div>
                    </div>
                
                </header>
            
           
            
                <nav>   
                    
                    <div class="nav">
                       
                            
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li><a href="#">fashion</a>
                                <ul class="subnav">
                                    <li><a href="menClothes.php">men</a>
                                   <!-- <ul>
                                        <li><a href="#">tshirts</a></li>
                                        <li><a href="#">casual shirt</a></li>
                                        <li><a href="#">shirt</a></li>
                                        <li><a href="#">jeans</a></li>
                                        <li><a href="#">pants</a></li>
                                        <li><a href="#">suit</a></li>
                                    </ul>-->
                                    </li>
                                    <li><a href="womenClothes.php">women</a>
                                        <!--<ul>
                                            <li><a href="#">tshirts</a></li>
                                            <li><a href="#">casual shirt</a></li>
                                            <li><a href="#">shirt</a></li>
                                            <li><a href="#">jeans</a></li>
                                            <li><a href="#">inner wears</a></li>
                                            <li><a href="#">suit</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a href="#">kid</a></li>
                                    
                                </ul>
                            </li>
                        <li><a href="#">electronics</a>
                            <ul class="subnav">
                                <li><a href="#">mobile</a></li>
                                <li><a href="#">laptops</a></li>
                                <li><a href="#">tablets</a></li>
                                <li><a href="#">computer accessories</a></li>
                                <li><a href="#">televisions</a></li>
                                <li><a href="#">cameras</a></li>
                                <li><a href="#">desktops</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="#">offers</a>
                            <ul class="subnav">
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">electronics</a></li>
                                
                            
                            </ul>
                        </li>
                        <li><a href="#">social</a>
                            <ul>
                                <li><a href="#">facebook</a></li>
                                <li><a href="#">twitter</a></li>
                                <li><a href="#">LinkedIn</a></li>
                                <li><a href="#">gmail</a></li>
                            </ul>
                        </li>
                        </ul>
                      
                </div>
                    
                </nav>
            </div>    
        </div> 
<?php
    session_start();
    
    if(isset($_SESSION["user"]))
    {
        unset($_SESSION["user"]);
        session_destroy();
        $_SESSION=array();
    }
    $x=3;
    $t="home";
    require_once 'top.php';
?>
   <!-- <div class="container">you have been log out</div> -->

    

<?php
    require_once 'xyz.php';
?>
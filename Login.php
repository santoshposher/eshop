<?php
    session_start();
    $t="Login";
    require_once 'top.php';
    if(isset($_SESSION["user"])){
        $t='$_SESSION["user"]';
        require_once 'top.php';
        echo "<div class='container'>you have been logged in as". $_SESSION["user"]."</div>" ;
    }
    else{
        $t="Login";
        require_once 'top.php';
?>

    <div class="container">
        <div class="fo">
        <form class="login" action="logindb.php" method="post">
            <label>username &nbsp;&nbsp;<input type="text" name="u" required><br></label>
            <label>password &nbsp;&nbsp;<input type="password" name="p" required><br></label>
                <input type="submit" value="login" name="sub">
                <p>Not a member?</p><a href="signup_form.php">Sign Up</a>
        </form>
        </div>    
    </div>
<?php 
    }
?>    
<?php
require_once 'bottom.php';
?>


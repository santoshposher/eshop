
<?php
        if(isset($_POST["sub"])){
            $un=$_POST["un"];
            $pass=$_POST["p"];
            $s_q=$_POST["sq"];
            $s_a=$_POST["sa"];
            
            
            $path="img/model/dummy.jpg";
            if($_FILES["f"]["error"]==0){
                $path="img/model".$_FILES["f"]["name"];
                move_uploaded_file($_FILES["f"]["tmp_name"], $path);
                
            }
            
            $db=new mysqli("localhost","root","","mywebapp");
            $db->query("insert into userinfo(username,password,sq,sa,profile_pic)values('$un','$pass','$s_q','$s_a','$path')");
            //$row->fetch_assoc();
           
            if(($db->affected_rows)==1){
                echo "<div class='container'>Congratulation!You have been signed in.</div>";
            }
            $db->close();
        }
    ?>


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
        <form class="login" action="logindb.php" method="post">
            <label>username &nbsp;&nbsp;<input type="text" name="u" required><br></label>
            <label>password &nbsp;&nbsp;<input type="password" name="p" required><br></label>
                <input type="submit" value="login" name="sub">
                <p>Not a member?</p><a href="signup_form.php">Sign Up</a>
        </form>
    </div>
<?php 
    }
?>    
<?php
require_once 'bottom.php';
?>
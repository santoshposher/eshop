
        <?php
            session_start();
            if(isset($_POST["sub"])){
            $un=$_POST["u"];
            $pass=$_POST["p"];
            $db=new mysqli("localhost","root","","mywebapp");
            $r=$db->prepare("select username,profile_pic from userinfo where username='$un' and password='$pass'");
            $r->execute();
            $r->bind_result($username,$profile);
            $i=0;
            while($r->fetch()){
                //echo "<a href='user.php?username=$un'></a>";
                $_SESSION["user"]=$username;
                $_SESSION["pic"]=$profile;
                
                
                $i++;
                if($i==1){
                    break;
                }
            }
            $db->close();
            }
        // put your code here
        ?>
        <?php
            if(isset($_SESSION["user"])){
                $t=$_SESSION["user"];
            }
            else{
                $t="login";
            }
            require_once 'top.php';
    ?>
            <?php
                if(!isset($_SESSION["user"])){
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
        require_once 'xyz.php';
   ?>
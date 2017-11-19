<?php
    session_start();
    
    $t="home";
    require_once 'top.php';
?>

    <?php
        if(isset($_POST["sub"])){
            $un=$_POST["un"];
            $pass=$_POST["p"];
            
            
            $s_q=$_POST["sq"];
            $s_a=$_POST["sa"];
            $path="img/model/dummy.jpg";
            if($_FILES["f"]["error"]==0){
                $path="img/model/".$_FILES["f"]["name"];
                move_uploaded_file($_FILES["f"]["tmp_name"], $path);
                
            }
            
            $db=new mysqli("localhost","root","","mywebapp");
            $name=$_SESSION["user"];
            $db->query("delete from userinfo where username='$name'");
            $db->query("insert into userinfo(username,password,sq,sa,profile_pic)values('$un','$pass','$s_q','$s_a','$path')");
            //$row->fetch_assoc();
           
            if(($db->affected_rows)>0){
                echo "<div class='container'>Congratulation!Your data has been updated.</div>";
            }
            else{
                echo "Your data has not updated.";
            }
        }
    ?>
<?php
    require_once 'bottom.php';
?>    



















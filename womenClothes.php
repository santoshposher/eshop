<?php 
    session_start();
    $t="womens-wear";
    require_once 'top.php';
?>
<?php
    $db=new mysqli("localhost","root","","mywebapp");
    $r=$db->prepare("select brand,imgpath from w_tshirt");
    $r->execute();
    $r->bind_result($brand,$imgpath);
    //$arr =array("This is new arrival of summer","summer collection","","",);
    while($r->fetch()){
      
        echo "<div class='container'><table><tr><th><li><a href='womensClotheshow.php?path=$imgpath'><img src='$imgpath' name='img1'></a></li></th><th>this is new arrival of $brand</th></tr></table></div>";
    }
    $db->close();
    
?>
    <div class="container">
        
    </div>
<?php 
require_once 'bottom.php';
?>
<?php
    session_start();
    $t="mens-wear";
    require_once 'top.php';
?>
        <?php
            foreach($_GET as $i=>$j){
                //echo "$i is $j";
            }
            echo "<div class='container'><img src='$j'></div>";
            
        ?>
<div class="container"><br><a href="menClothes.php"><button>back</button></a></div>
<?php 
        require_once 'bottom.php';
?>    
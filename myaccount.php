<?php
    session_start();
    $t=$_SESSION["user"];
    require_once 'top.php';
?>
    <div class="container">
        <table>
            <tr>
                <th>
                    <a href="updateAccount.php">Update Account Detail</a>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="updateAccount">Change Password</a><br>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="updateAccount">Change Username</a><br>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="updateAccount">Deactivate Account</a><br>
                </th>
            </tr>
        </table>
        
        
        
        
    </div>
<?php
require_once 'bottom.php';
?>
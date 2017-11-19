<?php
    $t="sign up";
    require_once 'top.php';
    
?>
    <div class="container">
        
        <div class="for">
            <form action="signup.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <th>
                            <lablel>username<br><input type="text" name="un" required></lablel>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <lablel>password<br><input type="password" name="p" required></lablel>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label>security question<br><select name="sq">
                                <option>security question</option>    
                                <option>What is your favourite book?</option>
                                <option>What is your favourite breakfast?</option>
                                <option>What is your favourite  novel?</option>
                                <option>What is your favourite novelist?</option>
                                <option>What is your favourite actoress?</option>
                                <option>What is your favourite place?</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <lablel>security answer<br><input type="text" name="sa" required></lablel>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <lablel>profile picture<br><input type="file" name="f" required></lablel>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <lablel>birthday<br><input type="date" name="bday" max="2017-06-07" min="1900-12-20" required></lablel>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <lablel>Age<br><input type="number" name="age" min="10" max="110" required></lablel>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <input type="submit" name="sub" value="submit">
                        </th>
                        <th>
                            <input type="reset" name="reset" value="reset">
                        </th>
                    </tr>
                    
                </table>
            </form>
        </div>
         
    </div>
<?php
require_once 'bottom.php';
?>
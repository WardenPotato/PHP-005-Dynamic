<?php
/**
 * Created by PhpStorm.
 * User: Warden Potato
 * Date: 5/8/2018
 * Time: 12:55
 */
//        for($i = 1; $i <= 9; $i++){
//            echo"<img src='img/aap".$i.".jpg'>";
//        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="aap.php" method="get">
    <select name="select1[]" multiple>
        <?php
        for($i = 1; $i <= 9; $i++){
            echo"<option value='aap$i'>Aap $i</option>";
        }
        ?>
    </select>
    <input type="submit" name="knop" value="verstuur">
</form>
</body>

</html>


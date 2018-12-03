<?php
 date_default_timezone_set('Europe/Bucharest');
 include('server.php')
  ?>
  
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit comment</title>
    <link rel="stylesheet" type="text/css" href="styles/styleReview.css">
</head>

<body>
    <?php
$cid = $_POST['cid'];
$uid = $_POST['uid'];
$date = $_POST['date'];
$message = $_POST['message'];


echo "<form method='POST' action='".editComments($db)."'>
                    <input type='hidden' name='cid' value='".$cid."'>
                        <input type='hidden' name='uid' value='".$uid."'>
                         <input type='hidden' name='date' value='".$date."'>
                           <textarea name='message'>".$message."</textarea><br>
                             <button type='submit' name='commentSubmit'>Edit</button>
                                </form>";

    ?>

    </body>
    </html>

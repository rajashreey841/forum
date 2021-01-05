<?php

include "../functions/db.php";
date_default_timezone_set("Asia/Taipei");
$datetime = date("Y-m-d h:i:sa");

extract($_POST);
$sql = "INSERT INTO tblpost(post_id,title,content, datetime,cat_id,user_Id) VALUES ('$title','$content','$category','$datetime','$user')";
$res = mysqli_query($con, $sql);

if ($res == true) {
        echo '<script language="javascript">';
        echo 'alert("Post Successfully")';
        echo '</script>';
        echo '<meta http-equiv="refresh" content="0;url=home.php" />';
} else {
        echo '<script language="javascript">';
        echo 'alert("Post unSuccessfully")';
        echo '</script>';
        echo '<meta http-equiv="refresh" content="0;url=home.php" />';
}

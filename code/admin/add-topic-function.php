<?php
include "../functions/db.php";
 					date_default_timezone_set("Asia/Kolkata");
                        $datetime=date("Y-m-d H:i:s");
extract($_POST);
$user_Id = 0012;
$sql = "INSERT INTO tblpost(title, content, cat_id, datetime , user_Id) VALUES ('$title','$content','$category','$datetime','$user_Id')";
$res = mysqli_query($con,$sql);

header("Location:post.php");


?>
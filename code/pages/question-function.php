<?php

include "../functions/db.php";
date_default_timezone_set("Asia/Taipei");
$datetime = date("Y-m-d h:i:sa");

extract($_POST);
echo '<script type="text/javascript">alert("'.$category.'");</script>';
echo '<script type="text/javascript">alert("'.gettype($category).'");</script>';
if ($category === '1') {
        $category_id = 1;
}
else if ($category === '2') {
        $category_id = 2;
}
else if($category === '6') {
        $category_id = 6;
}
echo '<script type="text/javascript">alert("'.$category_id.'");</script>';
$sql = "INSERT INTO `tblpost`(`title`, `content`, `datetime`, `cat_id`, `user_Id`) VALUES ('$title','$content', '$datetime', $category_id, 'raji')";
echo '<script type="text/javascript">alert("'.$sql.'");</script>';
$res = mysqli_query($con, $sql);

if ($res == true) {
        echo '<script language="javascript">';
        echo 'alert("Posted Successfully")';
        echo '</script>';
        echo '<meta http-equiv="refresh" content="0;url=home.php" />';
} else {
        echo '<script language="javascript">';
        echo 'alert("Post Unsuccessful")';
        echo '</script>';
        echo '<meta http-equiv="refresh" content="0;url=home.php" />';
}

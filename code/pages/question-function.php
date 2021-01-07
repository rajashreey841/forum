<?php

include "../functions/db.php";
date_default_timezone_set('Asia/Kolkata');
$datetime =  date('Y-m-d H:i:s');
echo 'alert("Posted Successfully")';


extract($_POST);
if ($category === '1') {
        $category_id = 1;
}
else if ($category === '2') {
        $category_id = 2;
}
else if($category === '3') {
        $category_id = 3;
}
else if($category === '4') {
        $category_id = 4;
}
else if($category === '5') {
        $category_id = 5;
}
else if ($category === '6') {
        $category_id = 6;
}
else if($category === '7') {
        $category_id = 7;
}
else if($category === '8') {
        $category_id = 8;
}
else if($category === '9') {
        $category_id = 9;
}
else if ($category === '10') {
        $category_id = 10;
}
else if($category === '11') {
        $category_id = 11;
}
else if($category === '12') {
        $category_id = 12;
}
else if($category === '13') {
        $category_id = 13;
}
else if ($category === '14') {
        $category_id = 14;
}
else if($category === '15') {
        $category_id = 15;
}
else if($category === '16') {
        $category_id = 16;
}
else if($category === '17') {
        $category_id = 17;
}
else if($category === '18') {
        $category_id = 18;
}
echo '<script type="text/javascript">alert("'.$datetime.'");</script>';
$sql = "INSERT INTO `tblpost`(`title`, `content`, `datetime`, `cat_id`, `user_Id`) VALUES ('$title','$content', '$datetime', $category_id, 'raji')";
echo '<script type="text/javascript">alert("'.$sql.'");</script>';
$res = mysqli_query($con, $sql);

if ($res == true) {
        echo "Study PHP at " . $datetime ;
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

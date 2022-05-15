<?php
if(isset($_FILES['image'])) {
    include_once $_SERVER['DOCUMENT_ROOT'] . "/db.class.php";
    DB::getInstance();

    $uploadTypeFile = "";
    if ($_FILES['image']['type'] = 'image/jpeg')
        $uploadTypeFile = ".jpg";

    $uploadNameFile = md5(time().$_FILES['image']['name']);
    $uploadNameDirection = $_SERVER['DOCUMENT_ROOT']."/upload/avatars/";

    $uploadAvatar = $uploadNameDirection.$uploadNameFile.$uploadTypeFile;
    if (move_uploaded_file($_FILES['image']['tmp_name'],
        $uploadAvatar
    )) {
    } else {
    }
    $strQueryAvatar = "`avatar_name` = '"."/upload/avatars/".$uploadNameFile.$uploadTypeFile . "'";

    $query = "UPDATE `users` SET ".$strQueryAvatar." WHERE id=".$_SESSION['id'];         
    $res = DB::query($query);
}
?>
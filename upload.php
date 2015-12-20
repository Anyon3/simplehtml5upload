<?php

    //Check if $_FILES isn't empty
    if((int)$_FILES['file']['error'] !== 0) exit('err');

    //Set $_FILES value into variable
    $name = $_FILES['file']['name'];
    $type = $_FILES['file']['type'];
    $tmpn = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];

    $chtype = ['image/png','image/jpeg','image/jpg','image/gif'];

    //Check if the size and mime type
    if($size > 819200 || !in_array($type, $chtype))
        exit('err');

    //Set extention
    if($type === 'image/png')
        $ext = "png";
    elseif($type === 'image/jpeg')
        $ext = 'jpeg';
    elseif($type === 'image/jpg')
        $ext = 'jpg';
        elseif($type === 'image/gif')
        $ext = 'gif';
    else
       exit('err');

    //Set a random filename
    $newn = mb_substr(md5(microtime()), 0, 25);

    //Move the file to the final directory, from the temp directory
    move_uploaded_file($tmpn, dirname(__FILE__) . "/../cache/temp/$newn.$ext");

    echo "$newn.$ext";

?>

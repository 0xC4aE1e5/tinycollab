<?php
    $ext = pathinfo($_FILES["fil"]["name"], PATHINFO_EXTENSION);
    $id = bin2hex(random_bytes(32));
    file_put_contents($_FILES["fil"]["name"].$id.".".$ext, file_get_contents($_FILES["fil"]["tmp_name"]));
    header("Refresh: 0; edit.php?f=".$id);
?>
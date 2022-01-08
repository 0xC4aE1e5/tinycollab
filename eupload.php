<?php
    unlink(glob("*".$_POST["id"]."*")[0]);
    $ext = pathinfo($_FILES["fil"]["name"], PATHINFO_EXTENSION);
    file_put_contents($_POST["f"].".".$ext, file_get_contents($_FILES["fil"]["tmp_name"]));
    header("Refresh: 5; edit.php?f=".$_POST["id"]);
    echo "Uploaded! Redirecting in 5 seconds...";
?>
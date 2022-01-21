<?php
    if (count(glob("*.".$_POST["id"].".*")) == 0 || file_exists(glob($_POST["f"]."*")[0])) {
        die("ID's corresponding file does not exist. That will break the server. Quitting.");
    }
    unlink(glob("*.".$_POST["id"].".*")[0]);
    $ext = pathinfo($_FILES["fil"]["name"], PATHINFO_EXTENSION);
    file_put_contents($_POST["f"].".".$ext, file_get_contents($_FILES["fil"]["tmp_name"]));
    header("Refresh: 0; edit.php?f=".$_POST["id"]);
    echo "Uploaded! Redirecting shortly...";
?>
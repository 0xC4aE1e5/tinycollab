<?php
    $filename = glob("*".$_GET["f"]."*")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tinycollab</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="dl.php?f=<?php echo $filename; ?>">download the file</a><br>or<form action="eupload.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="f" value="<?php echo $filename; ?>">
        <input type="hidden" name="id" value="<?php echo $_GET["f"]; ?>">
        <input type="file" name="fil">
        <input type="submit" value="update the file!">
    </form>
</body>
</html>
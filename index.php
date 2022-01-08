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
    <h1>tinycollab</h1>
    <p>Upload a file here:</p>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fil">
        <br>
        <input type="submit" value="Upload!">
    </form>
</body>
</html>
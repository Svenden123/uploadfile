
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo $name = $_FILES['file']['name'] . "<br>";
echo $type = $_FILES['file']['type'] . "<br>";
echo $tmp_location = $_FILES['file']['tmp_name'] . "<br>";
echo $error= $_FILES['file']['error'] . "<br>";


?>

<form action="files.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">SUBMIT</button>

</form>
</body>
</html>

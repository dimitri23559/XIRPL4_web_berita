<?php
require 'logic.php';

$id = $_GET["id"];
$news = mysqli_query($conn, "SELECT * FROM data WHERE id =$id");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {
            color: blue;
            text-align: center;
        }
        h4 {
            color: red;
            text-align: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<header align="center">
    <?php foreach( $news as $row ) : ?>
    
    <h1><?= $row["title"]; ?></h1>
    <?php endforeach; ?>
</header>    

<?php foreach( $news as $row ) : ?>
    <h4 align = "center"><?= $row["content"]; ?></h4>
<?php endforeach; ?>



</body>
</html>
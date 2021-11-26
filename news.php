<?php
require 'logic.php';

$id = $_GET["id"];
$news = mysqli_query($conn, "SELECT * FROM data WHERE id =$id");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: #edc9af;
        }
        h1 {
            border: 0px solid black;
            color: black;
            bold: bold;
            text-align: center;
            background-color: #edc9af;
        }
        h4 {
            color: red;
            text-align: center;
        }
        h3 {
            color: green;
            text-align: left;
        }
        div {
            border-radius: 5px;
            background-color: #ffddca;
            padding: 20px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;}
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
<h3><?= $row["tanggal"]; ?></h4>
<?php endforeach; ?>
<div>

<?php foreach( $news as $row ) : ?>
    <h4 align = "center"><?= $row["content"]; ?></h4>
<?php endforeach; ?>


</div>
<button><a href="index.php">kembali</a></button>


</body>
</html>
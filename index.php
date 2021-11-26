<?php
include ("logic.php");

$news = mysqli_query($conn, "SELECT * FROM data");



?>

 


<!DOCTYPE html>
<html>
<style>

h1 {
    color: red;
    text-align: center;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h1>BERITA TERKINI</h1>



<table  border="1" cellpadding="10" cellspacing="0" align="center">
  

<tr>
  <th>judul</th>
  <th>deskripsi</th>
</tr>
<?php foreach( $news as $row ) : ?>
<tr>
  <td>
  <a href= "news.php?id=<?=$row ["id"];?>"><?= $row["title"]; ?></a>
  </td>

  <td><?= $row["deskripsi"]; ?></td>

</tr>
<?php endforeach; ?>
</table>

</body>
</html>

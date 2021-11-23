<?php
$conn = mysqli_connect("localhost", "root", "", "berita");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    // $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        // $rows[] = $row;
        $rows = $row;
    }
    return $rows;
}





function register($data) {
	global $conn;

	$username = htmlspecialchars($_POST["username"]);
	$password = htmlspecialchars($_POST["password"]);
	$email = htmlspecialchars($_POST["email"]);

	// cek username sudah pernah ada atau belum
	$cek_username = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	if( mysqli_num_rows($cek_username) === 1 ) {
		echo "<script>
				alert('username sudah terpakai!');
				document.location.href = '';
			  </script>";
		return false;
	}

	// tambahkan user baru ke database
	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// insert ke DB
	$query = "INSERT INTO user VALUES ('', '$username', '$password', '$email', CURRENT_TIMESTAMP)";
	mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "berita");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function cek($data){
global $conn;
	
		
		//ambil data dari tiap elemen dalam form
		$id_jurusan = ($data["id_jurusan"]);
		$nis   = ($data["nis"]);
}


?>
<?php 

if(isset($_POST['id'])){

		$id = $_POST['id'];

		$link = mysqli_connect("localhost", "root", "", "analisis");
		 
		// jalankan query
		$sql = "SELECT * FROM biodata WHERE id = '$id'";
		$result = mysqli_query($link, $sql);

		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		echo json_encode($row);
		exit;
}

 ?>
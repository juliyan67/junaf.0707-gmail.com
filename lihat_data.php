<?php
	require_once'setting_server.php';
	$query = 'select * from kasku';
	$sql = mysqli_query($con,$query);

	$ray = array();

	while ($row = mysqli_fetch_array($sql)){
	array_push($ray,array(
	"id_cashku" => $row['id_cashku'],
	"nama_cashku" => $row ['nama_cashku'],
	));
	}

	echo json_encode($ray);
	mysqli_close($con)
?>
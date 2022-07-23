<?php
	// include('config.php');

	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL, "http://localhost/Web_service_1.0/service/select");
	curl_setopt($curl, CURLOPT_POST, 1);
	// curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array(''=>'')));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$server_output = curl_exec($curl);
	curl_close($curl);
	
	$resultado = json_decode($server_output);

	echo $server_output;
		// echo $server_output;



	//------------------------------------------------------------------------------------------------
	// $id = 2;
	// $image = $resultado[$id];

	// echo '<img src="'.$resultado[$id]->image.'" width="300" height="200">';
	// echo $resultado[$id]->image;

	// foreach ($resultado as $key => $value) {
	// 	echo $value->name;
	// 	echo '<br/>';
	// 	echo '<img src="'.$value->image.'" width="300" height="200">';
	// 	echo '<br/>';
	// }
		// echo '<h2>Nome:'.$value['name'].'</h2>';


	// echo '<img src="'.$resultado[0]->image.'" width="300" height="200">';
	// print_r($server_output);
?>

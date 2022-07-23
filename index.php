<?php
	include('config.php');
	include('classes/service.php');

		// $url = $_GET['url'];
		// $separator = explode('/',$url);
		// echo $controller = $separator[0];
		// echo $action = $separator[1];
		
		// echo "Teste";
		
		// $start = New $controller();
		// $start->$action();
//---------------------------------------------------------------------
	// if (isset($_POST['id'])){
	// 	$id = $_POST['id'];
	// 	$service = New service();
	// 	$service->selectBy($id);
	// }

	// if(isset($_POST['insert']) && $_POST['insert'] == 'chave'){
	// 	$nome = $_POST['nome'];
	// 	$marca = $_POST['marca'];
	// 	$image = $_POST['image'];

	// 	$service = New service();
	// 	$service->insert($nome,$marca,$image);
	// }
//----------------------------------------------------------------------
	if (isset($_GET['url'])) {
			$url = $_GET['url'];
	}else{
		$url = '';
	}

	$separator = explode('/',$url);
	$query = $separator[0];
	// $image = $_FILES['upload'];


	//retirar o if retorna de acordo com a url...
	//retirar o if retira a chave de segurança.
	if (isset($_POST['key']) && $_POST['key'] == 'MY_KEY') {
		switch ($query) {
			case 'info':
				$service = New service();
				$service->info();
				break;

			case 'selectAll':
				$service = New service();
				$service->select();
				break;

			case 'selectId':
				$service = New service();
				$service->selectId();
				break; 

			case 'insert':
				$image = $_FILES['upload'];
				$service = New service();
				if ($service->validaImg($image)) {
					$service->uploadFile($image);
					$service->insert();
				}
				// $service->insert();
				break;

			// case 'uploadfile':
			// 	$service = New service();
			// 	if ($service->validaImg($image)) {
			// 		$service->uploadFile($image);
			// 	}
				// $service->validaImg($image);
				// $service->uploadFile($image);
				break;


			case 'deleteId':
				$service = New service();
				$service->deleteId();
				break;
			
			default:
				echo 'Verifique a url de requisição.';
				break;
		}
	}
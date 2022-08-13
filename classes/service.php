<?php
	// header('Content-Type: application/json');
	class service
	{
		public function info(){
			$url = INCLUDE_PATH.'inserir';
			$data = array(
				'method'=>array('insert'=>array(
					'message'=>'post needed to insert in db, keys for post: name,marca,image and upload, for upload files. the post key are needed for all methods.',
					'key'=>'YOUR_SECRET_KEY'
				),'insert','selectAll','selectId/ID_HERE','delete/ID_HERE'),
				'message'=>'example:'.$url.', FOR INSERT.',
			);
			return die(json_encode($data, JSON_UNESCAPED_SLASHES));
		}
		public function select(){
			$sql = Mysql::conectar()->prepare("SELECT * FROM `request`");
			$sql->execute();

			$request = $sql->fetchAll(PDO::FETCH_ASSOC);
			// return die(json_encode($request));
			return die(json_encode($request));
		}

		public function selectId(){
			$url = $_GET['url'];
			$sep = explode('/', $url);
			$id = $sep[1];

			$sql = Mysql::conectar()->prepare("SELECT * FROM `request` WHERE id = ?");
			$sql->execute(array($id));
			// $request = $sql->fetch(PDO::FETCH_ASSOC);
			if($sql->rowCount() == 0){
				$request = array(
					'message'=>'error'
				);
			}else{
				$request = $sql->fetch(PDO::FETCH_ASSOC);
				$request += ['message'=>'success'];
				// $request = array('result'=>$sql->fetch(PDO::FETCH_ASSOC),'message'=>'success');
			}
			return die(json_encode($request, JSON_UNESCAPED_SLASHES));
		}

		public function insert(){
			$name = $_POST['name'];
			$marca = $_POST['marca'];
			$image = INCLUDE_PATH.'images/'.$_POST['image'];

			// move_uploaded_file($file['tmp_name'],BASE_DIR_PAINEL.'/uploads/'.$imagemNome);
			$sql = Mysql::conectar()->prepare("INSERT INTO `request` (name,marca,image) VALUES (?,?,?)");
			$sql->execute(array($name,$marca,$image));

			if ($sql->rowCount() == 1){
				$data = array
					(
						'insert'=>'success',
						'message'=>'inserted',
						'data'=>array('name'=> $name,'marca'=> $marca,'image'=> $image)
					);
			}else{
				$data = array
					(
						'insert'=>'false',
						'message'=>'error check all post fields'
					);
			}
			
			return die(json_encode($data, JSON_UNESCAPED_SLASHES));
		}

		public function deleteId(){
			$url = $_GET['url'];
			$sep = explode('/', $url);
			$id = $sep[1];

			$sql = Mysql::conectar()->prepare("SELECT * FROM `request` WHERE id = ?");
			$sql->execute(array($id));
			$img = $sql->fetch()['image'];
			$explode = explode('/', $img);
			$image = end($explode);
			@unlink('images/'.$image);

			$sql = Mysql::conectar()->prepare("DELETE FROM `request` WHERE id = ?");
			$sql->execute(array($id));

			
			if ($sql->rowCount() == 1) {
				$data = array
				(
						'delete'=>'success',
						'message'=>'deleted',
						'id_deleted'=> $id,
					);
			}else{
				$data = array(
					'delete'=> 'false',
					'message'=>'not_exist'
				);
			}

			return die(json_encode($data));
		}

		public function validaImg($imagem){
				if($imagem['type'] == 'image/jpeg' ||
					$imagem['type'] == 'image/jpg' ||
					$imagem['type'] == 'image/png'
				){
					$tamanho = intval($imagem['size']/1024);
					if ($tamanho < 900) {
						return true;
					}else{
						return false;
					}
				}else{
					return false;
				}
		}
		public function uploadFile($file){
			move_uploaded_file($file['tmp_name'],BASE_DIR_PAINEL.'/images/'.$file['name']);
		}
	}  
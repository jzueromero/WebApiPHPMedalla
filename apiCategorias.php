<?php

include_once 'categorias.php';

class apiCategorias {
		
		function getAll()
		{
			$categoria = new categorias();
			$categorias = array();
			$categorias ["items"] = array();

			$res = $categoria->obtenerCategorias();

			if($res->rowCount())
			{
				while ($row = $res->fetch(PDO::FETCH_ASSOC))
				{
					$item = array(
						'id'=> $row['id'],
						'Categoria'=> $row['Categoria'],
						'Imagen'=> $row['Imagen'],
						'Otros'=> $row['Otros']
					);

					array_push($categorias['items'], $item);
				}
				header('Content-Type: application/json');
				//echo json_encode($categorias);
				$this->printJSON($categorias);

			}
			else
			{
				//echo json_decode(array('mensaje'=> 'No hay elementos registrados'));
				$this->error('No hay elementos registrados');
			}


		}


		/*
		Segunda funcionalidad por 
		id
*/
			function printJSON($array)
			{
				echo  json_encode($array) ;

			}

			function error($mensaje)
			{

				echo '<code>'. json_encode(array('mensaje'=>$mensaje)).'</code>';
			}


			function getById($id)
		{
			$categoria = new categorias();
			$categorias = array();
			$categorias ["items"] = array();

			$res = $categoria->obtenerCategoria($id);

			if($res->rowCount() == 1)
			{
				$row = $res->fetch();
					$item = array(
						'id'=> $row['id'],
						'Categoria'=> $row['Categoria'],
						'Imagen'=> $row['Imagen'],
						'Otros'=> $row['Otros']
					);

					array_push($categorias['items'], $item);
				
				header('Content-Type: application/json');
				//echo json_encode($categorias);
				$this->printJSON($categorias);

			}
			else
			{
				//echo json_decode(array('mensaje'=> 'No hay elementos registrados'));
				$this->error('No hay elementos registrados');
			}


		}

//fin de la clase
}




?>
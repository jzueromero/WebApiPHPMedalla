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

				echo json_encode($categorias);

			}
			else
			{
				echo json_decode(array('mensaje'=> 'No hay elementos registrados'));
			}


		}
}

?>
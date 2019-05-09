
<?php 

include_once 'db.php';

/**
 * 
 */
class Categorias extends DB
{
	
	function obtenerCategorias()
	{
		$query = $this->connect()->query('SELECT * FROM categorias');

		return $query;

	}


	/*
	Segunda funcionalidad por id
	*/

	function obtenerCategoria($id)
	{
		$query = $this->connect()->prepare('SELECT  * FROM categorias where id= :id');
		$query->execute(['id' => $id]);

		return $query;

	}

	/*
	Segunda funcionalidad por id
	*/


}
?>
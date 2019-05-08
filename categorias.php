
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
}
?>
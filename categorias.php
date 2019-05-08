
<?php 

include_once 'db.php';

/**
 * 
 */
class ClassName extends DB
{
	
	function obtenerCategorias()
	{
		$query = $this->connect()->query('SELECT * FROM categorias');

		return $query;

	}
}
?>
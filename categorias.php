
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

	/*
	Tercera funcionalidad, agregar categoria
	*/

	function nuevaCategoria($categoria)
	{

		$query = $this->connect()->prepare('INSERT INTO categorias (Categoria, Imagen, Otros) values (:categoria, :imagen, :otros)');
		$query->execute(['categoria' => $categoria['categoria'], 
						'imagen' => $categoria['imagen'], 
						'otros' => $categoria['otros']]);

		return $query;
	}

	/*
	Tercera funcionalidad, agregar categoria
	*/


}
?>
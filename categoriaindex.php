<?php
	include_once 'apiCategorias.php';
	$api = new apiCategorias();

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];

		if(is_numeric($id))
		{
			$api->getById($id);
		}else
		{
			$api->error('El valor debe ser numerico');
		}
		
	}else
	{
		$api->getall();
	}
	

?>
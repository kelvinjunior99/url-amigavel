<?php 

	function routesURL()
	{
		
		if(isset($_GET['url']))
		{	

			$url = $_GET['url'] ? $_GET['url'] : "home";
		}
		else 
		{
			$url = "home";
		}

		switch ($url) {
			case 'home':
				include_once "view/pages/home.php";
				break;


			case 'sobre':
				include_once "view/pages/sobre.php";
				break;

			
			default:
				include_once "view/pages/404.php";
				
				break; 
		}
		



	}

 ?>
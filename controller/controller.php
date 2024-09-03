<?php
class Controller
{
	function __construct()
	{		
		
	}
	
	public function getPage()
	{		
		$command=null;

		
		if(isset($_REQUEST['command']))
			$command=$_REQUEST['command'];
		


		switch($command)	
		{
			case 0:
			{
				include_once('view/home.php');
				break;
			}
			case 1:
			{
				include_once('view/gallery.php');
				break;
			}
			case 2:
			{
				include_once('view/about-us.php');
				break;
			}
		}
	}
}

<?php
    //want to catch specific errors?
	if(isset($_GET['error']))
	{
		if(is_numeric($_GET['error']))
		{
			if($_GET['error'] == (int)'404')
			{
				include_once $_SERVER["DOCUMENT_ROOT"].'/template/template_error_404.php';
			}
		}
	}
?>
<?php
class Session_management
{
	private function startSession()
	{
		session_start();
	}
	private function killSession()
	{
		session_destroy();
	}
	private function sessionOutput($obj)
	{
		return json_encode($obj);
	}
	public function sessionDetails()
	{
		$_func = new Genfunc;
		$this->startSession();
		if(isset($_SESSION) && $_func->nullCheck($_SESSION) == false)
		{
			return sessionOutput($_SESSION);
		}
		return false;
	}
}
?>